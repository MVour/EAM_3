<?php
    session_start();
?>


    <!DOCTYPE html>
<html>

	<meta charset="UTF-8">
	<script>
		function openForm() {
			// document.getElementById("body_1").style.opacity = "0.2";
			document.getElementById("reg").style.display = "flex";
			document.getElementById("myRegister").style.display = "block";
			// document.documentElement.style.overflow = 'hidden';
			document.body.scroll = "no";
			document.getElementById("register_form").reset();
			resetSelect();
			reset_buisness();
			// document.getElementById("myRegister").style.opacity = "1";
		}

		function closeForm() {
			document.getElementById("reg").style.display = "none";
			document.getElementById("myRegister").style.display = "none";
			document.documentElement.style.overflow = 'scroll';
			document.body.scroll = "yes";
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

	</script>

    <title>Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων</title>

    <!-- BOTH WAYS WORKING (cache issue !!) -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/header_style.css?v=<?php echo time(); ?>"/> -->
    <head>
        <link rel="stylesheet" type="text/css" href="../css/header_style.css?v=1.1">
        <link rel="stylesheet" type="text/css" href="../css/login_style.css?v=1.1">
        <link rel="stylesheet" type="text/css" href="../css/register_style.css?v=1.1">

    	<!-- <body id="body_1"> -->
        <div class="myheader">
			<div class="logoimgtxtcontainer">
                <div class="myhLogo">
                    <a href= "../php/hello.php">
                        <img src = "../include/images/logo.jpg" max-height="80%" maxwidth="80%;">
						<!-- <img src = "../include/images/logo.jpg"  style="float:right;width:120px;height:120px;"> -->
                    </a>
                </div>
                <p class="logotxt">Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων</p>
            </div>

			<div class="login-container">
				<div class="language-container">
					<p style="word-spacing:10%;">
						<a href="#">ΕΛ</a>
						<p> || </p>
						<a href="#">ENG</a>
					</p>
				</div>
				<div class="log_in">
					<div class="login_form_container" >
						<form action="../php/login.php" method="post" autocomplete="on">
							<input type="text" name="name" placeholder="Όνομα Χρήστη" required>
							<input type="password" name="pswrd" placeholder="Κώδικός" required>
							<div class="login_submit_container">
								<input type="submit" style="" value="Είσοδος">
							
								<div role="button" class="register_button" onclick="openForm()">Εγγραφή</div>
							</div>
						</form>
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
			<form action="./homepage.php" method="post" id="register_form" >
				<input type="text" placeholder="Επώνυμο" name="l_name" required style="width:44%;">
				
				<input type="text" placeholder="Όνομα" name="f_name" required style="width:44%;">
				<input type="text" placeholder="E-mail" name="email" required><br>
				<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Αριθμός Κινητού"required><br>
				<input type="text" placeholder="Κωδικός" name="psswrd" required style="width:44%;">
				<input type="text" placeholder="Επιβεβαίωση Κωδικού" name="" required style="width:44%;">
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
				<input type="submit" value="Εγγραφή">

				</form>
		</div>
	</div>
</html>
