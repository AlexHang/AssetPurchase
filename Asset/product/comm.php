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
    $id=$_POST["AssetID"];
    $comm='"'.$_POST["comment"].'"';
    $time='"'.date('l jS \of F Y h:i:s A').'"';
    $conn->query("INSERT INTO `comments` (AssetID, Comment, postDate ) VALUES ($id, $comm ,$time )");
if($conn->error)
	echo $conn->error;
else echo "Success"
?>