<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('DELETE FROM billets WHERE id = ?');
$req->execute(array($_GET['billet']));

header('Location: index.php');
?>