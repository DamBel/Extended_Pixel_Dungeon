<?php

	date_default_timezone_set('Europe/Paris');

	//define("SUBJECT", "New message from TestPixel website! - ";
	$object = null;
	$message = null;

	if (isset($_POST["object"]) && isset($_POST["message"])){

		$object = $_POST["object"];
		$message = $_POST["message"];

		header("Location: mailto:me@me.com?subject=".$object."&body=".$message);

		return true;

	} else {
		return false;
	}

?>