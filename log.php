<?php
session_start();
$servername = "localhost";
$username = "id3302887_admin";
$password = "@sset2017";
$dbname="id3302887_assetpurchase";

$is_connected=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully".'<br>';
echo "Your Password is:";
$pass = "'".$_POST["password"]."'";
$crypt_password = password_hash($pass, PASSWORD_DEFAULT);
$email = "'".$_POST["email"]."'";
$x = $conn->query("SELECT `password` FROM `Users` WHERE `email` = $email ");
while ($row = $x->fetch_assoc()) {
    $result = $row['password'];
}
echo " ".$result.'<br>';
if (password_verify($pass, $result)) {
    echo 'Password is valid!';
$_SESSION["connected"] = 1;
$_SESSION["username"] = $_POST["email"];
} else {
    echo 'Invalid password.';
$_SESSION["connected"] = 0;
};
echo '<br>';
echo "Connected successfully".'<br>';
// now the login
echo 'welcome, '.$_POST["email"];
echo '<br>';
echo 'the password you introduced is: '.$_POST["password"];
?>