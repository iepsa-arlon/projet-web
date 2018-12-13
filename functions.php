<?php

function intro()
{
    echo "Hello! What is your article (enter below):\n";
}

function input()
{
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
        echo 'Your article:' . PHP_EOL, $result;
    }
}
