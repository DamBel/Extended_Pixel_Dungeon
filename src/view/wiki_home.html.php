<?php

	$_SESSION["title"] = "TestPixel - Wiki";
	require_once("header.html.php");

?>

<body>

<?php

$_SESSION["current"] = basename(__FILE__);

require_once("navBar.html.php");

?>

<div class="text-center">

	<h1 id="title"> Wiki </h1>

</div>

<div class="container">

	<h2 class="glyphicon glyphicon-wrench" style="color:white; display: inline-block;"> </h2>
	<h2 style="display: inline; margin-left: 25px; color: white;"> This wiki is under construction. Thank you for your patience! </h2>

</div>

<?php

	require_once("footer.html");

?>