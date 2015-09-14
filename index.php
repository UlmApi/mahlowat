<?php
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
    
    <meta property="og:title" content="OB-Mat"/>
    <meta property="og:type"  content="website"/>
    <meta property="og:image" content="img/OB-Mat_logo.png"/>
    <meta property="og:url"   content=""/>
    <meta property="og:site-name" content="ob-mat.ulmapi.de"/>
    <meta property="og:description" content="Der OB-Mat ist ein Angebot von datalove ulm/OK Lab Ulm für die Oberbürgermeisterwahl 2015. Er ermöglicht es, zu ausgewählten Themen die eigenen Standpunkte mit denen der Listen abzugleichen, die zur Wahl antreten."/>
    
    <link href="css/yeti.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
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
    <p>Der OB-Mat ist ein technisches Hilfsmittel, das es ermöglicht, zu ausgewählten Themen die eigenen Standpunkte mit denen der Kandidat_innen abzugleichen, die zur Ulmer Oberbürgermeisterwahl 2015 antreten.</p>
    
    <p>Er ist selbstverständlich nur als Automat ohne Hirn zu verstehen und spricht keine Wahlempfehlungen aus.</p>

    <h2>Wann geht der OB-Mat „richtig“ online?</h2>
    <p>Bis zum <strong>22.10.</strong> suchen wir Fragen für einen vielseitigen und hoffentlich auch hinreichend polarisierenden Fragenkatalog, den wir den Kandidat_innen vorlegen werden. Am Wochenende des <strong>25.10.</strong> wird das <a href="http://www.ulmapi.de">Open Knowledge Lab Ulm</a> gemeinsam mit einer Auswahlkommission die eingereichten Fragen sichten und einen Fragenkatalog erarbeiten. Ab dem <strong>29.10.</strong> – also vier Wochen vor dem Wahltermin – wird der OB-Mat dann allen Interessierten zur Verfügung stehen!</p>

    <h2>Mitmachen!</h2>
    
    <p>Wir freuen uns über alle Einsendungen, um den Kandidat_innen einen möglichst vielfältigen Fragenkatalog zu allen Aspekten der Stadtpolitik vorlegen zu können! Einreichungen nehmen wir bis zum 22.10. per E-Mail an ob-mat 'at' ulmapi.de, <a href="http://twitter.com/ulmapi">über Twitter</a> (angesichts der Zeichenbegrenzung vielleicht nicht so sinnvoll) oder <a href="https://www.facebook.com/datalove.ulm">per Facebook-Message</a> entgegen!</p>

    <!-- <p>Für ihre Stellungnahmen zu den Thesen sind die Kandidat_innen selbst verantwortlich.</p>
    
    <p class="text-center"><a class="btn btn-large btn-primary" href="mahlowat.php" title="OB-Mat starten">Mit der Befragung beginnen!</a></p>-->
    
    <p class="text-center"><a href="faq.php" title="Fragen und Antworten"><small>Fragen und Antworten: FAQ</small></a></p>
    
    
    
    <div class="shariff" data-url="<?php echo $baseurl; ?>" data-referrer-track=null></div>
    <script src="shariff/shariff.min.js"></script>
  </div>

  
  </body>
</html>
