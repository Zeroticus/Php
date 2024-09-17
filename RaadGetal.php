<?php

$N = readline("Wat is het hoogst mogelijke getal? ");
$Counter = 0;
$Raadnmr = rand(0,$N);

do {
    $Raad = readline("Raad het getal: ");
    if ($Raad == $Raadnmr) {
        echo "Jij wint";
        break;
    } else {
        $Counter ++;
        echo "Dat is fout probeer het nog eens"."\n";
    }
}while ($Counter < 10);
if ($Counter == 10) {
    echo "Helaas je verliest het nummer was: "."$Raadnmr";
}

// Z