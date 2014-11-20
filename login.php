<?php session_start(); 

if (isset($_SESSION['loggetInn']))
	if($_SESSION['loggetInn'] == true)
		header("Location: index.php");

if(isset($_POST['loginKnapp'])) {
	if($_POST['passordFelt'] == "" && $_POST['brukernavnFelt'] == "") {
		$_SESSION['loggetInn'] = true;
		header("Location: index.php");
	}
}

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
</head>

<body>
<div id="loginWrapper">
	
	<div id="loginInnerWrapper">
	
	<img src="img/loginLogo.png">
	<form action="" method="post">
		<div class="form-group has-feedback">
			<input type="text" placeholder="Brukernavn" class="form-control flat" name="brukernavnFelt" />
			<span class="form-control-feedback fui-user"></span>
		</div>
		
		<div class="form-group has-feedback">
			<input type="text" placeholder="Passord" class="form-control flat" name="passordFelt" />
			<span class="form-control-feedback fui-lock"></span>
		</div>
		<input type="submit" value="Logg inn" class="btn btn-default" type="submit" name="loginKnapp" id="loginKnapp">
		<a href="">Mangler du passord?</a>
	</form>
	
	</div>
	
</div> <!-- End of loginWrapper -->
</body>
</html>