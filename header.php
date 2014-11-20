<?php 
session_start();

// Sjekker om bruker er innlogget, og videresender til login page hvis ikke
if (!isset($_SESSION['loggetInn']) or $_SESSION['loggetInn'] == false)
	header("Location: login.php");


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="./css/main.css" rel="stylesheet" type="text/css">
<link href="./flatui/dist/css/vendor/bootstrap.min.css" rel="stylesheet"
	type="text/css">
<link href="./flatui/dist/css/flat-ui.css" rel="stylesheet"
	type="text/css">


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="./flatui/dist/js/flat-ui.js"></script>

<script type="text/javascript">

$(document).ready(function() {

	$("#loginKnapp").hover(function(){
		   $(this).stop().animate({"opacity": "1"}); 
	}, function(){
	   $(this).stop().animate({"opacity": "0.5"});
	});
	
	$(".popupBoksWrapper").hide(); 				// Hider div'en som standard
	$("#apache2Bilde").hide(); 
	
	$("#apacheLink").click(function() {			// Viser eller fjerner div når link trykkes
		  $("#teppe").fadeIn(500);
		  $(".popupBoksWrapper").toggle();
		  $("#apache1Bilde").show();
		  $("#apache2Bilde").hide();
		  $("#apache3Bilde").hide();
		  $("#apache4Bilde").hide();
		  $("#brukergrupper1").hide();
		  $("#brukergrupper2").hide();
		  $("#brukergrupper2").hide();
	});

	$("#brukergrupperLink").click(function() {			// Viser eller fjerner div når link trykkes
		  $("#teppe").fadeIn(500);
		  $(".popupBoksWrapper").toggle();
		  $("#brukergrupper1").show();
		  $("#brukergrupper2").hide();
		  $("#brukergrupper3").hide();
		  $("#apache1Bilde").hide();
		  $("#apache2Bilde").hide();
		  $("#apache3Bilde").hide();
		  $("#apache4Bilde").hide();
	});

	$(".fui-cross").click(function() {
		  $(".popupBoksWrapper").hide();
		  $("#allcontent").animate({ opacity: 1 });
		  $("#teppe").fadeOut(500);
	});

	$("#apache1Bilde").click(function() {			// Går til neste bilde når bilde
		  $(this).hide();
		  $("#apache2Bilde").show();
	});

	$("#apache2Bilde").click(function() {			// Går til neste bilde når bilde
		  $(this).hide();
		  $("#apache3Bilde").show();
	});

	$("#apache3Bilde").click(function() {			// Går til neste bilde når bilde
		  $(this).hide();
		  $("#apache4Bilde").show();
	});

	$("#apache4Bilde").click(function() {			// Går til neste bilde når bilde
		$(".popupBoksWrapper").toggle();
		$("#teppe").fadeOut(500);
	});

	$("#brukergrupper1").click(function() {			// Går til neste bilde når bilde
		$(this).hide();
		$("#brukergrupper2").show();
	});

	$("#brukergrupper2").click(function() {			// Går til neste bilde når bilde
		$(this).hide();
		$("#brukergrupper3").show();
	});

	$("#brukergrupper3").click(function() {			// Går til neste bilde når bilde
		$(".popupBoksWrapper").toggle();
		$("#teppe").fadeOut(500);
	});

	$(".fui-cross").css({ opacity: 0.5 }).hover(function() { // Øker opacity på exit kryss
		$(this).animate({ opacity: 1 });
	}, function() {
		$(this).animate({ opacity: 0.5 });
	});

	$(document).mouseup(function (e) {
		var container = $(".popupBoksWrapper");

		if (!container.is(e.target) 							// if the target of the click isn't the container...
			  && container.has(e.target).length === 0) 			// ... nor a descendant of the container
		{
			container.hide();
			$("#allcontent").animate({ opacity: 1 });
			$("#teppe").fadeOut(500);
		}
	});

});

</script>

<title>EasyDev - Et fullstendig utviklingsmiljø for utviklere!</title>
</head>

<body>
	<div id="mainframe">
		<div id="allcontent">



			<header>
				<img src="img/calendar.png" id="calendar">
				<div id="logo">
					<a href="index.php"><span class="fui-home"></span></a>
					<p>EasyDev</p>
				</div>

				<div class="btn-group" id="innloggetKnappeGruppe">
					<button class="btn btn-inverse dropdown-toggle" type="button"
						data-toggle="dropdown">
						<span class="fui-user"></span> Petter K <span class="caret"></span>
					</button>
					<ul class="dropdown-menu dropdown-menu-inverse" role="menu" id="innloggetDropdownGruppe">
						<li><a href="#" style="color: grey; pointer-events: none;">Profil</a></li>
						<li><a href="#" style="color: grey; pointer-events: none;">Kontrollpanel</a></li>
						<li class="divider"></li>
						<li><a href="logout.php">Logg ut</a></li>
					</ul>
				</div>


			</header>



<?php
?>
