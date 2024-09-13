<?php

$NLijst = [42, 67, 35, 89, 24, 76, 58, 93, 7, 30, 83, 46, 13, 25, 98, 53, 17, 79, 57, 8];
$Nant = [
    "Even" => 0,
    "Oneven" => 0
];

foreach ($NLijst as $i){ 
    if ($i % 2 == 0){
        $Nant['Even'] += 1;
    } else {
        $Nant['Oneven'] += 1;
    }
}

echo "Even aantal is: " . $Nant["Even"] . "\n";
echo "Oneven aantal is: " . $Nant["Oneven"] . "\n";