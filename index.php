<?php
include 'functions.php';
include 'class.php';
system(clear);
$STDIN = fopen('php://stdin', 'rb');
$tabArticle = array();
$x = 0;

do {
    $nope = 0; // Boolean qui permet de sortir d'une option
    $choice = menuPrincipal($tabArticle,$x);

    switch ($choice) {
        case 1: //Ajouter un article
            $x++;
            system(clear);
            //clearStdin();
            $tabArticle[$x-1] = nouvelArticle();
            break;

        case 2: //Consulter un article
            if ($tabArticle == null)
            {
                echo '==>Pas d\'article a consulter.' . PHP_EOL;
                break;
            }

            do {
                echo 'Entrez le numero de l\'article a consulter (de 1 a '.$x.') ou touche Entrer pour annuler : ';
                $numero = fread($STDIN, 80);
                if (empty(trim($numero))) {
                    $nope = 1;
                    break;
                }
                if ($numero <= 0 || $numero > $x)
                {
                    echo PHP_EOL . 'Veuillez enter un numero correct, ou appuyez sur entrer pour annuler.' . PHP_EOL;
                }
                else break;
            }while(1);
            if ($nope) break;

            afficherArticle($tabArticle[$numero-1]);
            break;

        case 3: //Modifier un article
            if ($tabArticle == null)
            {
                echo '==>Pas d\'article a modifier.' . PHP_EOL;
                break;
            }

            do {
                echo 'Entrez le numero de l\'article a modifier (de 1 a '.$x.') ou touche Entrer pour annuler : ';
                $numero = fread($STDIN, 80);
                if (empty(trim($numero))) {
                    $nope = 1;
                    break;
                }
                if ($numero <= 0 || $numero > $x)
                {
                    echo PHP_EOL . 'Veuillez enter un numero correct, ou appuyez sur entrer pour annuler.' . PHP_EOL;
                }
                else break;
            }while(1);
            if($nope) break;

            system(clear);
            //clearStdin();
            $tabArticle[$numero] = modifierArticle($tabArticle[$numero-1]);
            break;

        case 4: //Supprimer un article
            if ($tabArticle == null)
            {
                echo '==>Pas d\'article a supprimer.' . PHP_EOL;
                break;
            }

            do {
                echo 'Entrez le numero de l\'article a supprimer (de 1 a '.$x.') ou touche Entrer pour annuler : ';
                $numero = fread($STDIN, 80);
                if (empty(trim($numero))) {
                    $nope = 1;
                    break;
                }
                if ($numero <= 0 || $numero > $x)
                {
                    echo PHP_EOL . 'Veuillez enter un numero correct, ou appuyez sur entrer pour annuler.' . PHP_EOL;
                }
                else break;
            }while(1);
            if($nope) break;


            unset($tabArticle[$numero-1]);
            $tabArticle = array_values($tabArticle);
            $x--;
            break;

        case 5: //Quitter le programme
            return 0;
    }
} while (1);

/*
menuPrincipal();
intro();
$result = input();
display($result);
/*
/*
$STDIN = fopen('php://stdin', 'rb');

$strName = "";

echo "Entrer l'article : " . PHP_EOL;

while (true) {
    $line = fread( $STDIN, 80 );
    if (empty(trim($line))) {
        break;
    }
    $strName .= $line;
}
echo 'Votre article : ' . PHP_EOL, $strName . PHP_EOL;

*/