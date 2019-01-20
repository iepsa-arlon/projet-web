<?php
session_start();
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

/**
 * Controller
 *
 * @param array $liste_article
 * @return array
 */
function redaction()
{
    ?>
        <form method="post">
            <label>Titre:</label>
            <input type="text" name="titre">
            <br>
            <label>Contenu:</label>
            <br>
            <textarea name="contenu"></textarea>
            <button type="submit">Envoyer</button>
        </form>
        <a href="index.php">Retour à l'accueil</a>
    <?php
    if(isset($_POST["titre"]) && isset($_POST["contenu"])) {
        include('Article.php');
        $article = new Article();
        $article->setTitre($_POST["titre"]);
        $article->setContenu($_POST["contenu"]);
        $_SESSION[$article->getTitre()] = $article->getContenu();
    ?>
        <p>Voici votre article:</p>
        <h2><?= $article->getTitre(); ?></h2>
        <p><?= $article->getContenu(); ?></p>
    <?php
    }
}

/**
 * controller
 */
function choix_article()
{
    if (empty($_SESSION)) {
        echo "Nous n'avons pas encore d'article, écrivez-en un !" . PHP_EOL;
        echo '<a href="index.php">Retour à l\'accueil</a>';
    }

    echo "Voici la liste des articles : <br/>";
    foreach ($_SESSION as $titre => $contenu) {
        ?><br/><a href="index.php?action=1&titre=<?=$titre;?>"><?=$titre;?></a><br/><?php
    }

    if (isset($_GET["titre"])) {
        echo "Voici l'article:";
        $article = $_SESSION[$_GET["titre"]];

        ?>
            <br/>
                <?= $article; ?>
            <br/>
        <?php
    }
    echo '<br/><a href="index.php">Retour à l\'accueil</a>';
}
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
