<AnastolhErgasias>

<!DOCTYPE html>
<html lang="el" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Αίτηση Αναστολής Εργασίας</title>
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

		<!-- date range -->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
		<!-- date range -->
		<script type="text/javascript">
		function changeSelectBus() {
			document.getElementById("business").style.color = "darkslategrey";
		}

		function resetbusiness(){
			document.getElementById("department_0").style.display = "none";
			document.getElementById("business_1").style.display = "none";
			document.getElementById("business_2").style.display = "none";
		}

		function check_business() {
			resetbusiness();

			if(document.getElementById("business").value == "1")
			{
				document.getElementById("business_1").style.display = "block";
			}
			else if(document.getElementById("business").value == "2")
			{
				document.getElementById("business_2").style.display = "block";
			}
			else if(document.getElementById("business").value == "3")
			{
				document.getElementById("business_2").style.display = "block";
			}
		}

		function epomeno1() {
			document.getElementById("application_info").style.display = "none";
			document.getElementById("compl-sub").style.display = "block";
			// document.getElementById("submit_title").classList.add("completed");
			document.getElementById("submit_title").classList.add("active");
		}

		function epomeno2() {
			document.getElementById("compl-sub").style.display = "none";
			document.getElementById("completed_msg").style.display = "block";
		}

		</script>
		<?php
			include("../php/main_functs.php");
			checkall();
		?>
		<div id="header"></div>
	</head>

	<body>
		<div class="PageTitle">
			<p>Υπηρεσίες</p>
		</div>

		<div class="Col_1">
			<div class="InfoTitle">
				<p>Αίτηση Αναστολής Εργασίας</p>
			</div>
		</div>

		<div class="subtitlerow">
			<div class="subSteptitle active" id="info_title">
				<p>Συμπλήρωση Στοιχείων</p>
			</div>
			<div class="subSteptitle" id="submit_title">
				<p>Ολοκλήρωση</p>
			</div>
		</div>

		<!-- INFO -->
		<form  id="application_info" action="#" onsubmit="epomeno1();">
			<div class="form_container active">
				<div class="col" id="col1">
					<div class="FisrtsContainer">
						<label for="department">1. Επιλογή Επιχείρησης</label>
						<select class="DepartmentMenu" id="business" onChange="changeSelectBus();check_business();" required>
							<option value="0" disabled selected>Επιλογή Επιχείρησης</option>
							<option value="1">Επιχείρηση 1</option>
							<option value="2">Επιχείρηση 2</option>
							<option value="3">Επιχείρηση 3</option>
						</select>
					</div>
					<div class="FisrtsContainer">
						<label for="date">3. Επιλογή Περιόδου Αναστολής</label>
						<input type="text" name="daterange" class="form-control" value="1/01/2018 - 01/15/2018" />
                        <script>
                            $(function() {
                              $('input[name="daterange"]').daterangepicker({
                                opens: 'left'
                              }, function(start, end, label) {
                                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                              });
                            });
                        </script>
					</div>
				</div>
				<div class="col" id="col2">
					<div class="FisrtsContainer">
						<label for="department">2. Επιλογή Εργαζομένου</label>
						<input class="DepartmentMenu" placeholder="Επιλογή Εργαζομένου" id="department_0" required>
						</input>
						<select class="DepartmentMenu" id="business_1" style="display:none;" required>
							<option value="0" disabled selected>Επιλογή Εργαζομένου</option>
							<option value="1">Επ.1 Εργαζόμενος 1</option>
							<option value="2">Επ.1 Εργαζόμενος 2</option>
							<option value="3">Επ.1 Εργαζόμενος 3</option>
						</select>
						<select class="DepartmentMenu" id="business_2" style="display:none;" required>
							<option value="0" disabled selected>Επιλογή Εργαζομένου</option>
							<option value="1">Επ.2 Εργαζόμενος 1</option>
							<option value="2">Επ.2 Εργαζόμενος 2</option>
							<option value="3">Επ.2 Εργαζόμενος 3</option>
						</select>
					</div>
				</div>
			</div>
			<div class="submitRow"  id="next1">
				<input type="submit" role="button" id="sub_button" value="Επόμενο" onclick="epomeno1();"></input>
			</div>
		</form>

		<form  id="compl-sub" action="#" onsubmit="epomeno2();" style="display:none;">
			<div class="form_container" style="margin:0; padding:0;">
				<div class="FisrtsContainer" style="width:50%; align-self:center; margin-bottom:0;">
					<div class="InfoTitle">
						<p>Στοιχεία Επιχείρησης</p>
					</div>
					<div class="InfoTitle">
						<p>Στοιχεία Εργαζομένου</p>
					</div>
					<div class="InfoTitle">
						<p>Περίοδος Αναστολής Εργασίας</p>
					</div>
				</div>
			</div>
			<div class="submitRow"  id="next1">
				<input type="submit" role="button" id="sub_button" value="Επόμενο" onclick="epomeno2();"></input>
			</div>
		</form>

		<div class="submitRow">
			<div class="CompleteMsg" id="completed_msg" style="display:none;">
				Η διαδικασία Ολοκληρώθηκε Επιτυχώς
			</div>
		</div>


	</body>
	<div id="footer"></div>

</html>
</AnastolhErgasias>
