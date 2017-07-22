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

		case "Features" : require_once("./src/view/features.html.php"); break;
		case "Wiki" : require_once("./src/view/wiki_home.html.php"); break;
		case "About" : require_once("./src/view/about.html.php"); break;
		case "Development" : require_once("./src/view/development.html.php"); break;
		default: require_once("./src/view/404.html.php"); break;
	}
} else {
	require_once("./src/view/homepage.html.php");

}

?>

</body>
</html>