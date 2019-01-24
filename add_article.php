<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ajoute de la merde</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Ajoute ton article !</h1>
    <h3>Fils de pute !</h3>
    <form action="article_post.php" method="post">
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" required name="titre" id="titre" placeholder="Ton titre de merde">
        </div>
        <div class="form-group">
            <label for="contenu">Ecris donc ta merde</label>
            <textarea class="form-control" name="contenu" required id="contenu" placeholder="Ton contenu de merde" rows="5"></textarea>
        </div>
        <button type="submit">Ajoute ta merde</button>
        <button><a href="index.php">Retour à la liste des billets</a></button>
    </form>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>