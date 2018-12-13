<?php

function choice()
{
    echo "Que voulez-vous faire? 
    1.) Lire un article
    2.) Ecrire un article
    Entrez votre choix (1-2) : ";
    $line = readline();
    return $line;
}

function redaction($liste_article)
{
    echo "Entrez le titre de votre article : " .PHP_EOL;
    while (empty($article_title)) {
        $article_title = readline();
    }
    echo "Entrez votre article : " .PHP_EOL;
    $article_contenu = "";
    while (true) {
        $line = fread(STDIN, 80);
        if (empty(trim($line))) {
            break;
        }
        $article_contenu .= $line;
    }

    if (empty($article_contenu)) {
        echo "Un article sans contenu n'est pas un article valide." .PHP_EOL;
        return;
    }

    $liste_article[$article_title] = $article_contenu;

    return $liste_article;
}

function choix_article($liste_article)
{
    if (empty($liste_article)) {
        echo "Nous n'avons pas encore d'article, écrivez-en un !" .PHP_EOL;
        return;
    } else {
        echo "Voici la liste des articles : " .PHP_EOL;
        foreach($liste_article as $key=>$value)
        {
            echo $key .PHP_EOL;
        }
        echo "Quel article souhaitez-vous lire?
        Entrez votre choix (titre de l'article) : " .PHP_EOL;
        $article_title = readline();
        if (!array_key_exists($article_title, $liste_article)){
            echo "Nous n'avons pas cet article." .PHP_EOL;
            return;
        }
        display_article($article_title, $liste_article);
    }
}

function display_article($nom_article, $liste_article)
{
    echo 'Votre article:' .PHP_EOL, $liste_article[$nom_article] .PHP_EOL;
}
