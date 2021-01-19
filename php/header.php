
<?php if(!session_id()) session_start(); ?>

    <!DOCTYPE html>
<html>

	<meta charset="UTF-8">
	<script>
		function openForm() {
			// document.getElementById("body_1").style.opacity = "0.2";
			document.getElementById("reg").style.display = "flex";
			document.getElementById("myRegister").style.display = "block";

			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
			document.documentElement.style.overflow = 'hidden';
			document.getElementById("register_form").reset();
			resetSelect();
			reset_buisness();
		}

		function closeForm() {
			document.getElementById("reg").style.display = "none";
			document.getElementById("myRegister").style.display = "none";
			document.documentElement.style.overflow = 'scroll';
		}

		function changeSelect() {
			document.getElementById("user_type").style.color = "black";
		}

		function resetSelect() {
			document.getElementById("user_type").style.color = "gray";
		}

		function check_UserType() {
			if(document.getElementById("user_type").value == "1"){
				document.getElementById("add_b").style.display = "inline-block";
				document.getElementById("select_b").style.display = "none";
			}
			else if(document.getElementById("user_type").value == "2"){
				document.getElementById("select_b").style.display = "inline-block";
				document.getElementById("add_b").style.display = "none";
			}
			else{
				reset_buisness();
			}

		}

		function reset_buisness(){
			document.getElementById("select_b").style.display = "none";
			document.getElementById("add_b").style.display = "none";
		}

		function confirm_pass(){
			if (document.getElementById('psswrd').value == document.getElementById('psswrd_confirm').value) {
				document.getElementById('psswrd_confirm').style.border = '2px solid green';
				document.getElementById('psswrd').style.border = '2px solid green';
				document.getElementById('err_mssg').style.color = 'green';
				document.getElementById('err_mssg').innerHTML = '';
				document.getElementById('submit_reg').disabled = false;
			}
			else {
				document.getElementById('err_mssg').style.color = 'red';
				document.getElementById('psswrd').style.border = 'none';
				document.getElementById('psswrd_confirm').style.border = 'none';
				document.getElementById('psswrd').style.border = '2px solid red';
				document.getElementById('psswrd_confirm').style.border = '2px solid red';
				document.getElementById('err_mssg').innerHTML = 'Οι κωδικοί πρέπει να είναι οι ίδιοι';
				document.getElementById('submit_reg').disabled = true;
			}
		}

		function log_in_display(){
			document.getElementById('log_in').style.display = 'none';
			document.getElementById('log_out').style.display = 'block';				
		}

		function log_out_display(){
			document.getElementById('log_out').style.display = 'none';
			document.getElementById('log_in').style.display = 'flex';
			reset_attempt();
		}

		function invalid_attempt(){
			document.getElementById('userfield').style.border = '2px solid red';
			document.getElementById('userfield').style.backgroundColor = 'pink';
			document.getElementById('passfield').style.border = '2px solid red';
			document.getElementById('passfield').style.backgroundColor = 'pink';
			// alert("Λάθος Όνομα Χρήστη η Κωδικός !!");
		}

		function reset_attempt(){
			document.getElementById('userfield').style.border = 'none';
			document.getElementById('userfield').style.backgroundColor = 'none';
			document.getElementById('passfield').style.border = 'none';
			document.getElementById('passfield').style.backgroundColor = 'none';

		}

	</script>


    <title>Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων</title>

    <!-- BOTH WAYS WORKING (cache issue !!) -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/header_style.css?v=<?php echo time(); ?>"/> -->
    <head>
		<div class="sticky">
        <link rel="stylesheet" type="text/css" href="../css/header_style.css?v=1.1">
        <link rel="stylesheet" type="text/css" href="../css/login_style.css?v=1.1">
        <link rel="stylesheet" type="text/css" href="../css/register_style.css?v=1.1">

    	<!-- <body id="body_1"> -->
        <div class="myheader">
			<div class="logoimgtxtcontainer">
                <div class="myhLogo">
                    <a href= "../php/homepage.php">
                        <img src = "../include/images/logo.jpg" max-height="80%" maxwidth="80%;">
						<!-- <img src = "../include/images/logo.jpg"  style="float:right;width:120px;height:120px;"> -->
                    </a>
                </div>
                <p class="logotxt"><a href="homepage.php">Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων</a></p>
            </div>

			<div class="login-container">
				<div class="language-container">
					<p style="word-spacing:10%;">
						<a href="#">ΕΛ</a>
						<p> || </p>
						<a href="#">ENG</a>
					</p>
				</div>
				<div class="log_in" >
					<div class="login_form_container" id="log_in">
						<form action="" method="post" autocomplete="on">
							<input type="text" id="userfield" name="name" placeholder="Όνομα Χρήστη" required>
							<input type="password" id="passfield" name="pswrd" placeholder="Κώδικός" required>
							<div class="login_submit_container">
								<input type="submit" name="log_button" style="" value="Είσοδος">
							</div>
						</form>
						<div role="button"  class="register_button" onclick="openForm()">Εγγραφή</div>
						</div>
					</div>
					<div class="logged_in" id="log_out">
						Συνδεδεμένος Χρήστης: <?php echo($_SESSION['name']); ?><br>
						<div class="profile_actions">
							<select name="prof_actions" id="" style="background-color:transparent;border:none;font-size:100%;">
								<option value="" hidden style="display:none">Προφίλ</option>
								<option value="0">Το Προφίλ μου</option>
								<?php if($_SESSION['user_type'] == 1){echo"<option value='1'>Η Επιχείρηση μου</option>";}
										else if($_SESSION['user_type'] == 2){echo"<option value='2'>Η Εργασία μου</option>";}
										// else if($_SESSION['user_type'] == 2){echo"<option value='1'>Η Εργασία μου</option>";}
								?>
							</select>

							<role="button" onclick="log_out_display();"> Έξοδος
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</head>

	<div class="register" id="reg"></div>
    <div class="register_popup" id="myRegister">
		<div class="x_button">
			<img role="button" src="../include/images/x_button.png" onclick="closeForm()">
		</div>
		<div class="register_welcome">
			<div class="register_welcome1"><b>Εγγραφή<b></div>
			<div class="register_welcome2">Εύκολα και γρήγορα!</div>
		</div>
		<div class="register_container">
			<!-- GEIA -->
			<form action="" method="post" id="register_form" >
				<input type="text" placeholder="Επώνυμο" name="l_name" required style="width:44%;">
				<input type="text" placeholder="Όνομα" name="f_name" required style="width:44%;">
				<input type="text" placeholder="E-mail" name="email" required><br>
				<input type="text" placeholder="Α.Μ.Κ.Α." name="amka" required><br>
				<input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Αριθμός Κινητού"required><br>
				<input type="password" id="psswrd" placeholder="Κωδικός" name="psswrd" onchange='confirm_pass();' required style="width:44%;">
				<input type="password" id="psswrd_confirm" placeholder="Επιβεβαίωση Κωδικού" name="psswrd_confirm" required onChange='confirm_pass();' style="width:44%;"><br>
				<span id="err_mssg"></span>
				<select id="user_type" name="user_type" style="width:44%;color:gray" onChange="changeSelect();check_UserType();">
					<option value="" hidden style="display:none">Κατηγορία Χρήστη</option>
					<option value="1">Εργοδότης</option>
					<option value="2">Εργαζόμενος</option>
					<option value="3">'Ανεργος</option>
				</select>

					<input type="text" placeholder="Δήλωση Επιχείρησης" id="add_b" name="add_b" style="width:44%;display:none">
					<select id="select_b" name="select_b" style="width:44%;display:none;" onChange="changeSelect();">
						<option value="" hidden style="display:none;">Επιλογή Επιχείρησης</option>
						<?php
							include("../php/main_functs.php");
							$mpla = get_business();
						?>
					</select>
					<input type="submit" name="reg_button" id="submit_reg"  value="Εγγραφή">
				</form>
		</div>
	</div>

	<?php
		if(isset( $_SESSION['secret'] )){
			if($_SESSION['secret'] == 1){
				echo"<script>log_in_display();</script>";
			}
			else{
				echo"<script>invalid_attempt();</script>";
			}
		}
	?>

</html>
