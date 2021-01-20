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
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
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

            function hideButton(id){
                document.getElementById(id).style.display = "none";
            }

        </script>
<?php
	include("../php/main_functs.php");
	checkall();
?>
    </head>	
    <div id="header"></div>
    
    <body style="">
        <div class="title">
            e-Υπηρεσίες
        </div>
        <div class="all_container" style="">
            <div class="news_list_container">
                <div role="button" class="news_container" id="0" onclick="location = 'eRandevou.php'"">
                    <p role="button" >e-Ραντεβού</p>
                </div>
                <div class="news_container" id="1" name="1" role="button" onclick="showArticle('1')">
                    <p>Καταθέσεις Δικαιολογητικών</p>
                </div>
                <div role="button" class="news_container" id="2" onclick="showArticle('2')">
                    <p role="button" >Έκδοση Δικαιολογητικών</p>
                </div>
                <div role="button" class="news_container" id="3" onclick="showArticle('3')">
                    <p role="button" >e-Υπολγοσιμός</p>
                </div> 
            </div>

            <div class="news_expanded_container" id="content">
                <div class="news_article" id="news_1" name="news_1">
                    <div class="mytitle"> Καταθέσεις Δικαιολογητικών</div>
                       <div class="sub_content">
                            <select  name="prof_actions" id="" onchange="location = this.value">
                                <option value="" hidden style="display:none;margin-right:5%;">Όλα Τα Δικαιολογητικά</option>
                                <option value="AnastolhErgasias.php">Αναστολή Εργασίας</option>
                                <option disabled value="#">Κανονικές Άδειες</option>
                                <option disabled value="#">Στρατιωτικές Άδειες</option>
                                <option value="EidikouSkopou.php">Άδειεα Ειδικού Σκοπού</option>
                                <option disabled value="#">Συντάξεις</option>
                                <option disabled value="#">Επιδόματα</option>
                            </select>
                        </div>
                </div>
                <div class="news_article"  id="news_2" name="news_2">
                    <div class="mytitle"> Έκδοση Δικαιολογητικών
                    </div>
                    <div class="mycontent"> 
                    </div>
                </div>
                <div class="news_article"  id="news_3" name="news_3">
                    <div class="mytitle"> e-Υπολγοσιμός
                    </div>
                    <div class="mycontent"> 
                    </div>
                </div>
            </div>
        </div>
    </body>

    <?php
        if(isset($_GET['article'])){
            $id = intval($_GET['article']);
            // echo $id;
            echo "<script>showArticle(", $id,");</script>";
        }
    ?>

    
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