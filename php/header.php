
<!DOCTYPE html>
<html>

    <link rel="stylesheet" type="text/css" href="../css/header_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vollkorn">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/login_style.css">
    

    <style>

        * {
            /* box-sizing: border-box; */
        }

        head{
            margin: 0;
            padding: 0;
        }
        
        html, body{
            margin: 0;
        }

        .myheader{
            margin: 0;
            padding: 0;
            top: 0;
            background-image: linear-gradient(to right, white, lightblue);
            display: table;
            width: 100%;
            position: relative;
        }

        .myheader img{
            mix-blend-mode: darken;
        }

        .myheader::after {
            /* content: ""; */
            /* clear: both; */
        }

        [class*="col-"] {
            padding: 15px;
            display:table-cell;
        }


        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%;}

        [class*="col-"] ol{
            list-style-type:none;
        }

        ol il{
            color blue;
        }

        .myhLogo{
            /* width: 10%; */
            border: 0;
            alt: Logo;            
        }

        .myhLogo img{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .myh1{
            float: left;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .myh1 a{
            font-family: "Open Sans Condensed", sans-serif;
            font-weight: 1000;
            font-size: 30px;
            color: blue;
        }

        .myh1 p{
            font-family: "Open Sans Condensed", sans-serif;
            font-weight: 1000;
            font-size: 25px;
            color: rgb(103, 141, 171);
        }

        .myh2{
            font-family: "Vollkorn", sans-serif;
            font-weight: 400;
            font-size: 15px;
            color: blue;
            /* text-align: right; */
            position: absolute;
            top: 50%;
            right: 50px;
            transform: translateY(-50%);
            /* vertical-align: top; */
        }

        .myh2 p{
            /* clear: both; */
            /* text-align: right; */
            /* float: right; */
            /* display: inline; */
            /* vertical-align: top; */
        }

    </style>

    <head>
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
                <div class="myh2">
                    <p style="word-spacing:7px; font-size:10px;transform: translateY(-400%);">
                        ΕΛ || ENG
                    </p>
                </div>
                <div class="myh2">
                    <p>
                        <a href= "../php/login.php">
                            <p style="display:inline;">Είσοδος μέσω TAXIS</p>
                        </a>
                    
                        <p style="display:inline;margin-left:20px;">|</p>
                        
                        <a href= "../php/login.php">
                            <p style="display:inline;margin-left:20px;">Είσοδος</p>
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