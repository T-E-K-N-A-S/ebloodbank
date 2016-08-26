<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
 <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;
      var infowindow;
var pos ={lat: 28.610 ,lng: 77.231};

      function initMap() {
        var city = pos;

        map = new google.maps.Map(document.getElementById('map'), {
          center: city,
          zoom: 12
        });

        infowindow = new google.maps.InfoWindow();
      var service = new google.maps.places.PlacesService(map);
       service.nearbySearch({
          location:city,
          radius: 20000,
          keyword: "medical_center"
        }, callback);
      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }
    </script>


<script>
$(document).ready(function(){
    $("#tab_home").click(function(){
        $("#menu1").hide();
$("#menu2").hide();
$("#home").show();
    });
$("p").click(function(){
$("#home").hide();
$("#menu2").hide();
$("#menu1").show();       
    });
$("p").click(function(){
        $("#menu1").hide();
$("#menu2").show();
$("#home").hide();
    });
});
</script>
<style> 
body{background-color:#ff3333;}
#main{width:100%;}
#home{text-align:center;}
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
#jum{text-align:center;background-color:#ff3333;color:white;}
#table{text-align:left;
margin-left:10%;}

#show_but{margin-left:70%;}
#teknas{
margin-top:60%;
 text-align:center;
 color:#ff3333;
 border-color:grey;
     border-radius: 25px;
 }

td
{
    padding:0 15px 0 15px;
}
    </style>


</head>

<body>

	

<div id="home" >
      	<h3>search blood donor with same blood group as yours near your location</h3>
			<p>Names of donors are listed </p><br><br>
<div id="jum" class="jumbotron">
			<table id="table">
				<thead>
					<tr>
						<td><h4> NAME</h4> </td>
						<td>   </td>
					</tr>

				</thead>
				<tbody>

<tr>_______________________________________</tr>
					<?php
						session_start();
						$phone=$_SESSION["phone"];
						$db="u963687370_thedb";
						$table="blood_app_users";
						$servername = "mysql.hostinger.in";
						$username = "u963687370_theus";
						$server_password = "qazwsxedc";
						$group=$_GET["group"];
						$pin=$_GET["pin"];
						

						//echo $_GET["group"];
						// Create connection
						$conn = new mysqli($servername, $username, $server_password,$db);

						// Check connection
						if ($conn->connect_error) 
							{
								die("Connection failed: " . $conn->connect_error);
							}
						
						//echo "  PHPconnected : $group and $pin <BR><BR>";


						//$sql = "SELECT *  FROM $table WHERE `group` LIKE '$group' and pincode ='$pin' and phone != '$phone' ";

						$sql = "SELECT *  FROM $table WHERE `group` LIKE '$group' and phone != '$phone' ";
						$result = $conn->query($sql);
						
						$count=0;
						if ($result->num_rows > 0) 
						{
								
							while($row = $result->fetch_assoc())
							 {
								$first=$row["first"];
								$last=$row["last"];
								$email=$row["email"];
								$phone=$row["phone"];
								$pincode=$row["pincode"];
$address=$row["address"];
$city=$row["city"];
$state=$row["state"];
								$count++;
						//
							 ?>
					<tr>
						<td> <?php echo "$first $last "."         " ?></td>
                                                
						<td id="show_but"><?php echo "   <a href='show.php?f=$first&l=$last&ph=$phone&e=$email&a=$address&c=$city&s=$state'><button type='button' class='btn btn-info ' ><span class='glyphicons glyphicons-circle-arrow-right'></span>show </button></a>  ";?></td>

					</tr>	   
        </div>
                         <?php  }?>
            </tbody>
        </table>
				<?php
				                }
						else {
							echo "<h1>currently no donors</h1><a href='index.html'><button>back</button></a>";
						}
					//$conn->close();
				?>


 
</div>
		</div>

		    <div id="menu1" class="tab-pane fade">
<div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZGEZX9JSYFv5HD6NAoGwlwIvt_vFZae4&libraries=places&callback=initMap" async defer></script>

    
			
    
  </div>
<a href="main.php"><button>back</button></a>
<div id="teknas">
<p>teknas</p>
</div>
</body>
</html>

