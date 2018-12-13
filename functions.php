<?php

function choice()
{
    echo "Bonjour! Que voulez-vous faire? 
    1.) Lire un article
    2.) Ecrire un article
    Entrez votre choix (1-2) : ";
    $line = readline();
    return $line;
}

function input()
{
    echo "Entrez votre article : " .PHP_EOL;
    $strName = "";
    while (true) {
        $line = fread(STDIN, 80);
        if (empty(trim($line))) {
            break;
        }

        $strName .= $line;
    }
    return $strName;
}

function display($result)
{
    if (empty(trim($result))) {
        echo "Ah bah bravo, feignant!";
    } else {
        echo 'Votre article:' .PHP_EOL, $result;
    }
}
