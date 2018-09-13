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
    $id=$_POST["prod"];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
    <script type="text/javascript">
    function myFunction(){
      document.getElementById("AssetID").value=<?php echo $id; ?>;
    }
    </script>

  </head>

  <body onload="myFunction()" style="background-color: #a2acbc">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Asset Purchase</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-0">
          
        </div>
        <!-- /.col-lg-3 -->
     <?php
    
          $sql = "SELECT AssetID, UserID, AssetName, Price, Location, Description, imageURL, email,phone, user_name,user_image FROM Assets";
            $result = $conn->query($sql);
          
                   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["AssetID"]==$id)
        {
           $asset=$row;
        }
    }
} else {
    echo "0 results";
}
                  ?>
      
        <div class="col-lg-9 col-centered">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src=<?php echo $asset["imageURL"]; ?> alt="">
            <div class="card-body">
              <h3 class="card-title"><?php echo $asset["AssetName"]; ?></h3>
              <h4><?php echo $asset["Price"]; ?></h4>
              <p class="card-text"><?php echo $asset["Description"]; ?></p>
              <p class="card-text">Location: <?php echo $asset["Location"]; ?></p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
               <table style="width:100%; height:250px;">
                <tr style="width:100%; height:100%; background-color:#b0b4ba;">
                    <td style="width:50%; height:100%; align:center;"><center><img src=<?php echo '"'.$asset["user_image"].'"'; ?> style="height:250px;"></center></td>
                    <td style="width:50%; height:100%;">
                        <center><p>posted by</p></center>
                        <center><h1><?php echo $asset["user_name"]; ?></h1></center>
                    <center>Phone: <?php echo $asset["phone"]; ?></center>
                    <center>email: <?php echo $asset["email"]; ?></center>
                
                    </td>
                </tr>
            </table>
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Product Reviews
            </div>

            <div class="card-body">
            <?php
    
            $sql = "SELECT AssetID, commID, Comment, postDate FROM comments";
             $result = $conn->query($sql);
          
                   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["AssetID"]==$id)
        {
           $comm=$row;
           echo '<p>'.$comm["Comment"].'</p>
              <small class="text-muted">Posted on '.$comm["postDate"].'</small>
              <hr>';

        }
    }
} else {
    echo "0 results";
}
                  ?>
            
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              
            </div>
          </div>
          <!-- /.card -->
          <form method="Post" action="comm.php" target="_blank">
                <div class="form-group">
                  <label for="comment">Comment:</label>
                     <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
                     <input style="visibility: hidden;" type="text" name="UserID">
                     <input type="text" name="AssetID" id="AssetID">
                     <input type="submit" class="btn btn-success" value="Post Comment">
               </div>
          </form>

        </div>
        <!-- /.col-lg-9 -->
        

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Asset Purchase 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
