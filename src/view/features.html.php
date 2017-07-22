<?php

	$_SESSION["title"] = "TestPixel - Features";
	require_once("header.html.php");

?>

<body>

<?php

	$_SESSION["current"] = basename(__FILE__);

	require_once("navBar.html.php");

?>

<div class="text-center">

	<h1 id="title"> Features </h1>

</div>

<?php

	for ($i=0; $i < 3; $i++) { 
		
		require("features_item.html.php");

	}

?>

<?php

	require_once("footer.html");

?>