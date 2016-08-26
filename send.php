<?php

$first=$_POST["first"];
$last=$_POST["last"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$sex=$_POST["sex"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$pincode=$_POST["pincode"]; 
$group=$_POST["group"];
$password=$_POST["password"];

$servername = "mysql.hostinger.in";
$username = "u963687370_theus";
$server_password = "qazwsxedc";

// Create connection
$conn = new mysqli($servername, $username, $server_password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "<h1>Connected successfully</h1>";

$sql = "INSERT INTO `u963687370_thedb`.`blood_app_users` (`first`, `last`, `dob`, `email`, `sex`, `address`, `city`, `state`,`pincode` , `phone`, `group`, `password`) 
VALUES ('$first', '$last', '$dob', '$email', '$sex', '$address', '$city', '$state','$pincode' , '$phone', '$group', '$password');";
if ($conn->query($sql) === TRUE) {
    //echo '<h1> created successfully </h1>';
   $x=1;
} else {
    $x=0;//echo '<br><br><br><br><br><h1>Error: </h1>' . $sql . "<br>" . $conn->error;
}

$conn->close();


//echo $name."<br>".$dob."<br>".$email."<br>".$sex."<br>".$phone."<br>".$group;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
#body{background-color:red;
text-align:center;
}
 .container{background-color:red;
}
.jumbotron{background-color:white;
color:red;
text-align:center;
}
.btn{background-color:white;
color:red;
border-style:solid;
text-align:center;
}

</style>
</head>

<body id="body">
<div class="container">
<br><br><br>
 <div class="jumbotron">
<h3> <?php  if($x==1){echo "DONE\n successfully registered."; } 
            else {echo "Already registered." ;}?> </h3>

<br><br><br><br><br><br><p>tap here to login<p>
<a href="login.html"><button class="btn btn-default">LOGIN</button></a>
</div>

 </div>
</body>

</html>