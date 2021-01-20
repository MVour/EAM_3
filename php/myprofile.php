<?php
        include("../php/main_functs.php");
        checkall(); if(isset($_SESSION['LOGED'])){
            if($_SESSION['LOGED'] != 1){
                header("Location: homepage.php");
            }
            else{
                // header("Location: homepage.php");
            }
        }
?>
<!DOCTYPE>
<html>
    <meta charset="UTF-8">
	<div class="register" id="reg"></div>

	<head>
        <link rel= "stylesheet" href="../css/cov_style.css?v=1.1">
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

        <script>
            function showArticle(id){
                resetArticles();
                resetButtons();
                var str1 = id;
                var str2 = "news_";
                var target = str2.concat(str1);
                document.getElementById(target).style.display = "block";
                document.getElementById(id).style.backgroundColor= "cadetBlue";
                document.getElementById(id).style.color = "white";
                document.getElementById(id).style.boxShadow = "0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19), 10px 0px 7px -3px cadetblue";
            }

            function resetArticles(){
                var elements = document.getElementsByClassName('news_article');

                for (var i = 0; i < elements.length; i++){
                    elements[i].style.display = 'none';
                    elements[i].style.border= 'none';
                }
            }

            function resetButtons(){
                var elements = document.getElementsByClassName('news_container');

                for (var i = 0; i < elements.length; i++){
                    elements[i].style.boxShadow= 'none';
                    elements[i].style.backgroundColor= "whitesmoke";
                    elements[i].style.color= 'cadetblue';
                    elements[i].style.boxShadow= '10px 0px 3px -7px lightblue';
                    elements[i].style.border= 'none';
                    elements[i].style.borderBottom= '1px solid grey';
                }
            }

            function getout(){
                document.getElementsById('out').click();
            }

            function hideButton(id){
                document.getElementById(id).style.display = "none";
            }

        </script>
    </head>

    <?php
        // include("../php/main_functs.php");
        checkall();
    ?>

    <div id="header"></div>
    
    <body style="">
        <div class="title">
            Το Προφίλ μου
        </div>
        <div class="all_container">
            <div class="news_list_container">
                <div role="button" class="news_container" id="0" onclick="showArticle('0')">
                    <p role="button" >Τα Στοιχεία μου</p>
                </div>
                <div class="news_container"  id="1" name="1" role="button" onclick="showArticle('1')">
                    <p>Οι Επιχειρήσεις μου</p>
                </div>
                <div role="button" class="news_container" id="2" onclick="showArticle('2')">
                    <p role="button" >Η Εργασία μου</p>
                </div>
                <div role="button" class="news_container" id="2" onclick="location = 'e-services.php'">
                    <p role="button" >Διαθέσιμες e-Υπηρεσίες</p>
                </div>
            </div>
            <div class="news_expanded_container" id="content">
                <div class="inner_con">
                    <div class="news_article" id="news_0" name="news_0">
                        <?php $info = getUser_info();?>
                        <form>
                            <label for="f_name">Όνομα</label>
                                <input type="text" disabled readonly id="f_name" value='<?php echo$info['User_nm'];?>' >
                            <label for="l_name" >Επώνυμο</label>
                                <input type="text" readonly disabled id="l_name" value='<?php echo$info['User_lname'];?>' ><br>
                            <label for="pss">Κωδικός</label>
                                <input type="text" readonly disabled id="pss" value='<?php echo$info['User_psswrd_MD5'];?>' ><br>
                            <label for="mail">E-mail</label>
                                <input type="text" readonly disabled id="mail" value='<?php echo$info['User_email'];?>' > <br>
                            <label for="phone">Τηλέφωνο</label>
                                <input type="text" readonly disabled id="phone" value='<?php echo$info['User_phone'];?>' >
                            <label for="amka">Α.Μ.Κ.Α.</label>
                                <input type="text" readonly disabled id="amka" value='<?php echo$info['User_amka'];?>' >
                        </form>
                    
                    </div>
                    <div class="news_article" id="news_1" name="news_1">
                        <?php $myb = getUser_business();
                            // print_r($myb);
                        ?>
                        <form>
                            <label for="myb">Όνομα Επιχείρησης</label>
                                <select id="myb">
                                    <option value="" hidden style="display:none">Οι Επιχειρήσεις μου</option>
                                    <?php
                                    foreach($myb as $bus){
                                        echo"<option value='". $bus ."'>". $bus ."</option>";
                                    }
                                    ?>
                                </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <div id="footer"></div>
    <?php
        if(isset($_GET['prof_actions'])){
            $id = intval($_GET['prof_actions']);
            echo "<script>showArticle(", $id,");</script>";
        }

        if(isset($_SESSION['user_type'])){
            if($_SESSION['user_type'] == 1){
                echo "<script> hideButton('2'); </script>";
            }
            else if($_SESSION['user_type'] == 2){
                echo "<script> hideButton('1'); </script>";
            }
            else{
                echo "<script> hideButton('1'); </script>";
                echo "<script> hideButton('2'); </script>";
            }
        }

    ?>

    


</html>