<?php
$servername = "mysql.hostinger.in";
$username = "u963687370_theus";
$password = "qazwsxedc";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO `u963687370_thedb`.`blood_app_users` (`first`, `last`, `dob`, `email`, `sex`, `address`, `city`, `state`, `phone`, `group`, `password`, `time`) 
VALUES (\'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'\', \'2016-07-12 00:00:00\');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 