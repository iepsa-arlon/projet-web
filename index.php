<?php
include 'functions.php';

while ($choice != 1 && $choice != 2) {
    $choice = choice();
}

if ($choice == 1) {
    echo "Voici la liste des articles : ";
} elseif ($choice == 2) {
    $result = input();
    display($result);
}
