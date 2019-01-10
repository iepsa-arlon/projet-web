<?php
include 'functions.php';

echo "Bonjour!" .PHP_EOL;
if(!isset($_GET["action"])) {
    choice();
} else {
    $liste_article = [];
    $choice = $_GET["action"];
    if ($choice === "1") {
        echo "choix article";
        //choix_article($liste_article);
    } elseif ($choice === "2") {
        echo "redaction article";
        //$liste_article = redaction($liste_article);
    } elseif ($choice === "3") {
        echo "wat";
    } else {
        echo "why?";
        choice();
    }
}


