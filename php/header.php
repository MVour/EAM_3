<?php 
    session_start();
?>

<!DOCTYPE html>
<html>

    <!-- BOTH WAYS WORKING (cache issue !!) -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/header_style.css?v=<?php echo time(); ?>"/> -->
    <style>
        <?php include "../css/header_style.css" ?>
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

            <div class="col-3" style="text-align:right;">
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
                <div class="myh2" style="transform:translateY(-50%);">
                    <p>
                        <a href= "../php/login.php">
                            <p style="display:inline;">Είσοδος μέσω TAXIS</p>
                        </a>

                        <p style="display:inline;margin-left:17px;">|</p>
                        
                        <a href= "../php/login.php" style="display:inline;margin-left:17px;">
                            Είσοδος
                        </a>
                    </p>
                </div>
            </div>
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