<contact>
<!DOCTYPE html>
<html lang="gr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<!-- <link rel= "stylesheet" href="../css/homepage_style.css?v=1.1"> -->
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

		<title>Επικοινωνία</title>
		<div id="header"></div>
	</head>

	<body>

		<div class="PageTitle">
			<p>Επικοινωνία</p>
		</div>
		<div class="UltimateContainer">

			<div class="Col_1">

				<div class="FisrtsContainer" id="InfoTableContainer">
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
				<div class="mapcontainer">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12579.43641904405!2d23.7310797!3d37.9804173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6db1fc0cbb58a00a!2zzqXPgM6_z4XPgc6zzrXOr86_IM6Vz4HOs86xz4POr86xz4IgzrrOsc65IM6azr_Ouc69z4nOvc65zrrPjs69IM6lz4DOv864zq3Pg861z4nOvQ!5e0!3m2!1sel!2sgr!4v1610972979436!5m2!1sel!2sgr"
						width=100%
						height=100%
						frameborder="0"
						style="border:0;"
						allowfullscreen=""
						aria-hidden="false"
						tabindex="0">
					</iframe>
				</div>

				<!-- link to e contact form -->
				<div class="EContactTableContainer">
					<p>Γιά άμεση επικοινωνία ή σε περίπτωση που δεν γνωρίζεται σε ποιό τμήμα να απευθυνθείτε συμπληρώστε την
					<a href="#">ηλεκτρονική φόρμα επικοινωνίας</a>
					</p>
				</div>
			</div>

			<div class="Col_2">
				<div class="FisrtsContainer" id="TelBlock">
					<div class="TelBlocknum">
						<span>1135</span>
					</div>
					<div class="TelBlocktxt">
						<span>Η τηλεφωνική γραμμή του Εθνικού Οργανισμού Δημόσιας Υγεάς (ΕΟΔΥ) παρέχει πληροφορίες σχετικά με τον νέο κορωνοϊό όλο το 24ωρο</span>
					</div>
				</div>
				<div class="FisrtsContainer">
					<div class="lbutt lightbutt">
						<p>Nέα Ωράρια λόγω COVID-19</p>
					</div>
					<div class="lbutt bluebutt">
						<p>Online Ραντεβού</p>
					</div>
				</div>

				<div class="FisrtsContainer">
					<div class="anotherTitle">
						<p>Άλλα Τμήματα - Διευθύνσεις</p>
					</div>
				</div>
				<div class="FisrtsContainer">
					<select class="DepartmentMenu">
						<option value="0" disabled selected>Επιλογή Τμήματος</option>
						<option value="1">COVID-19</option>
						<option value="2">e-Υπηρεσίες</option>
						<option value="3">Προγράμματα και Δράσεις</option>
						<option value="4">Δικαιολογητικά</option>
						<option value="5">Νέα και Ενημέρωση</option>
						<option value="6">Νομικά</option>
						<option value="7">Συχνές Ερωτήσεις</option>
					</select>
				</div>

				<div class="DepartmentTitle">
					<p>Περιγραφή Τμήματος</p>
				</div>

				<div class="SecondContainer">
					<div class="ThirdContainer" id="rightborder">
						NO INFO
					</div>
					<div class="ThirdContainer">
						<div class="FisrtsContainer" id="DepInfo">
							<img class="InfoImg" src="mail.png">
						</div>
						<div class="FisrtsContainer" id="DepInfo">
							<img class="InfoImg" src="phone.png">
						</div>
						<div class="FisrtsContainer" id="DepInfo">
							<img class="InfoImg" src="clock.png">
						</div>
					</div>

				</div>

			</div>




		</div>

</body>


<div id="footer"></div>
</html>

</contact>
