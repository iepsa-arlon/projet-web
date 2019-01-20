<?php
include 'functions.php';

echo "Bonjour!" .PHP_EOL;
if(!isset($_GET["action"])) {
    choice();
} else {
    $liste_article = [];
    $choice = $_GET["action"];
    if ($choice === "1") {
        choix_article();
    } elseif ($choice === "2") {
        redaction();
    } else {
        choice();
    }
}


