<?php
include 'header.php';
?>


<div id="maincontent">

<div id="menyBar">
	<div class="btn-group">
		<button class="btn btn-inverse dropdown-toggle" type="button" 
			data-toggle="dropdown">
			Editorer <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-inverse" role="menu">
			<li><a href="javaEditor.php">Java</a></li>
			<li><a href="#" style="color: grey; pointer-events: none;">PHP & HTML</a></li>
			<li><a href="#" style="color: grey; pointer-events: none;">MySQL</a></li>
			<li><a href="#" style="color: grey; pointer-events: none;">C/C#/C++</a></li>
		</ul>
	</div>

	<div class="btn-group">
		<button class="btn btn-inverse dropdown-toggle" type="button" 
			data-toggle="dropdown">
			Resurser <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-inverse" role="menu">
			<li><a href="http://validator.w3.org">HTML Validering</a></li>
			<li><a href="http://jigsaw.w3.org/css-validator/">CSS Validering</a></li>
			<li><a href="http://www.w3schools.com">W3Schools</a></li>
			<li><a href="https://www.dropbox.com">Dropbox</a></li>
			<li><a href="#" style="color: grey; pointer-events: none;">Terminal</a></li>
		</ul>
	</div>

	<button class="btn btn-hg btn-primary" id="meldingerKnapp" style="background-color: #34495e;">Meldinger</button>

	<div class="btn-group">
		<button class="btn btn-inverse dropdown-toggle" type="button" 
			data-toggle="dropdown">
			Servere <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-inverse" role="menu">
			<li><a id="apacheLink">Apache</a></li>
			<li><a href="#" style="color: grey; pointer-events: none;">MySQL</a></li>
			<li><a href="#" style="color: grey; pointer-events: none;">SSH</a></li>
		</ul>
	</div>

	<div class="btn-group">
		<button class="btn btn-inverse dropdown-toggle" type="button" 
			data-toggle="dropdown">
			System <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-inverse" role="menu">
			<li><a href="#" style="color: grey; pointer-events: none;">Brannmur</a></li>
			<li><a id="brukergrupperLink" href="#">Brukergrupper</a></li>
			<li><a href="#" style="color: grey; pointer-events: none;">Logg</a></li>
			<li><a href="#" style="color: grey; pointer-events: none;">Fil-utforsker</a></li>
			<li><a href="#" style="color: grey; pointer-events: none;">Belastning</a></li>
		</ul>
	</div>
</div> <!-- end of menyBar -->

<div id="teppe"></div>

	<div class="popupBoksWrapper">
		<span class="fui-cross"></span>
		<img src="img/apache1.png" id="apache1Bilde">
		<img src="img/apache2.png" id="apache2Bilde">
		<img src="img/apache3.png" id="apache3Bilde">
		<img src="img/apache4.png" id="apache4Bilde">
		<img src="img/brukergrupper1.png" id="brukergrupper1">
		<img src="img/brukergrupper2.png" id="brukergrupper2">
		<img src="img/brukergrupper3.png" id="brukergrupper3">
	</div>
	
</div> <!-- End of maincontent -->




<?php
include 'footer.php'
?>