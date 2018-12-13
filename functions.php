<?php
/*
 * intro smthng
 */
function intro()
{
    echo "Entrer l'article : " . PHP_EOL;
}

/*
 * Fonction de "nettoyage" de l'ecran
 *
 * Ne marche pas super...
 */
function clearStdin()
{
    for ($i = 0; $i < 50; $i++) echo "\r\n";
}

/*
 * Take input from interface
 *
 * @return string
 */
function input(): string
{
    $STDIN = fopen('php://stdin', 'rb');
    $strText = "";


    while (true) {
        $line = fread($STDIN, 80);
        if (empty(trim($line))) {
            break;
        }
        $strText .= $line;
    }
    return $strText;
}

/*
 * Display smthng
 */
function display(string $t_result)
{
    system(clear);
    //clearStdin();
    echo 'Votre article : ' . PHP_EOL, $t_result . PHP_EOL;
}


/*
 * Affichage du menu principale
 *
 * ->Reclame un tableau d'objets Article et la taille de ce tableau
 * pour pouvoir afficher la liste des articles
 *
 * ->Affiche les options de l'utilisateur
 *
 * @return le choix de l'utilisateur
 *
 */
function menuPrincipal($_tabArticle, $_taille)
{
    $STDIN = fopen('php://stdin', 'rb');

    echo PHP_EOL;
    echo 'NewYorkTimes du futur' . PHP_EOL;
    echo '*********************' . PHP_EOL;
    echo 'Articles en ligne : ' . PHP_EOL;

    for ($x = 0; $x < $_taille; $x++) {
        echo '---> ' . ($x + 1) . ': ' . $_tabArticle[$x]->get_title();
    }
    echo PHP_EOL;
    echo '1. Ajouter un article' . PHP_EOL;
    echo '2. Consulter un article' . PHP_EOL;
    echo '3. Modifier un article' . PHP_EOL;
    echo '4. Supprimer un article' . PHP_EOL;
    echo '5. Quitter' . PHP_EOL;
    echo PHP_EOL;
    echo 'Selectionnez votre choix : ';
    $choice = fread($STDIN, 80);

    return $choice;

}

/*
 * Introduction d'un nouvel article
 *
 * Demande l'introduction d'un titre et du texte qui sont stockés dans
 * des variables d'interface, créer un objet Article avec ces dernières.
 *
 * @return l'objet Article
 */
function nouvelArticle()
{
    $STDIN = fopen('php://stdin', 'rb');

    echo 'Titre de l\'article : ';
    $titre = fread($STDIN, 80);
    echo PHP_EOL;
    echo 'Entrez votre article : ' . PHP_EOL;
    $text = input();

    $nouvelArticle = new Article($titre, $text);

    return $nouvelArticle;
}

/*
 * Modification d'un Article
 *
 * Réclame un objet article
 *
 * @return Obj Article après modification
 */
function modifierArticle($_article)
{
    $STDIN = fopen('php://stdin', 'rb');

    echo 'Titre de l\'article : ';
    $titre = fread($STDIN, 80);
    echo PHP_EOL;
    echo 'Entrez votre article : ' . PHP_EOL;
    $text = input();

    $_article->set_title($titre);
    $_article->set_text($text);

    return $_article;
}

/*
 * Affichage d'un article
 *
 * Reclame un argument de type Article
 */
function afficherArticle($_article)
{
    $STDIN = fopen('php://stdin', 'rb');
    system(clear);
    //clearStdin();
    echo 'Titre : ' . $_article->get_title() . PHP_EOL . PHP_EOL;
    echo $_article->get_text() . PHP_EOL;
    $AnyKey = fread($STDIN, 80);
}