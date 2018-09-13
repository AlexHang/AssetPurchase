<!DOCTYPE html>
<html>
<head>
	<title>Post Your own Asset</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black; width: 100%; height: 100%;">
   <center><i><h1 style="color: white;">You can post every asset you want: Land, Houses, Cars, Airplanes, Ships, PC's and everything else you want. Try it now: </h1></i></center>
   <br>

   <form method="Post" action="back.php" style="width: 50%; margin-left: 25%; margin-right: 25%" > 
   <h4 style="color:#c3c3f4">Tell use something about your asset</h4>
   <div class="form-group">
      <label for="name" ><p style="color:#c3c3f4">Asset Name:</p></label>
      <input type="text" class="form-control" id="name" name="Asset-Name">
    </div>
    <div class="form-group">
      <label for="sel1" style="color:#c3c3f4">Select your country</label>
      <select class="form-control" id="sel1" name="country">
        <option>Albania</option>
        <option>Andorra</option>
        <option>China</option>
        <option>Romania</option>
        <option>USA</option>
        <option>UK</option>
      </select>
      <br>
    </div>

    <div class="form-group">
      <label for="type" style="color:#c3c3f4">Select Asset Type</label>
      <select class="form-control" id="type" name="type">
        <option>Real</option>
        <option>Personal</option>
      </select>
      <br>
    </div>

    <div class="form-group">
        <label style="color:#c3c3f4" for="Description">Description</label>
        <textarea class="form-control" rows="5" id="Description" name="Description"></textarea>
    </div>
    <div class="form-group">
      <label for="price"><p style="color:#c3c3f4">Price:</p></label>
      <input type="text" class="form-control" id="price" name="price">
    </div>

    <div class="form-group">
      <label for="image"><p style="color:#c3c3f4">Image URL:</p></label>
      <input type="text" class="form-control" id="image" name="image">
    </div>

    <h4 style="color:#c3c3f4">Now please complete your contact information:</h4>

    <div class="form-group">
      <label for="email"><p style="color:#c3c3f4">Contact email:</p></label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="phone"><p style="color:#c3c3f4">Contact phone:</p></label>
      <input type="text" class="form-control" id="phone" name="phone">
    </div>
    <div class="form-group">
      <label for="UserName"><p style="color:#c3c3f4">Your Name</p></label>
      <input type="text" class="form-control" id="UserName" name="UserName">
    </div>
    
    <div class="form-group">
      <label for="UserName"><p style="color:#c3c3f4">Your profile image:</p></label>
      <input type="text" class="form-control" id="usr_img" name="usr_img">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    </form>
<html>
