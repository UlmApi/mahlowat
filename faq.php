<?php 
	isset($_GET['from']) ? $back = $_GET['from'] : $back = "index.php";
	if($back != 'index.php' and substr($back, 0, 14) != 'multiplier.php' and substr($back, 0, 10) != 'result.php' and substr($back, 0, 12) != 'OB-Mat.php'){
		$back = "index.php";
	}
	
	$answerstring = '';
	if(isset($_POST['ans'])){
		$answerstring = $_POST['ans'];
	}
	
	$count = 'undefined';
	if(isset($_POST['count'])){
		$count = $_POST['count'];
	}
    
?>
<!DOCTYPE html>
<html>
  <head>
    <title>OB-Mat - FAQ</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta content="">
    <link href="css/yeti.min.css" rel="stylesheet" media="screen">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
  
  <script src="js/jquery-2.0.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/OB-Mat.js"></script>
  
  <div class="container mow-container" style="margin-top: 20px;">
      <a href="http://codefor.de"><img src="img/CFG_logo.svg" height="50px"></a> <a href="http://www.ulmapi.de"><img src="img/ulmapi.svg" height="50px"></a>
  <a href="/"><img class="pull-right" src="img/OB-Mat_logo.png" title="OB-Mat Logo"/></a>
	<p id="spruch" class="pull-right"></p>
    
    <h1>FAQ</h1>

    <h4>Wer macht den OB-Mat?</h4>
    <p>Der OB-Mat ist ein Angebot der datalove-Arbeitsgruppe bzw. des <a href="http://codefor.de/ulm">Open Knowledge Lab Ulm</a>, die auch hinter <a href="http://www.ulmapi.de">ulmapi.de</a> stecken. Das Projekt soll zur Meinungsbildung beitragen, ohne Partei zu ergreifen.</p>
    
    <h4>Wer hat die Thesen erarbeitet?</h4>
    <p>Die Thesen entstehen bis zum <strong>22. Oktober 2015</strong> und werden in einer Arbeitsgruppe rund um das OK Lab Ulm erarbeitet. Die genaue Personenzusammensetzung wird hier veröffentlicht, sobald sie feststeht.</p>
    
    <h4>Wo kommen die Positionen der Kandidat_innen her?</h4>
    <p>Den zur Wahl antretenden Kandidat_innen werden die Thesen mit der Bitte um Stellungnahme zugeleitet. Neben der reinen Positionierung (Zustimmung/Neutral/Ablehnung/Keine Stellungnahme) können sie ihre Position auch in einem kurzen Absatz erläutern.</p>
    <p>Für ihre Stellungnahmen zu den Thesen sind die Gruppen selbst verantwortlich.</p>
    
    <h4>Von welcher Wahl reden wir hier überhaupt?</h4>
    <p>Von der Oberbürgermeisterwahl Ulm 2015.</p>
    
    <h4>Wer hat das hier programmiert?</h4>
    <p>Der <a href="http://hszemi.de" title="hszemi.de" target="_blank">Sven</a>, weil der das kann. Die lokale technische Umsetzung wird von <a href="http://stefan.bloggt.es">Stefan Kaufmann</a> und <a href="http://twitter.com/namnatulco">Rens van der Heijden</a> betreut, die im OK Lab Ulm aktiv sind.</p>
    
    <h4>Funktioniert das hier wie das Vorbild der bpb?</h4>
    <p>Es wurde versucht, die Punkteberechnung so wie beim „echten“ W***-O-Mat zu gestalten, siehe nächste Frage/Antwort. Der W***-O-Mat ist eine eingetragene Marke der bpb, weswegen wir auf eine Namensnennung vorsichtshalber verzichten. Vergleichbare Angebote gibt es auch von den OK Labs in <a href="http://codefor.de/projekte/2015-09-05-bn-bonn-o-mat.html">Bonn</a> und in <a href="http://opendatal.de/2015/talomat-2-0/">Wuppertal</a>, die uns dankenswerterweise viel Input gegeben haben!</p>
    
    <h4>Wie werden die Punkte berechnet?</h4>
    <p>Die Antworten der Testperson (das bist du) werden mit den vorgegebenen Antworten der Gruppen abgeglichen.</p>
    <ul>
      <li>Stimmt die Antwort überein, werden der Gruppe 2 Punkte gutgeschrieben;</li>
      <li>Weicht die Antwort leicht ab (Zustimmung/Neutral oder Neutral/Ablehnung), wird der Gruppe 1 Punkt gutgeschrieben;</li>
      <li>Sind die Antworten entgegengesetzt oder hat eine Gruppe eine Frage nicht beantwortet, gibt es keine Punkte für die Gruppe.</li>
    </ul>
    <p>Eine Frage, die die Testperson übersprungen hat, wird nicht gewertet. Entsprechend gibt es dann insgesamt weniger Punkte zu erreichen.</p>
    <p>Eine Frage, die doppelt gewichtet werden soll, wird doppelt gewichtet, das heißt, für sie wird die doppelte Punktzahl gutgeschrieben (0/2/4). Entsprechend gibt es insgesamt mehr Punkte zu erreichen.</p>
    
    <h4>Werden meine Antworten gespeichert?</h4>
    <p>Vor der Auswertung wirst du gefragt, ob wir deine Antworten speichern dürfen.<br>
    Du kannst dann "Ja" auswählen, was bedeutet, dass wir deine Antwortkombination zusammen mit einer ID speichern, die aus deiner IP-Adresse und einem täglich wechselnden zufälligen Wert errechnet wird. Bereits am nächsten Tag kann dein Eintrag auf keinen Fall mehr einer konkreten IP-Adresse zugeordnet werden.<br>
    Wenn du "Nein" auswählst, wird lediglich ein Zähler um 1 erhöht.</p>
    
    <h4>Ich möchte gar nicht gezählt werden!</h4>
    <p>Unser Webserver legt bei jedem Seitenaufruf einen Log-Eintrag an, der unter anderem einen Zeitstempel, deine IP-Adresse und die aufgerufene URL enthält. Es wäre also unaufrichtig, dir vorzumachen, dass dein Aufruf des OB-Mat nicht gezählt wird. Der OB-Mat wurde jedoch so konzipiert, dass aus den Server-Logdateien nicht ersichtlich ist, welche Antworten du ausgewählt hast. Dies sehen wir tatsächlich nur, wenn du dem am Ende explizit zustimmst.</p>
    
    <h4>Ich habe einen Fehler gefunden!</h4>
    <p>Dann solltest du das melden. Wir freuen uns über sachdienliche Hinweise!</p>

    <a class="btn btn-primary" href="<?php echo $back; ?>" onclick="callPage(event, '<?php echo $back; ?>')" title="Zurück zum OB-Mat">Zurück zum OB-Mat</a>
  </div>


  <script type="text/javascript">
	$( document ).ready( function(){
		if(window.location.hash == '#log'){
			setTimeout(function() {
				$('#log').css("background-color","#ffff55");
			}, 1000);
		}
	} );
  
      function callPage(evt, action){
		evt.preventDefault();
		var html = "<input name='ans' value='<?php echo $answerstring;?>'/><input name='count' value='<?php echo $count; ?>'/>";
		$('<form style="display: none;" method="post"/>').attr('action', action).html(html).appendTo('body').submit();
	}
  </script>

  
  </body>
</html>
