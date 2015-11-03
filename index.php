<?php
include 'includes/css.php';

$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$baseurl = "http://" . $_SERVER['SERVER_NAME'] . $uri_parts[0];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>OB-Mat – das Wahlentscheidungswerkzeug für Ulm</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta content=OB-Mat">

    <meta name="image_src" content="img/OB-Mat_logo.png"/>
    <meta name="description" content="Der OB-Mat ist ein Angebot von datalove ulm/OK Lab Ulm für die Oberbürgermeisterwahl 2015. Er ermöglicht es, zu ausgewählten Themen die eigenen Standpunkte mit denen der Listen abzugleichen, die zur Wahl antreten."/>

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:title" content="OB-Mat"/>
    <meta property="og:type"  content="website"/>
    <meta property="og:image" content="img/OB-Mat_logo.png"/>
    <meta property="og:url"   content=""/>
    <meta property="og:site-name" content="ob-mat.ulmapi.de"/>
    <meta property="og:description" content="Der OB-Mat ist ein Angebot von datalove ulm/OK Lab Ulm für die Oberbürgermeisterwahl 2015. Er ermöglicht es, zu ausgewählten Themen die eigenen Standpunkte mit denen der Listen abzugleichen, die zur Wahl antreten."/>

    <link href="css/<?php echo $css[$css_id];?>" rel="stylesheet" media="screen">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="shariff/shariff.min.css" rel="stylesheet">

    <script src="js/jquery-2.0.2.min.js"></script>

  </head>
  <body>

  <div class="container mow-container" style="margin-top:20px;">


  <a href="http://codefor.de"><img src="img/CFG_logo.svg" height="50px"></a> <a href="http://www.ulmapi.de"><img src="img/ulmapi.svg" height="50px"></a>
  <a href="/"><img class="pull-right" src="img/OB-Mat_logo.svg" title="OB-Mat-Logo"/></a>


  <div class="text-center">
    <h1><small>Der</small> OB-Mat <small>für Ulm</small></h1>
  </div>
    <p>Mit dem OB-Mat kannst Du zu ausgewählten Themen Deine eigenen Standpunkte mit denen der Kandidat_innen der Ulmer Oberbürgermeisterwahl 2015 abgleichen.</p>

    <p>Er ist selbstverständlich nur als Automat ohne Hirn zu verstehen und spricht keine Wahlempfehlungen aus – kann und soll aber gerne als Anhaltspunkt und Gedankenanreger dienen.</p>

    <h2>Wann gehs endlich los?</h2>
    <p><strong>Bald, bald!</strong> Also, äh, folgendes: Wir hatten bis zum Wochenende des 22.10. Thesen und Fragen gesammelt, durch die wir uns durchsortieren mussten, um ein passendes Thesenfeld aufzubauen. Jede Frage zählt schließlich, damit sich die Ergebnisse dann auch unterscheiden.</p>

<p>Um auch noch die Podiumsdiskussion vom 27.10. mitnehmen zu können, haben wir den Katalog nicht schon am 26.10. versandt (das war der ursprüngliche Plan), sondern erst in der Nacht vom 29. auf den 30.10. – mit dem Ziel, bis zum 3.11. alle Antworten zu haben, um online gehen zu können. Guter Plan, oder? <strong>Pustekuchen.</strong></p>

<p>Wir haben zwar nun schon eine ganze Reihe von Stellungnahmen und würden gerne loshibbeln. Herrn Milde als geheimen Zusatzkandidaten konnten wir aber erst gestern erreichen. Auch zu Frau Çalışkan kam erst kurzfristig Kontakt zustande. Und noch viel bedauerlicher: Andere Kandidaten haben unsere Donnerstag-Nacht-Mail wohl erst Montag vorgelegt bekommen. Wir vertagen uns daher vorerst auf <strong>Mittwoch, 4.11.</strong> – das wird ja sicher zu schaffen sein, liebe Kandidat_innen</p>


    <!-- <p>Für ihre Stellungnahmen zu den Thesen sind die Kandidat_innen selbst verantwortlich.</p>

    <p class="text-center"><a class="btn btn-large btn-primary" href="mahlowat.php" title="OB-Mat starten">Mit der Befragung beginnen!</a></p>-->

    <p class="text-center"><a href="faq.php" title="Fragen und Antworten"><small>Fragen und Antworten: FAQ</small></a></p>



    <div class="shariff" data-url="<?php echo $baseurl; ?>" data-referrer-track=null></div>
    <script src="shariff/shariff.min.js"></script>
  </div>


  </body>
</html>
