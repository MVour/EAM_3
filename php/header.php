<?php 
    session_start();
?>


    <!DOCTYPE html>
<html>

<meta charset="UTF-8">
    <!-- BOTH WAYS WORKING (cache issue !!) -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/header_style.css?v=<?php echo time(); ?>"/> -->
    <style>
        <?php include "../css/header_style.css"; ?>
        <?php include "../css/login_style.css"; ?>
    </style>

        <div class="myheader">
            <div class="col-2">
                <div clas="myhLogo">
                    <a href= "../php/hello.php">
                        <img src = "../include/images/logo.jpg"  style="float:right;width:120px;height:120px;">
                    </a>
                </div>
            </div>
            <div class="col-7">
                <div class="myh1">
                    <a href= "../php/hello.php" style="text-decoration:none;">
                        <p style="letter-spacing:2px;">Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων</p>
                    </a>
                </div>
            </div>

            <div class="col-3" style="text-align:right;background-color:">
                <div class="myh2" style="word-spacing:15px;font-size:10px;transform:translateY(-200%);" >
                    <p>
                        <a href="../php/gr.php">
                            <p style="display: inline"> ΕΛ</p>
                        </a>

                        <p style="display:inline;"> || </p>

                        <a href="../php/eng.php">
                            <p style="display:inline;"> ENG </p>
                        </a>
                    </p>
                </div>
                <div class="" style="top:50%;position:absolute;text-align:right;transform:translateY(-40%);">
                    <!-- <p>
                        <a href= "../php/login.php">
                            <p style="display:inline;">Είσοδος μέσω TAXIS</p>
                        </a> -->

                        <!-- <p style="display:inline;margin-left:17px;">|</p>
                        
                        <a href= "../php/login.php" style="display:inline;margin-left:17px;">
                            Είσοδος
                        </a> -->
                        <form action="./login.php" method="post" autocomplete="on">
                            <input type="text" name="name" placeholder="Όνομα Χρήστη" style="height:0px;width:150px;" required><br>
                            <input type="text" name="pswrd" placeholder="Κώδικός" style="height:0px;width:150px;" required><br>
                            <input type="submit" value="Είσοδος">
                
                        </div>
                <div class="" style="top:50%;right:40px;position:absolute;text-align:right;">
                    <p style="color:blue;margin-right:10px;display:inline"> Ή</p>
                        <a href= "../php/login.php" style="display:inline;">
                            Είσοδος μέσω TAXIS
                        </a>
                        </p>

                </div>
            </div>
        </div>

        <div class="navbar">
            <a href="#"> LINK </a>
            <a href="javascript:history.back()"> LINK </a>
        </div>
    </head>

    <!-- <body>

        <div class="container">
            <form action="/action_page.php">
                <div class="row">
                    <div class="col-25">
                    <label for="fname">First Name</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="lname">Last Name</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="country">Country</label>
                    </div>
                    <div class="col-75">
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                    <label for="subject">Subject</label>
                    </div>
                    <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>

    </body> -->
    <!-- <body>

        <h2>What Can JavaScript Do?</h2>

        <p>JavaScript can show hidden HTML elements.</p>

        <p id="demo" style="display:none">Hello JavaScript!</p>

        <button type="button" onclick="document.getElementById('demo').style.display='block'">Click Me!</button>

    </body> -->
</html> 