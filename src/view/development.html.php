<?php

	$_SESSION["title"] = "TestPixel - Development";
	require_once("header.html.php");

?>
<body>

<?php

$_SESSION["current"] = basename(__FILE__);

require_once("navBar.html.php");

?>

<div class="text-center">

	<h1 id="title"> Development </h1>

</div>
<br>

<div class="container">

	<table>
		<tr>
			<th>
				<img src="./resources/img/Blacksmith_gif.gif" alt="blacksmith_animated">
			</th>
			<th>
				<h3 style="margin-left: 1em;"> On this page you will find everything you need to know about mod's development (time left, technologies used, and more!) </h3>
			</th>
		</tr>
	</table>
		
</div>

<br>

<div class="container">

	<h3> This mod is based on <a class="link" href="http://pixeldungeon.watabou.ru/"><strong>Watabou's original Pixel Dungeon</strong></a> and <a class="link" href="http://www.shatteredpixel.com/"><strong>Evan's Shattered Pixel Dungeon</strong></a> </h3>

	<h3> Game powered by : </h3>	

	<ul style="display:inline;">
		<li><img src="" alt="Java"></li>
		<li><img src="" alt="Android"></li>
		<li><img src="" alt="Gradle"></li>
	</ul>

</div>

<div class="container">

	<h3> Website is powered by : </h3>

	<ul>
		<li><img src="" alt="HTML5"></li>
		<li><img src="" alt="CSS3"></li>
		<li><img src="" alt="PHP5"></li>
		<li><img src="" alt="Bootstrap"></li>
	</ul>

</div>

<div class="container">

	<h3> All sprites used on this site comes from the original game <strong>Pixel Dungeon</strong> </h3>

</div>

<?php

	require_once("footer.html");

?>