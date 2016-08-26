<!DOCTYPE html>
<html lang="en">
<head>
  <title>eblood bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">


<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<style> 

#main{text-align:center;}
.jumbotron{text-align:center;background-color:;}
#request{height:30px;width:100%;
font-size:14pt;}
#send{padding:0;
width:20%;}
</style>
</head>

<body>

  


<div class="jumbotron" id="jum">
<h1>The Mobile Blood Bank App</h1>

</div>




<?php 
session_start();
  
$f=$_GET["f"];
$l=$_GET["l"];
$d=$_GET["d"];
$e=$_GET["e"];
$ph=$_GET["ph"];
//$city=$_GET["city"];
$ph=$_GET["ph"];
//$pin=$_GET["pin"];
//$group=$_GET["group"];
$a=$_GET["a"];
$c=$_GET["c"];
$S=$_GET["s"];
?>

<div class="container">

<div class="jumbotron">
<h2><?php echo $f." ".$l?></h2><br><br>
<h4><?php echo "ph: ".$ph."<br>address: $a,$c,$s <br>email: $e";?><span class="glyphicons glyphicons-earphone"></span> </h4><br><br>
</div>

<div class="jumbotron" id="jum">
<?php echo" <form role='form' id='theform' method='get' action='mail.php?email=$e&f=$f&l=$l&ph=$ph'> "; ?>
    <div class="form-group">

<h2>send a request message</h2>
      <label for="request"></label>
      <input  type="text" size="1000" class="form-control" name="request" id="request" placeholder="write your request" required>

    <button id="send" type="submit" class="btn btn-info"><h4>Send</h4></button>
	
</div>
 
  </form>
</div>
<a href="main.php"><button >back</button></a>
</div>
</body>
</html>
