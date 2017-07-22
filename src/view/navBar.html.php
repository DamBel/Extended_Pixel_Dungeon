<?php

  require_once("./controller/navBarItem.php");

	$home = new navBarItem("view/homepage.html.php", "Home");
	$features = new navBarItem("view/features.html.php", "Features");
	$wiki = new navBarItem("view/wiki_home.html.php", "Wiki");
	$about = new navBarItem("view/about.html.php", "About");
  $dev = new navBarItem("view/development.html.php", "Development");
  $test = new navBarItem("jj", "test");

  // update of "active" property
  switch($_SESSION["current"]){

    case "homepage.html.php" : $home->active = true; break;
    case "features.html.php": $features->active = true; break;
    case "wiki_home.html.php": $wiki->active = true; break;
    case "about.html.php": $about->active = true; break;
    case "development.html.php": $dev->active = true; break;

  }

	$items = array('home' => $home, 'features' => $features, 'wiki' => $wiki, 'dev' => $dev, 'about' => $about, 'test' => $test);

?>

 <nav class="navbar navbar-inverse" style="border-radius: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#testPixelNavBar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="testPixelNavBar">
      <ul class="nav navbar-nav">

      <?php

      foreach ($items as $value) {
        
        echo $value->toString();

      }

      ?>
      
      </ul>
    </div>
  </div>
</nav>

