<?php
session_start();
$servername = "localhost";
$username = "id3302887_admin";
$password = "@sset2017";
$dbname="id3302887_assetpurchase";

$is_connected=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$mess="'".$_POST["mess"]."'";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

    $sql = "INSERT INTO `messages` (`Subject`) VALUES ($mess);";
            $result = $conn->query($sql);
          

   
?>