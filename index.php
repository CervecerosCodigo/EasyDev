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
			<li><a href="#">PHP & HTML</a></li>
			<li><a href="#">MySQL</a></li>
			<li><a href="#">C/C#/C++</a></li>
		</ul>
	</div>

	<div class="btn-group">
		<button class="btn btn-inverse dropdown-toggle" type="button" 
			data-toggle="dropdown">
			Resurser <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-inverse" role="menu">
			<li><a href="#">HTML Validering</a></li>
			<li><a href="#">CSS Validering</a></li>
			<li><a href="#">W3Schools</a></li>
			<li><a href="#">Dropbox</a></li>
			<li><a href="#">Terminal</a></li>
		</ul>
	</div>

	<button class="btn btn-hg btn-primary" id="meldingerKnapp" style="background-color: #34495e;">Meldinger</button>

	<div class="btn-group">
		<button class="btn btn-inverse dropdown-toggle" type="button" 
			data-toggle="dropdown">
			Servere <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-inverse" role="menu">
			<li><a href="#">Apache</a></li>
			<li><a href="#">MySQL</a></li>
			<li><a href="#">SSH</a></li>
		</ul>
	</div>

	<div class="btn-group">
		<button class="btn btn-inverse dropdown-toggle" type="button" 
			data-toggle="dropdown">
			System <span class="caret"></span>
		</button>
		<ul class="dropdown-menu dropdown-menu-inverse" role="menu">
			<li><a href="#">Brannmur</a></li>
			<li><a href="#">Brukergrupper</a></li>
			<li><a href="#">Logg</a></li>
			<li><a href="#">Fil-utforsker</a></li>
			<li><a href="#">Belastning</a></li>
		</ul>
	</div>
</div> <!-- end og menyBar -->

</div>
<
<!-- End of maincontent -->




<?php
include 'footer.php'
?>