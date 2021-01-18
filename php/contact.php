<contact>
<!DOCTYPE html>
<html lang="gr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel= "stylesheet" href="../css/homepage_style.css?v=1.1">
		<link rel= "stylesheet" href="../css/contact.css?v=1.1">

		<script
		src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous">
		</script>
		<script>
		$(function(){
			$("#header").load("header.php");
			$("#footer").load("footer.php");
		});
		</script>
		<script type="text/javascript">

			var curLat = null; //user location
			var curLon = null;

			function getLocation() {
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(showPosition);
				} else {
					window.alert("no location");
				}
			}
			function showPosition(position) {
				curLat = position.coords.latitude;
				curLon = position.coords.longitude;
			}
			function initMap(){
				getLocation() //finds out user location to fomat the map
				if (curLat == null){
					curLat = 42.3601;   //if the user location cannot be found, set default ones
					curLon = -71.0589;   // of boston
					console.log("random locations");
				}
				var options = {
					zoom:10,
					center:{lat:curLat, lng:curLon}
				}
				var map = new google.maps.Map(document.getElementById("map"),options);
			}
		</script>



		<title>Επικοινωνία</title>
		<div class="sticky" id="header"></div>
	</head>

	<body>

		<!-- <div class="TitleRow"> -->
			<div class="PageTitle">
				<p>Επικοινωνία</p>
			</div>
		<!-- </div> -->

		<div class="InfoTableContainer">
			<div class="InfoTitle">
				<p>Κεντρικές Υπηρεσίες</p>
			</div>
			<div class="InfoContent">
				<div class="InfoRow">
					<img class="InfoImg" src="addr_map.png">
					<p>Διεύθυνση : Σταδίου 29, Αθήνα 105 59</p>
				</div>
				<div class="InfoRow">
					<img class="InfoImg" src="clock.png">
					<p>Ώρες : Τρίτη έως Πέμπτη όλο το 24ωρο</p>
				</div>
				<div class="InfoRow">
					<img class="InfoImg" src="phone.png">
					<p>Τηλέφωνο : Σταδίου κλπ</p>
				</div>
			</div>
		</div>


	<!-- MAP -->

	<h3>My Google Maps Demo</h3>

	<div id="map" style="height: 40%; width: 100%;">
	    </div>
		<script defer
		    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKKt_U1WSLjl-0ICLCB_GjEVHuWaR3rxY&callback=initMap">
		</script>

	</body>

</html>

</contact>
