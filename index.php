<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Merdophiland</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
    <h1>Mon blog de merde !</h1>
    <p>Les dernières merdes produites :</p>

    <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC');
?>
    <ul class="list-group">
<?php
    while ($donnees = $req->fetch())
    {
        ?>
        <a href="article.php?billet=<?php echo $donnees['id']; ?>"
           style="
           color:yellow;
           font-weight:bold;"
        >
            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                <?php echo htmlspecialchars($donnees['titre']); ?>
                <a href="delete.php?billet=<?php echo $donnees['id']; ?>">
                    &#128465;
                </a>
            </li>
        </a>
        <?php
    }
    $req->closeCursor();
    ?>
        <a href="add_article.php"><li class="list-group-item d-flex list-group-item-action justify-content-between align-items-center active" style="margin-top:15px;">Ajoute un article FDP &#128405;</li></a>
    </ul>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>