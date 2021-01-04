
<!DOCTYPE html>
<html>

    <link rel="stylesheet" type="text/css" href="../css/header_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vollkorn">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/login_style.css">
    

    <style>

        .myhLogo{
            width: 10%;
            border: 0;
            alt: Logo;
            /* height: 20px; */
            /* float: left; */
        }

        .myh1{
            font-family: "Open Sans Condensed", sans-serif;
            font-weight: 1000;
            font-size: 30px;
            color: lightblue;
            float: left;
            width: 60%;
            padding: 10px;
            margin-top: 6px;
        }

        .myh2{
            font-family: "Vollkorn", sans-serif;
            font-weight: 500;
            font-size: 30px;
            color: blue;
            float: left;
            width: 20%;
            margin-top: 6px;
        }
        
        .myh_row:after{
            content: "";
            display: table;
            clear: both;
        }

        .myh{
            border-radius: 5px;
            background-color: black;
            padding: 20px;
            /* height: 150px; */
        }        


    </style>

    <head>

        <!-- <div class = ".myh">
            <div class = "myh1">
                <p> <b> Υπουργείο Εργασίας  και Κοινωνικών Υποθέσεων</b> </p>
            </div>
            
            <div class = "myh2">
                <p> login </p>
            </div>

        </div> -->

        <div class = "myh">
            <div class = "myh_row">
                <div class="myhLogo">
                    <a href= "../php/hello.php">
                    <img src = "../include/images/logo.jpg"  style="float:left;width:70px;height:70px;">
                    </a>
                </div>
                <div class = "myh1">
                    <p>Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων</p>
                </div>
                <div class = "myh2">
                    <p>Είσοδος</p>
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