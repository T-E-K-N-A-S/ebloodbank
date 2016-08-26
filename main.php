<?php
session_start();
$phone=$_SESSION["phone"];

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
echo " connected";

$sql="SELECT * FROM $table WHERE phone='$phone' ";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
$row=$result->fetch_assoc();
echo "count $count  ";

if($count==1)
{// unique account

//echo "inside if{}  ";
$group=$row["group"];
$pin=$row["pincode"];
$ph=$row["phone"];
$state=$row["state"];
$minpin=$pin-5;
$maxpin=$pin+5;
 
//echo $group;
//echo"<a href='terms.html'><button id='butt1' class='btn-default'>search in your area</button></a><br><br>";
header("location:search.php?group=$group&pin=$pin");

//echo  $pin . $minpin. $maxpin;
}
else 
{
echo "<a href='login.html'><button id='butt2' class='btn-default'>search all</button> </a> ";
}
?>

