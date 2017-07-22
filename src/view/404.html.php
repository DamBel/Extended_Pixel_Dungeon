<?php

	$_SESSION["title"] = "Extended Pixel Dungeon - 404";
	$_SESSION["current"] = basename(__FILE__);
	$_SESSION["page"] = "404";
	require_once("header.html.php");

?>

<body>

<?php

	require_once("navBar.html.php");

?>

<div class="container">

	<img src="./resources/img/Wipeoutscroll.png" class="rounded">

	<h3>Uh oh, you landed onto an unknown place!</h3>

	<a href="/TestPixel/src/index.php">You should take the stairs back to the home page</a>

</div>

<?php

	require_once("footer.html");

?>