<?php
$css = Array();
$css[0] = "bootstrap.min.css";
$css[1] = "cerulean.min.css";
$css[2] = "cosmo.min.css";
$css[3] = "cyborg.min.css";
$css[4] = "darkly.min.css";
$css[5] = "flatly.min.css";
$css[6] = "journal.min.css";
$css[7] = "lumen.min.css";
$css[8] = "paper.min.css";
$css[9] = "readable.min.css";
$css[10] = "sandstone.min.css";
$css[11] = "simplex.min.css";
$css[12] = "slate.min.css";
$css[13] = "spacelab.min.css";
$css[14] = "superhero.min.css";
$css[15] = "united.min.css";
$css[16] = "yeti.min.css";
$css_id = 15;
if(isset($_GET['css'])){
    $css_id = intval($_GET['css']);
    if($css_id < 0 || $css_id > 16){
        $css_id = 0;
    }
}
