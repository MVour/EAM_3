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
			document.getElementById("myRegister").style.display = "flex";
			document.documentElement.style.overflow = 'hidden';
			document.body.scroll = "no";
			document.getElementById("register_form").reset();
			resetSelect();
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
				<div class="language-container" style="border:2px solid red;">
					<p style="word-spacing:10%;">
						<a href="#">ΕΛ</a>
						<p> || </p>
						<a href="#">ENG</a>
					</p>
				</div>
				<div class="log_in" style="border:2px solid red;">
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
    <div class="register" id="reg">
        </div>
        <div class="register_popup" id="myRegister">
            <form action="./header.html" id="register_form" class="register_container">
				<div class="alone">
					<h1><b>Εγγραφή</b></h1>
				</div>
				<div class="alone">
					<h6>Εύκολα και γρήγορα!</h6>
				</div>
					<div class="x_button">
						<img role="button" src="../include/images/x_button.png" onclick="closeForm()">
					</div>

					<div class="together">
						<input type="text" placeholder="Επώνυμο" name="l_name" required style="width:44%;">
						<input type="text" placeholder="Όνομα" name="f_name" required style="width:44%;">
					</div>
					<div class="alone">
						<input type="text" placeholder="E-mail" name="email" required>
					</div>
					<div class="alone">
						<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Αριθμός Κινητού"required>
					</div>
					<div class="together">
						<input type="text" placeholder="Κωδικός" name="psswrd" required style="width:44%;">
						<input type="text" placeholder="Επιβεβαίωση Κωδικού" name="" required style="width:44%;">
					</div>
					<div class="together">
						<select id="user_type" name="user_type" style="width:90%;color:gray" onclick="changeSelect()">
							<option value="" hidden style="display:none">Κατηγορία Χρήστη</option>
							<option value="1">Εργοδότης</option>
							<option value="2">Εργαζόμενος</option>
							<option value="3">'Ανεργος</option>
						</select>
						<div class="together" style="border:2px solid red;">
							<select id="user_type" name="user_type" style="width:44%;color:gray" onclick="changeSelect();check_UserType();">
								<option value="" hidden style="display:none">Κατηγορία Χρήστη</option>
								<option value="1">Εργοδότης</option>
								<option value="2">Εργαζόμενος</option>
								<option value="3">'Ανεργος</option>
							</select>
							<input type="text" placeholder="Δήλωση Επιχείρησης" id="add_b" name="add_b" class="add_business" style="width:44%;">
							<select id="select_b" name="select_b" class="select_business;" style="width:44%;" onChange="changeSelect();">
								<option value="" hidden style="display:none;">Επιλογή Επιχείρησης</option>
								<?php
									include("../php/main_functs.php");
									get_business();
								?>
								<option value="1">#1</option>
							</select>
						</div>
					</div>
				<div class="alone">
					<p>EGGRAFH</p>
					<input type="submit" value="Εγγραφή" style="height:60%; text-align:center;">
				</div>
            </form>
        </div>
</html>
