<!-- The header of all the pages with the nav bar -->
<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- metadata, css page link, google fonts link, and title -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv=”Pragma” content=”no-cache”>
        <meta http-equiv=”Expires” content=”-1″>
        <meta http-equiv=”CACHE-CONTROL” content=”NO-CACHE”>
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <script src="assets/js/style.js"></script>
        <title> Welcome to NYC </title>
    </head>
    <body>
      <!-- The nav bar with all the links and logos separated by boroughs along with php for breadcrumbs -->
      <nav>
        <a class="logo" href="index.php">
          <img class="lSize" src="assets/media/logo.JPG" alt="logo">
        </a>
        <a <?php if(strpos($title, "ainpage") != false) { ?> id="active" <?php } ?> class="home" href="index.php"> Home </a><!--
        --><div class="menu" id="op1">
          <button <?php if(strpos($title, "anhattan") != false) { ?> class="active" <?php } ?>> Manhattan </button>
          <div class="menuContent">
            <a <?php if(strpos($title, "anhattan About") != false) { ?> class="active" <?php } ?> href="Manhattan.php"> About </a>
            <a <?php if(strpos($title, "Liberty") != false) { ?> class="active" <?php } ?> href="Statue of Liberty.php"> Statue of Liberty </a>
            <a <?php if(strpos($title, "Empire") != false) { ?> class="active" <?php } ?> href="Empire State Building.php"> Empire State Building </a>
            <a <?php if(strpos($title, "Park") != false) { ?> class="active" <?php } ?> href="Central Park.php"> Central Park </a>
          </div>
        </div><!--
        --><div class="menu" id="op2">
          <button <?php if(strpos($title, "rooklyn") != false) { ?> class="active" <?php } ?>> Brooklyn </button>
          <div class="menuContent">
            <a <?php if(strpos($title, "rooklyn About") != false) { ?> class="active" <?php } ?> href="Brooklyn.php"> About </a>
            <a <?php if(strpos($title, "Bridge") != false) { ?> class="active" <?php } ?> href="Brooklyn Bridge.php"> Brooklyn Bridge </a>
            <a <?php if(strpos($title, "Botanical") != false) { ?> class="active" <?php } ?> href="Brooklyn Botanical Garden.php"> Brooklyn Botanical Garden </a>
            <a <?php if(strpos($title, "Coney") != false) { ?> class="active" <?php } ?> href="Coney Island.php"> Coney Island </a>
          </div>
        </div><!--
        --><div class="menu" id="op3">
          <button <?php if(strpos($title, "ronx") != false) { ?> class="active" <?php } ?>> Bronx </button>
          <div class="menuContent">
            <a <?php if(strpos($title, "ronx About") != false) { ?> class="active" <?php } ?> href="Bronx.php"> About </a>
            <a <?php if(strpos($title, "Zoo") != false) { ?> class="active" <?php } ?> href="Bronx Zoo.php"> Bronx Zoo </a>
          </div>
        </div><!--
        --><div class="menu" id="op4">
          <a href="comments.php"><button <?php if(strpos($title, "mment") != false) { ?> id="a" <?php } ?> class="comments"> Comments </button></a>
        </div>
        <!-- Hidden hamburger menu icon -->
        <img class="mobile" src="assets/media/icon.png" alt="mobileMenu" onclick="menu()">
      </nav>
