<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html>
  <head>
    <title><?php echo $irpg_chan;?> Idle RPG: <?php echo $irpg_page_title;?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="g7.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

    <!-- Idle RPG Logo -->

    <div class="head">
<?php
    echo('        <img src="'. $irpg_logo .'" alt="'. $irpg_chan .' Idle RPG" title="'. $irpg_chan .' Idle RPG" width="338" height="115" />');
?>
    </div>

    <div id="menu" class="menu">

<?php
    $topbarurl = array(
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
    }
?>
    </div>

    <div class="content">
