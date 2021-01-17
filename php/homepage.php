<homepage>
<html>

	<meta charset="UTF-8">

	<head>

		<link rel= "stylesheet" href="../css/homepage_style.css?v=1.1">

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
	</head>

	<body>
		<div id="header"></div>

		<!-- i dont even know what that was..... -->
		<!-- <div id="includedContent"></div> -->

		<!-- COVID OVERL MENU -->
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="#">About</a>
			<a href="#">Services</a>
			<a href="#">Clients</a>
			<a href="#">Contact</a>
		</div>

		<div id="main">
			<div class="covbuttcontainer">
				<div class="covidbutton">
					<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; COVID-19</span>
				</div>
			</div>
		</div>
		<!-- COVID OVERL MENU -->


		<div class="Searchrow">
			<div class="dropdown">
				<button class="categorybutton">
					<p>Κατηγορίες Αναζήτησης</p>
				</button>
				<div class="dropdown-content">
					<a>COVID-19</a>
					<a>e-Υπηρεσίες</a>
					<a>Προγράμματα και Δράσεις</a>
					<a>Δικαιολογητικά</a>
					<a>Νέα και Ενημέρωση</a>
					<a>Νομικά</a>
					<a>Συχνές Ερωτήσεις</a>
				</div>
			</div>



			<div class="searchbar">
				<input  class="searchinput" type="text" name="search" placeholder="Αναζήτηση...">
				<button class="searchbutton" name="button" style="float:right">
					<img src="search_icon_2.png" width="20" height="20">
				</button>
			</div>
		</div>

		<div class="Personatext">
			<p>Είμαι...</p>
		</div>

		<div class="Personarow">
			<div class="Personabutton">
				<p>ΕΡΓΑΖΟΜΕΝΟΣ</p>
			</div>
			<div class="Personabutton">
				<p>ΕΡΓΟΔΟΤΗΣ</p>
			</div>
			<div class="Personabutton">
				<p>ΑΝΕΡΓΟΣ</p>
			</div>
			<div class="Personabutton">
				<p>ΣΥΝΤΑΞΙΟΥΧΟΣ</p>
			</div>
		</div>

	<!-- /* Quick access to FQA and Forms */ -->
		<div class="QuickAccessRow">
				<div class="FQAshort">
					<div class="FSTitlerow">
						<p class="FSTitle">Συχνές Ερωτήσεις</p>
					</div>
					<div class="FSSubTitlerow">
						<p class="FSSubTitle">Εργαζόμενοι</p>
						<p class="FSSubTitle">Εργoδότες</p>
					</div>
					<div class="FSContentWrapper">
						<div class="FSContent">
							<a href="#">Καταγγελία Σύμβασης Εργασίας</a>
							<a href="#">Ασφάλισης</a>
						</div>
						<div class="FSContent">
							<a href="#">Καταγγελία Σύμβασης Εργασίας</a>
							<a href="#">Αναγγελία Πρόσληψης</a>
						</div>
					</div>
				</div>
				<div class="FQAshort">
					<p class="FSTitle">Δημοφιλείς Φόρμες</p>
					<div class="FSContentWrapper">
						<div class="FSContent">
							<a href="#">Αίτηση Καταβολής ...</a>
							<a href="#">Αίτηση Πρόσληψης</a>
							<a href="#">Αίτηση Άδειας Ειδικού Σκοπού</a>
						</div>
						<div class="FSContent">
							<a href="#">Αίτηση Άδειας Ειδικού Σκοπού</a>
							<a href="#">Αναγγελία Πρόσληψης</a>
							<a href="#">Αίτηση Δικαιούχου...</a>
						</div>
					</div>
				</div>
		</div>

		<div class="JESearchRow">
			<div class="JESearchContainer">
				<p class="FSTitle">Αναζήτηση Θέσεων Εργασίας</p>
				<div class="searchable">
					<input type="text" placeholder="Επαγγελματικός Τομέας" onkeyup="filterFunction(this,event)">
					<ul>
						<li>Δικηγόρος</li>
						<li>Προγραμματιστής</li>
						<li>Δάσκαλος</li>
						<li>Οικοδόμος</li>
						<li>Ξενοδόχος</li>
						<li>Δημοσιογράφος</li>
						<li>Φούρναρης</li>
						<li>Καθηγητής</li>
					</ul>
				</div>
				<div class="searchable">
					<input type="text" placeholder="Περιοχή" onkeyup="filterFunction(this,event)">
					<ul>
						<li>Αθήνα</li>
						<li>Λαμία</li>
						<li>Θεσαλονίκη</li>
						<li>Ιωάννινα</li>
						<li>Κρήτη</li>
						<li>Μυτηλίνη</li>
						<li>Πάργα</li>
						<li>Πάτρα</li>
					</ul>
				</div>
				<div class="Sbutton">
					<p>Αναζήτηση</p>
				</div>
			</div>
			<div class="JESearchContainer">
				<p class="FSTitle">Αναζήτηση Εργατικού Δυναμικού</p>
				<div class="searchable">
					<input type="text" placeholder="Επαγγελματικός Τομέας" onkeyup="filterFunction(this,event)">
					<ul>
						<li>Δικηγόρος</li>
						<li>Προγραμματιστής</li>
						<li>Δάσκαλος</li>
						<li>Οικοδόμος</li>
						<li>Ξενοδόχος</li>
						<li>Δημοσιογράφος</li>
						<li>Φούρναρης</li>
						<li>Καθηγητής</li>
					</ul>
				</div>
				<div class="searchable">
					<input type="text" placeholder="Περιοχή" onkeyup="filterFunction(this,event)">
					<ul>
						<li>Αθήνα</li>
						<li>Λαμία</li>
						<li>Θεσαλονίκη</li>
						<li>Ιωάννινα</li>
						<li>Κρήτη</li>
						<li>Μυτηλίνη</li>
						<li>Πάργα</li>
						<li>Πάτρα</li>
					</ul>
				</div>
					<div class="Sbutton">
						<p>Αναζήτηση</p>
					</div>
			</div>
		</div>

		<div class="SampleRow">
			<div class="SimpleContainer border-right">
				<a class="Title" href="#">Ανακοινώσεις</a>
				<p class="date">Πέμπτη, 30 Ιουλίου 2020</p>
				<a class="stitle" href="#">Η χρήση της μάσκας είναι υποχρέωτική...</a>
				<p class="cont">Τους χώρους στους οποίους είναι υποχρεωτική η χρήση μάσκας, στο πλαίσιο των μέτρων για να μειωθεί η διασπορά του νέου κορωνοϊού, περιγράφει απόφαση η οποία δημοσιεύθηκε το Σάββατο στην Εφημερίδα της Κυβερνήσεως (ΦΕΚ Β 3330).Όπως αναφέρεται στο ΦΕΚ, σε εμπορικές επιχειρήσεις, επιχειρήσεις παροχής υπηρεσιών, χώρους γραφείων (δημοσίων υπηρεσιών ή ιδιωτικών επιχειρήσεων) και άλλους κλειστούς και ανοιχτούς χώρους συνάθροισης κοινού, μη </p>
			</div>
			<div class="SimpleContainer border-right">
				<a class="Title" href="#">Δελτία Τύπου</a>
				<p class="date">Πέμπτη, 30 Ιουλίου 2020</p>
				<a class="stitle" href="#">Η χρήση της μάσκας είναι υποχρέωτική...</a>
				<p class="cont">Αναρτήθηκαν σήμερα, Δευτέρα 3 Αυγούστου 2020, στη διαδικτυακή πύλη του ΟΑΕΔ www.oaed.gr ο Οριστικός Πίνακας Κατάταξης Ανέργων, στο Πρόγραμμα «Προώθηση της απασχόλησης  μέσω προγραμμάτων κοινωφελούς χαρακτήρα, συμπεριλαμβανομένης και της κατάρτισης για 36.500 άτομα σε Δήμους, Περιφέρειες, Κέντρα Κοινωνικής Πρόνοιας Περιφερειών (ΚΚΠΠ)/συναφείς φορείς, Υπηρεσίες Υπουργείων και άλ</p>
			</div>
			<div class="SimpleContainer">
				<a class="Title" href="#">Προθεσμίες</a>
				<p class="date">Πέμπτη, 30 Ιουλίου 2020</p>
				<a class="stitle" href="#">Η χρήση της μάσκας είναι υποχρέωτική...</a>
				<p class="cont">Υπoγράφηκε χθες η Κοινή Υπουργική Απόφαση (ΚΥΑ) για την ολοκλήρωση της σύνδεσης των παιδιών που βρίσκονται σε δομές παιδικής προστασίας και των υποψηφίων γονέων. Η απόφαση προβλέπει, για πρώτη φορά, την ακριβή διαδικασία τοποθέτησης παιδιών σε ανάδοχες ή θετές οικογένειες μετά την πρόταση σύνδεσης από </p>
			</div>
		</div>

	</body>

	<!-- --------------------------------------------------------- -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	function filterFunction(that, event) {
	    let container, input, filter, li, input_val;
	    container = $(that).closest(".searchable");
	    input_val = container.find("input").val().toUpperCase();

	    if (["ArrowDown", "ArrowUp", "Enter"].indexOf(event.key) != -1) {
	        keyControl(event, container)
	    } else {
	        li = container.find("ul li");
	        li.each(function (i, obj) {
	            if ($(this).text().toUpperCase().indexOf(input_val) > -1) {
	                $(this).show();
	            } else {
	                $(this).hide();
	            }
	        });

	        container.find("ul li").removeClass("selected");
	        setTimeout(function () {
	            container.find("ul li:visible").first().addClass("selected");
	        }, 100)
	    }
	}

	function keyControl(e, container) {
	    if (e.key == "ArrowDown") {

	        if (container.find("ul li").hasClass("selected")) {
	            if (container.find("ul li:visible").index(container.find("ul li.selected")) + 1 < container.find("ul li:visible").length) {
	                container.find("ul li.selected").removeClass("selected").nextAll().not('[style*="display: none"]').first().addClass("selected");
	            }

	        } else {
	            container.find("ul li:first-child").addClass("selected");
	        }

	    } else if (e.key == "ArrowUp") {

	        if (container.find("ul li:visible").index(container.find("ul li.selected")) > 0) {
	            container.find("ul li.selected").removeClass("selected").prevAll().not('[style*="display: none"]').first().addClass("selected");
	        }
	    } else if (e.key == "Enter") {
	        container.find("input").val(container.find("ul li.selected").text()).blur();
	        onSelect(container.find("ul li.selected").text())
	    }

	    container.find("ul li.selected")[0].scrollIntoView({
	        behavior: "smooth",
	    });
	}

	function onSelect(val) {
	    alert(val)
	}

	$(".searchable input").focus(function () {
	    $(this).closest(".searchable").find("ul").show();
	    $(this).closest(".searchable").find("ul li").show();
	});
	$(".searchable input").blur(function () {
	    let that = this;
	    setTimeout(function () {
	        $(that).closest(".searchable").find("ul").hide();
	    }, 300);
	});

	$(document).on('click', '.searchable ul li', function () {
	    $(this).closest(".searchable").find("input").val($(this).text()).blur();
	    onSelect($(this).text())
	});

	$(".searchable ul li").hover(function () {
	    $(this).closest(".searchable").find("ul li.selected").removeClass("selected");
	    $(this).addClass("selected");
	});

		</script>

	<script>
		function openNav() {
			document.getElementById("reg").style.display = "flex";
			document.getElementById("reg").style.backgroundColor = "lightgreen";

			document.getElementById("mySidenav").style.width = "250px";
			document.getElementById("main").style.marginLeft = "250px";
			document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			document.documentElement.style.overflow = 'hidden';
	   		document.body.scroll = "no";
		}

		function closeNav() {
			document.getElementById("reg").style.display = "none";
			document.getElementById("reg").style.backgroundColor = "white";

			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginLeft= "0";
			document.body.style.backgroundColor = "white";
			document.documentElement.style.overflow = 'scroll';
	 		document.body.scroll = "yes";
		}

	</script>


</html>

</homepage>
