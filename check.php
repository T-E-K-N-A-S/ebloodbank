<?php

session_start();

$host = "mysql.hostinger.in";
$username = "u963687370_theus";
$password = "qazwsxedc";
$db="u963687370_thedb";
$table="blood_app_users";


$servername = "mysql.hostinger.in";
$username = "u963687370_theus";
$server_password = "qazwsxedc";

// Create connection
$conn = new mysqli($servername, $username, $server_password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<h1>Connected successfully</h1>";


$phone=$_POST["phone"];
$password=$_POST["password"];


$sql="SELECT * FROM $table WHERE phone='$phone' and `password` LIKE '$password' ";


$result=mysqli_query($conn, $sql);

	// Mysql_num_row is counting table row
	
$count=mysqli_num_rows($result);

	


if($count==1)
{ $_SESSION["phone"]= $phone; 
	//>>>>>>>>>>>30	
$_SESSION["password"]= $password; 
	


header("location:main.php");

}
else{
echo"You Did Something Wrong.\n\n I can feel it"."<a href='login.html'><button>go back</button></a>";
}



?>

