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
    die("Connection failed: " . $conn->connect_error);}
?>
<?php
$AssetName = "'".$_POST["Asset-Name"]."'";
$country = "'".$_POST["country"]."'";
$Description = "'".$_POST["Description"]."'";
$price = "'".$_POST["price"]."'";
$image = "'".$_POST["image"]."'";
$email = "'".$_POST["email"]."'";
$phone = "'".$_POST["phone"]."'";
$Name = "'".$_POST["UserName"]."'";
$type= "'".$_POST["type"]."'";
$user_image= "'".$_POST["usr_img"]."'";
$conn->query("INSERT INTO `Assets` (AssetName, Price, Location, Description ,imageURL,Type,email,phone,user_name,user_image) VALUES ($AssetName,$price,$country,$Description,$image,$type,$email,$phone,$Name,$user_image)");
if($conn->error)
	echo $conn->error;
else echo "Success"
?>