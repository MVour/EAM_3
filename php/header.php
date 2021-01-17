<?php
    session_start();
?>


    <!DOCTYPE html>
<html>

<meta charset="UTF-8">

    <!-- <title>Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων</title> -->

    <!-- BOTH WAYS WORKING (cache issue !!) -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/header_style.css?v=<?php echo time(); ?>"/> -->
    <head>
        <link rel="stylesheet" type="text/css" href="../css/header_style.css?v=1.1">
        <link rel="stylesheet" type="text/css" href="../css/login_style.css?v=1.1">
        <link rel="stylesheet" type="text/css" href="../css/register_style.css?v=1.1">

    <!-- <body id="body_1"> -->
        <div class="myheader">
			<div class="logoimgtxtcontainer">
                <div clas="myhLogo">
                    <a href= "../php/hello.php">
                        <img class="logoimg" src = "../include/images/logo.jpg">
						<!-- <img src = "../include/images/logo.jpg"  style="float:right;width:120px;height:120px;"> -->
                    </a>
                </div>
                <p class="logotxt">Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων</p>
            </div>

				<div class="login-container">
					<!-- <div class="col-2" style="text-align:right;">
						<div class="" style="top:50%;right:40px;position:absolute;text-align:right;">
							<p style="color:white;margin-right:10px;display:inline"> Ή</p>
							<a href= "../html/under_construction.html" style="display:inline;">
								Είσοδος μέσω TAXIS
							</a>
						</div>
					</div> -->
					<div class="language-container">
						<a href="#">ΕΛ</a>
						<p> || </p>
						<a href="#">ENG</a>
					</div>
					<div class="log_in">
						<form action="../php/login.php" method="post" autocomplete="on">
							<input type="text" name="name" placeholder="Όνομα Χρήστη" required><br>
							<input type="password" name="pswrd" placeholder="Κώδικός" required><br>
							<input type="submit" value="Είσοδος">
							<div role="button" class="register_button" onclick="openForm()">Εγγραφή</div>
						</form>

					</div>

				</div>
			</div>

            <!-- </div> -->
    <!-- </body> -->
    <div class="register" id="reg">
        </div>
        <div class="register_popup" id="myRegister">
            <form action="./header.html" id="register_form" class="register_container">
                <h1><b>Εγγραφή</b></h1>
                <h6>Εύκολα και γρήγορα!</h6>
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
					<div class="alone">
						<select id="user_type" name="user_type" style="width:90%;color:gray" onclick="changeSelect()">
							<option value="" hidden style="display:none">Κατηγορία Χρήστη</option>
							<option value="1">Εργοδότης</option>
							<option value="2">Εργαζόμενος</option>
							<option value="3">'Ανεργος</option>
						</select>
					</div>
					<input type="submit" value="Εγγραφή" style="height:60%; text-align:center;">
            </form>
        </div>
    <!-- <div> -->
    <!-- </body> -->
	</head>

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
    </script>

</html>
