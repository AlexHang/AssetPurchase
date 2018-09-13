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
<!DOCTYPE html>
<html>
<head>
	<title>Message Page</title>
	<meta http-equiv="refresh" content="5; URL=https://asset-purchase.000webhostapp.com/Asset/message.php">
</head>
<body style="width: 100%; height: 100%;">
      <?php
    
          $sql = "SELECT Sender, Reciever, Subject FROM messages ORDER BY ID ASC";
            $result = $conn->query($sql);
          
                   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print '<p>'.$row["Subject"].'</p>';
    }
} else {
    echo "0 results";
}
                  ?>
</body>
</html>