<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
  <head>
    <title><?php echo $irpg_chan;?> Idle RPG: <?php echo $irpg_page_title;?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<link rel="stylesheet" type="text/css" href="g7.css" />-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
      <a class="navbar-brand" href="index.php">IdleRPG</a>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Game Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="players.php">Player Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="worldmap.php">World Map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="quest.php">Quest Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="http://idlerpg.net/source.php">Source</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="https://github.com/codedeeply/idlerpg-bootstrap">Site Source</a>
        </li>
      </ul>
    </nav>

<?php
    /*$topbarurl = array(
        'Game Info' => $BASEURL . 'index.php',
        'Player Info' => $BASEURL . 'players.php',
        'World Map' => $BASEURL . 'worldmap.php',
        'Quest Info' => $BASEURL . 'quest.php',
        #'Contact' => $BASEURL . 'contact.php',
        'Source' => 'http://idlerpg.net/source.php',
        #'Other IRPGs' => 'http://idlerpg.net/others.php',
        'Site Source' => 'http://idlerpg.net/sitesource.php',
        #'Forum' => 'http://idlerpg.net/forum.php',
        #'moo.' => 'http://cowcult.org',
    );

    foreach ($topbarurl as $key => $value) {
        if ($topbarurl[$key] ==  $_SERVER['PHP_SELF']) {
            echo "        <a class=\"home\" href=\"$value\">$key</a>\n";
        }
        else {
            echo "        <a href=\"$value\">$key</a>\n";
        }
    }*/
?>

    <div class="container">
