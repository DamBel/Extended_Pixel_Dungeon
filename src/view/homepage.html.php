<?php
	$_SESSION["current"] = basename(__FILE__);
	$_SESSION["title"] = "Welcome to Extended Pixel Dungeon project!";

	require_once("header.html.php");
	require_once("navBar.html.php");
?>

<body>

	<div class="text-center">
		<h1 id="maintitle"> Welcome to Extended Pixel Dungeon's website ! </h1>
	  	<img src="./resources/img/extended_pixel_dungeon_logo.png" class="rounded">
	  	<h2> A new Pixel Dungeon adventure awaits you! </h2>
	  	<br>
	  	<h3> Coming soon on Android! </h3>
	  	<br>
	  	<h3> Check out this website to discover more! </h3>
	  	<br>
	  	<br>
	  	<hr class="epd_delimiter"> 
	  	<br>
	  	<h2> Latest update : V0.x.x</h2>
	</div>

<?php
	require_once("footer.html");
?>