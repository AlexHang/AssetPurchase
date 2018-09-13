<?php
session_start();
$servername = "localhost";
$username = "id3302887_admin";
$password = "@sset2017";
$dbname="id3302887_assetpurchase";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$name = "'".$_POST["name"]."'";
$pass = "'".$_POST["password"]."'";
$adress = "'".$_POST["adress"]."'";
$last_name = "'".$_POST["last_name"]."'";
$description= "'".$_POST["description"]."'";
$phone = "'".$_POST["phone"]."'";
$crypt_pass = "'".password_hash($pass , PASSWORD_DEFAULT)."'";
$mail = $_POST["email"];
$email="'".$mail."'";
echo '<br>';
echo "your username is".$name;
echo '<br>';
echo "your password is".$pass;
echo '<br>';
echo "your password is".$email;
echo '<br>';
//now the image upload
$target_dir = "pictures/";
$target_file = $target_dir . basename($mail).'.jpg';
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
//finished image upload;
//now adding image url to databse
$image_url = "'"."https://asset-purchase.000webhostapp.com/profile_picture//".$_POST["email"].".jpg"."'";
$conn->query("INSERT INTO `Users` (name, last-name, password, email,picture,Phone,Description) VALUES ($name,$last_name,$crypt_pass,$email,$image_url,$phone,$description)");
if($conn->error)
echo $conn->error;
?>