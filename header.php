<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
  <head>
    <title><?php echo $irpg_chan;?> Idle RPG: <?php echo $irpg_page_title;?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<link rel="stylesheet" type="text/css" href="g7.css" />-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

                <a class="navbar-brand" href="index.php">IdleRPG</a>

        </div>

        <?php
          $current_url = basename($_SERVER['PHP_SELF']);
          $active = "class=\"active\"";
        ?>



        <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="nav-item" <?php echo ($current_url == "index.php") ? $active : ''?>>
                    <a class="nav-link" href="index.php">Game Info</a>
                  </li>
                  <li class="nav-item" <?php echo ($current_url == "players.php") ? $active : ''?>>
                    <a class="nav-link" href="players.php">Player Info</a>
                  </li>
                  <li class="nav-item" <?php echo ($current_url == "worldmap.php") ? $active : ''?>>
                    <a class="nav-link" href="worldmap.php">World Map</a>
                  </li>
                  <li class="nav-item" <?php echo ($current_url == "quest.php") ? $active : ''?>>
                    <a class="nav-link disabled" href="quest.php">Quest Info</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="http://idlerpg.net/source.php">Source</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="https://github.com/codedeeply/idlerpg-bootstrap">Site Source</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

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

    <main role="main" class="container">
