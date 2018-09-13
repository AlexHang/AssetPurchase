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
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <script type="text/javascript">
      var product;
    </script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
  </head>

  <body style="background-color:#a2a5aa">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><h1 style="color: white">Aset Purchase</h1></a>
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

        <div class="col-lg-1">
            </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-10">

          

          <div class="row">
              <div style="width:100%; height:100px;"></div>
              <div style="width:100%; background-color:grey; border: 5px solid black;
    border-radius: 25px;">
                  <form>
                  <table style="width:100%; margin-top:25px;">
         <tr style="width:100%">
            <td style="width:33%; background-color:grey;">
            <input class="form-control" type="text" name="searchname"
            style="width:85%"></input>
            </td>
            <td style="width:33%; background-color:grey; align:center">
            <select name="location" class="form-control" style="width:85%; align:center">
            <option></option>
            <option>USA</option>
            <option>Romania</option>
            </select>
            </td>
            <td style="width:33%; background-color:grey;">
             <select name="category" class="form-control" style="width:85%; align:center">
            <option>Real Asset</option>
            <option>Personal Asset</option>
            </select>
            </td>
         </tr>
         <tr style="width:100%">
             <td style="width:25%; align:center">
                <p style="color:white">Price range($)</p> 
                <input type="number" name="minimum-price" class="form-control" style="width:50%; margin-left:25%;"  placeholder="minimum">
                <input type="number" name="maximum-price" class="form-control" style="width:50%; margin-left:25%;" placeholder="maximum">
             </td>
             <td style="width:25%;">
                  <select name="order" style="width:75%;" class="form-control">
    <option>Price ASC</option>
    <option>Price DESC</option>
  </select>
             </td>
             <td style="width:50%">
               <button style="width:50%" type="submit" class="btn btn-info">Search</button>
                  </td>
         </tr>
         <tr style="width:100%">
          <td style="width:25%;background-color:black;">
          
          </td>
          <td style="width:25%;  background-color:black">
             
          </td>
         <td style="width:25%; background-color:black;">
           
         </td>
        
          
            </tr>
       
       </table>
       </form>
              </div>
              
       <h1 class="col-lg-10">Search Results</h1>
          <?php
          $sql = "SELECT AssetID, UserID, AssetName, Price, Location, Description, imageURL FROM Assets WHERE AssetName like '%".$_GET["searchname"]."%' AND Location  like '%".$_GET["location"]."%' ORDER BY AssetID DESC,".$_GET["order"];
          $i=0;
         
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $i=0;
                 // output data of each row
                  while($row = $result->fetch_assoc()) {
                      $i++;
                  echo '<div class="shopcards col-lg-3 col-md-3 col-mb-4 col-xs-4" onclick="product'.$row["AssetID"].'()">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="'.$row["imageURL"].'" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">'. $row["AssetName"].'</a>
                  </h4>
                  <h5>'. $row["Price"].'</h5>
                  <p class="card-text text-truncate">'.$row["Description"].'</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            <script>
                 function product'.$row["AssetID"].'()
                 {
                  product='.$row["AssetID"].';
                  document.getElementById("prod").value=product;
                  document.getElementById("productform").submit();
                 }
            </script>';


                    }
                  } else {
                  echo "0 results";
                  }
             $conn->close();
                  ?>

            
    

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
         <div class="col-lg-1">
            </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Aset Purchase 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <form action="https://asset-purchase.000webhostapp.com/Asset/product/index.php" id="productform" method="post">
    <input type="text" name="prod" id="prod">
    </form>

  </body>

</html>





