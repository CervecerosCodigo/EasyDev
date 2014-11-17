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
	$("#apacheLink").click(function(){
		  $(".popupBoksWrapper").toggle();
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
					<ul class="dropdown-menu dropdown-menu-inverse" role="menu">
						<li><a href="#">Profil</a></li>
						<li><a href="#">Kontrollpanel</a></li>
						<li class="divider"></li>
						<li><a href="#">Logg ut</a></li>
					</ul>
				</div>


			</header>



<?php
?>
