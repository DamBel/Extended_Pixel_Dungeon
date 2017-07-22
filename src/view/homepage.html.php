<?php
	$_SESSION["current"] = basename(__FILE__);
	$_SESSION["title"] = "Welcome to Extended Pixel Dungeon project!";

	require_once("header.html.php");
	require_once("navBar.html.php");
?>

<body>

	<div class="text-center">
	  	<img src="./resources/img/extended_pixel_dungeon_logo.png" class="rounded">
	  	<h1 id="maintitle"> A new Pixel Dungeon adventure awaits you! </h1>
	  	<br>
	  	<h2> Coming soon on Android! </h2>
	  	<h3> Check out this website to discover more! </h3>
	  	<br>
	  	<br>
	  	<h1> ________________________________________ </h1> 
	  	<br>
	  	<h2> Latest update : V0.x.x</h2>
	</div>

<?php
	require_once("footer.html");
?>