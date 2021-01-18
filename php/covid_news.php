<!DOCTYPE>
<homepage>
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

        </script>

    </head>	
    <div id="header"></div>
    
    <body style="">
        <div class="all_container">
            <div class="news_list_container">
                <div role="button" class="news_container" id="0" onclick="showArticle('0')">
                    <p role="button" >Article TITLE #0</p>
                </div>
                <div class="news_container" id="1" name="1" role="button" onclick="showArticle('1')">
                    <p>Article TITLE #1</p>
                </div>
                <div role="button" class="news_container" id="2" onclick="showArticle('2')">
                    <p role="button" >Article TITLE #2</p>
                </div>
                <div class="news_container" id="3" name="3" role="button" onclick="showArticle('3')">
                    <p>Article TITLE #3</p>
                </div>
                <div role="button" class="news_container" id="4" onclick="showArticle('4')">
                    <p role="button" >Article TITLE #4</p>
                </div>
                <div class="news_container" id="5" name="5" role="button" onclick="showArticle('5')">
                    <p>Article TITLE #5</p>
                </div>
            </div> 

            <div class="news_expanded_container" id="content">
                <div class="news_article" id="news_0" name="news_0">
                       Article CONTENT #0
                </div>
                <div class="news_article" id="news_1" name="news_1">
                       Article CONTENT #1
                </div>
                <div class="news_article" id="news_2" name="news_2">
                       Article CONTENT #2
                </div>
                <div class="news_article" id="news_3" name="news_3">
                       Article CONTENT #3
                </div>
                <div class="news_article" id="news_4" name="news_4">
                       Article CONTENT #4
                </div>
                <div class="news_article" id="news_5" name="news_5">
                       Article CONTENT #5
                </div>
            </div>
        </div>
    </body>

    <?php
        if(isset($_GET['article'])){
            include("../php/main_functs.php");
            $id = prep_input(intval($_GET['article']));
            echo $id;
            echo "<script>showArticle(", $id,");</script>";
        }
    ?>

    
</html>

</homepage>
