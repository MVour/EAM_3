<yphresies>
<!DOCTYPE html>

<html lang="el" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Υπηρεσίες</title>
		<link rel="stylesheet" href="/css/eRandevou.css">
		<link rel="stylesheet" href="/css/contact.css">

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

		<script type="text/javaScript">
			function changeSelectDep() {
				document.getElementById("department").style.color = "darkslategrey";
			}

			function resetSelectDep() {
				document.getElementById("department").style.color = "gray";
			}

			function check_department() {
				// mystr="departement_";
				// target=mystr.concat(document.getElementById("department").value);
				// document.getElementById(target).style.display = "block";
				resetdepartment();

				if(document.getElementById("department").value == "1")
				{
					document.getElementById("department_1").style.display = "block";
				}
				else if(document.getElementById("department").value == "2")
				{
					document.getElementById("department_2").style.display = "block";
				}
				else if(document.getElementById("department").value == "3")
				{
					document.getElementById("department_1").style.display = "block";
				}
				else if(document.getElementById("department").value == "4")
				{
					document.getElementById("department_2").style.display = "block";
				}
				else if(document.getElementById("department").value == "5")
				{
					document.getElementById("department_1").style.display = "block";
				}
				else if(document.getElementById("department").value == "6")
				{
					document.getElementById("department_2").style.display = "block";
				}
				else if(document.getElementById("department").value == "7")
				{
					document.getElementById("department_1").style.display = "block";
				}

			}

			function resetdepartment(){
					document.getElementById("department_0").style.display = "none";
					document.getElementById("department_1").style.display = "none";
					document.getElementById("department_2").style.display = "none";
			}

			function epomeno1() {
				document.getElementById("appointment_info").style.display = "none";
				document.getElementById("personal_info").style.display = "block";
				document.getElementById("app_info_title").classList.add("completed");
				document.getElementById("per_info_title").classList.add("active");
				// document.getElementById("next1").style.display = "none";
				// document.getElementById("next2").style.display = "flex";
			}
			function epomeno2() {
				document.getElementById("personal_info").style.display = "none";
				document.getElementById("complete_submit").style.display = "block";
				document.getElementById("per_info_title").classList.add("completed");
				document.getElementById("submit_title").classList.add("active");
				// document.getElementById("next2").style.display = "none";
			}

			// function askforPhone() {
			// 	document.getElementById("askforphone")style.display = "flex";
			// }

			function submit_() {
				document.getElementById("complete_submit").style.display = "none";
				document.getElementById("completed_msg").style.display = "block";
			}

		</script>

		<!-- timepicker -->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
		<script>
			$(document).ready(function(){
			$('input.timepicker').timepicker({});
			});
		</script>

		</header>
		<?php
			include("../php/main_functs.php");
			checkall();
		?>
	</head>
	<div id="header"></div>
	


	<body>
		<div class="PageTitle">
			<p>Υπηρεσίες</p>
		</div>

		<div class="Col_1">
			<div class="InfoTitle">
				<p>e-Ραντεβού</p>
			</div>
		</div>

		<div class="subtitlerow">
			<div class="subSteptitle active" id="app_info_title">
				<p>Στοιχεία Ραντεβού</p>
			</div>
			<div class="subSteptitle" id="per_info_title">
				<p>Προσωπικά Ραντεβού</p>
			</div>
			<div class="subSteptitle" id="submit_title">
				<p>Επιβεβαίωση-Ολοκλήρωση</p>
			</div>
		</div>

		<!-- APPOINTMENT INFO -->
		<form  id="appointment_info" action="#" onsubmit="epomeno1();">
			<!-- <fieldset id="fieldset1"> -->
			<div class="form_container active">
				<div class="col" id="col1">
					<div class="FisrtsContainer">
						<label for="department">1. Επιλογή Τμήματος-Διεύθυνσης</label>
						<select class="DepartmentMenu" id="department" onChange="changeSelectDep();check_department();" required>
							<option value="0" disabled selected>Επιλογή Τμήματος</option>
							<option value="1">Ι.Κ.Α.</option>
							<option value="2">Ο.Α.Ε.Δ.</option>
							<option value="3">ΙΡΙΔΑ</option>
							<option value="4">ΤΜΗΜΑ ΚΟΙΝΟΒΟΥΛΕΥΤΙΚΟΥ ΕΛΕΓΧΟΥ</option>
							<option value="5">ΤΜΗΜΑ ΝΟΜΟΘΕΤΙΚΗΣ ΠΡΩΤΟΒΟΥΛΙΑΣ</option>
							<option value="6">ΤΜΗΜΑ ΕΣΩΤΕΡΙΚΟΥ ΕΛΕΓΧΟΥ</option>
							<option value="7">ΤΜΗΜΑ ΠΟΛΙΤΙΚΗΣ ΣΧΕΔΙΑΣΗΣ ΕΚΤΑΚΤΗΣ ΑΝΑΓΚΗΣ (Π.Σ.Ε.Α.)</option>
						</select>
					</div>
					<div class="FisrtsContainer">
						<label for="date">3. Επιλογή Ημερομηνίας</label>
					    <input class="DepartmentMenu" type="date" name="date" required pattern="\d{4}-\d{2}-\d{2}"></input>
						   	<!-- <span class="validity"></span> -->
					</div>
				</div>
				<div class="col" id="col2">
					<div class="FisrtsContainer">
						<label for="department">2. Επιλογή Διαδικασίας</label>
						<input class="DepartmentMenu" placeholder="Επιλογή Διαδικασίας" id="department_0" required onchange="changeSelect()">
						</input>
						<select class="DepartmentMenu" id="department_1" style="display:none;" required>
							<option value="0" disabled selected>Επιλογή Διαδικασίας</option>
							<option value="1">Βεβαίωση Α.Μ.Κ.Α.</option>
							<option value="2">Έλεγχος Ασφαλιστικής Ικανότητας</option>
							<option value="3">Ατομικός Λογαριασμός Ασφάλισης</option>
						</select>
						<select class="DepartmentMenu" id="department_2" style="display:none;" required>
							<option value="0" disabled selected>Επιλογή Διαδικασίας</option>
							<option value="1">Ευρωπαϊκή Κάρτα Ασφάλισης Ασθενείας</option>
							<option value="2">Βεβαίωσης Προϋπηρεσίας</option>
							<option value="3">Αίτημα για κύρια σύνταξη</option>
							<option value="4">Πορεία αίτησης συνταξιοδότησης </option>
						</select>
					</div>
					<div class="FisrtsContainer">
						<label for="time">4. Επιλογή Ώρας</label>
						<input class="DepartmentMenu timepicker text-center" placeholder="Επιλέξτε Ώρα" jt-timepicker time="model.time" time-string="model.timeString" default-time="model.options.defaultTime" time-format="model.options.timeFormat" start-time="model.options.startTime" min-time="model.options.minTime" max-time="model.options.maxTime" interval="model.options.interval" dynamic="model.options.dynamic" scrollbar="model.options.scrollbar" dropdown="model.options.dropdown" required/>
					</div>
				</div>
			</div>
			<div class="submitRow"  id="next1">
				<!-- <input type="submit" form="appointment_info" value="next1" name="button" onsubmit="epomeno1();">submit</input> -->
				<input type="submit" role="button" id="sub_button" value="Επόμενο" onclick="epomeno1();"></input>
			</div>
		<!-- </fieldset> -->
		</form>

		<!-- PERSONAL INFO -->
		<form id="personal_info" action="#" style="display:none;">
			<div class="form_container">
				<div class="col" id="col1">
					<div class="FisrtsContainer">
						<label for="department" for="name">1. Εισαγωγή Ονόματος</label>
						<input class="DepartmentMenu" placeholder="Όνομα" name="name" required>
					</div>
					<div class="FisrtsContainer">
						<label for="phone">3. Εισαγωγή Αριθμού Ταυτότητας</label><br><br>
						<input class="DepartmentMenu" type="tel" name="at" placeholder="ΑΒ 123456" pattern="[Α-Ω]2 [0-9]{2}[0-9]{2}[0-9]{2}" required><br><br>
					</div>
				</div>
				<div class="col" id="col2">
					<div class="FisrtsContainer">
						<label for="department" for="surname">2. Εισαγωγή Eπωνύμου</label>
						<input class="DepartmentMenu" placeholder="Επώνυμο" name="surname" required>
					</div>
					<div class="FisrtsContainer">
						<label for="amka">3. Εισαγωγή Αριθμού Μητρώου Κοινωνικής Ασφάλισης</label><br><br>
						<input class="DepartmentMenu" type="tel" name="amka" placeholder="00000000000" pattern="[0-9]{11}"><br><br>
					</div>
				</div>
			</div>
			<div role="button" class="submitRow" id="next2">
				<input type="submit" role="button" value="Επόμενο" onclick="epomeno2();"></input>
			</div>
		</form>

			<!-- Complete - Submit -->
			<form id="complete_submit" action="#" style="display:none;">
					<div class="form_container" style="display:flex; justify-content:center;" >
						<div class="submitRow" height="auto" style="align-self:center;">
							<div class="FisrtsContainer" style="align-self:center;">
								<div class="DepartmentMenu">
									<input type="checkbox" onclick="askforPhone();">Αποστολή SMS Επιβεβαίωσης </input>
								</div>
							</div>
							<div class="FisrtsContainer">
								<div class="DepartmentMenu">
									<input type="checkbox" onclick="askforPhone();">Αποστολή SMS Υπενθύμισης </input>
								</div>
							</div>
							<div class="FisrtsContainer" id="askforphone" style="display:none;">
								<label for="phone">3. Εισαγωγή Τηλεφώνου (κινητό ή σταθερό)</label><br><br>
								<input class="DepartmentMenu" type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
							</div>
						</div>
					</div>
					<div class="submitRow"  id="Submit">
						<input type="submit" role="button" id="sub_button" value="Ολοκλήρωση" onclick="submit_();"></input>
					</div>
			</form>

			<div class="submitRow">
				<div class="CompleteMsg" id="completed_msg" style="display:none;">
					Η διαδικασία Ολοκληρώθηκε Επιτυχώς
				</div>
			</div>

		<!-- time picker -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	</body>
	<div id="footer"></div>
</html>
</yphresies>
