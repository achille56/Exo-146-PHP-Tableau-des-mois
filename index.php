<?php

// Exo 1
$arrayMonth = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre",
    "novembre", "decembre"];

echo "<br><br>";
// Exo 2
echo $arrayMonth[2];

echo "<br><br>";
// Exo 3
echo $arrayMonth[4];

echo "<br><br>";
// Exo 4
echo $arrayMonth[7] = "août";

echo "<br><br>";
// Exo 5
$arrayAss = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "80" => "Somme"];

echo "<br><br>";
// Exo 6
echo $arrayAss["59"];

echo "<br><br>";
// Exo 7
echo $arrayAss["51"] = "Reims";
echo "<br>";
echo $arrayAss["13"] = "Marseille";
echo "<br>";
print_r($arrayAss);

echo "<br><br>";
// Exo 8
foreach ($arrayMonth as $value) {
    echo ($value . "\n");
}

echo "<br><br>";
// Exo 9
print_r($arrayAss);


echo "<br><br>";
// Exo 10
foreach ($arrayAss as $key => $value) {
    echo "Le département " . $value . " a le numéro " . $key ."<br>";
}




