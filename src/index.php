<?php

	session_start();

?>

<body>

<?php

if (isset($_GET["name"])){

	switch ($_GET["name"]){

		case "Home" :
		case "404" :
			require_once("./view/homepage.html.php");
			break;

		case "Features" : require_once("./view/features.html.php"); break;
		case "Wiki" : require_once("./view/wiki_home.html.php"); break;
		case "About" : require_once("./view/about.html.php"); break;
		case "Development" : require_once("./view/development.html.php"); break;
		default: require_once("./view/404.html.php"); break;
	}
} else {
	require_once("./view/homepage.html.php");

}

?>

</body>
</html>