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
		<script>
	      // Initialize and add the map
	      function initMap() {
	        // The location of Uluru
	        const uluru = { lat: -25.344, lng: 131.036 };
	        // The map, centered at Uluru
	        const map = new google.maps.Map(document.getElementById("map"), {
	          zoom: 4,
	          center: uluru,
	        });
	        // The marker, positioned at Uluru
	        const marker = new google.maps.Marker({
	          position: uluru,
	          map: map,
	        });
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
	<!--The div element for the map -->
	<div id="map"></div>


	</body>

</html>

</contact>
