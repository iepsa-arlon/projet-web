<?php
//include 'Article.php';
/**
 * Controller
 */
function choice(): void
{
    $menu = [
        "1" => "1.) Lire un article",
        "2" => "2.) Ecrire un article",
    ];

    echo "Que voulez-vous faire?<br>";
    foreach ($menu as $index => $action) {
        ?>
            <a href="index.php?action=<?= $index ?>"><?= $action ?></a>
        <?php
    }
}
//
///**
// * Controller
// *
// * @param array $liste_article
// * @return array
// */
//function redaction(array $liste_article): array
//{
//    $article = new Article();
//    echo "Entrez le titre de votre article : " . PHP_EOL;
//    while (empty($article->getTitre())) {
//        $article->setTitre(readline());
//    }
//
//    echo "Entrez votre article : " . PHP_EOL;
//
//    while (true) {
//        $line = fread(STDIN, 80);
//        if (empty(trim($line))) {
//            break;
//        }
//
//        $article->addContenu($line);
//    }
//
//    if (empty($article->getContenu())) {
//        echo "Un article sans contenu n'est pas un article valide." . PHP_EOL;
//        return [];
//    }
//
//    $liste_article[] = $article;
//
//    return $liste_article;
//}
//
///**
// * controller
// *
// * @param $liste_article
// */
//function choix_article(array $liste_article)
//{
//    if (empty($liste_article)) {
//        echo "Nous n'avons pas encore d'article, écrivez-en un !" . PHP_EOL;
//        echo "Appuyez sur une touche pour continuer" . PHP_EOL;
//        readline();
//        return;
//    }
//
//    echo "Voici la liste des articles : " . PHP_EOL;
//    /** @var  Article $article */
//    foreach ($liste_article as $index => $article) {
//        echo $index . ') - ' . $article->getTitre() . PHP_EOL;
//    }
//
//    echo "Quel article souhaitez-vous lire?
//        Entrez votre choix (index de l'article) : " . PHP_EOL;
//    $index = readline();
//    if (!array_key_exists($index, $liste_article)) {
//        echo "Nous n'avons pas cet article." . PHP_EOL;
//        return;
//    }
//
//    display_article($liste_article[$index]);
//}
//
///**
// * @param Article $article
// */
//function display_article(Article $article)
//{
//    echo "Article créé le :" . $article->getCreationDate();
//    echo "Titre: " . $article->getTitre() . PHP_EOL;
//    echo 'Votre article:' . PHP_EOL, $article->getContenu() . PHP_EOL;
//    echo "Appuyez sur une touche pour continuer" . PHP_EOL;
//    readline();
//}
//
//function suppressionArticle() {
//
//}
