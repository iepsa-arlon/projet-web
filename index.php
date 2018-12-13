<?php
include 'functions.php';

echo "Bonjour!" .PHP_EOL;

while(true) {
    while ($choice != 1 && $choice != 2) {
        $choice = choice();
    }

    if ($choice == 1) {
        $article_titre = choix_article($liste_article);
    } elseif ($choice == 2) {
        $liste_article = redaction($liste_article);
    }
    $choice = 0;
}
