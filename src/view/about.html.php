<?php

	$_SESSION["title"] = "Extended Pixel Dungeon - About";
	require_once("header.html.php");

?>

<body>

<?php

	$_SESSION["current"] = basename(__FILE__);
	require_once("navBar.html.php");

?>

<div class="text-center">

	<h1 id="title"> About me! </h1>

</div>

<div class="container">

	<h2 id="title_formAbout"> Contact me! </h2>
	<br>

	<form method="POST" action="./controller/sendMail.php">
	<div class="form-group row">
	  <label class="col-2 col-form-label">Object</label>
	  <div class="col-10">
	    <input class="form-control" type="text" placeholder="" name="object" required>
	  </div>
	</div>
	<!--
	<div class="form-group row">
	  <label class="col-2 col-form-label">Your email</label>
	  <div class="col-10">
	    <input class="form-control" type="email" placeholder="My email" name="email" required>
	  </div>
	</div>
	-->
	<div class="form-group row">
	    <label>Your message</label>
	    <textarea class="form-control" id="exampleTextarea" rows="5" name="message" placeholder="Your fabulous message..." required></textarea>
	</div>
	<div class="form-check">
		<label class="form-check-label">
	    	<input id="checkbox_formAbout" type="checkbox" class="form-check-input" required>
	    <p style="display: inline; vertical-align: text-bottom;">I'm not a robot !</p>
	    </label>
	</div>
	<button id="button_formAbout" type="submit" class="btn btn-primary">Submit</button>

	</form>
</div>

<?php

	require_once("footer.html");

?>
