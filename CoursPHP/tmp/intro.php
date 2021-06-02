<?php
// php -S localhost:8000 dans le terminal
echo 3 + 4;
echo "<br>";

// variable différents types, nom valeur type
$var1 = 2; // integer
$var2 = "Hello !"; // chaine
$var3 = true; // boolean

echo $var1, "<br>", $var2, "<br>", $var3;

// var_dump() permet d'afficher le type des variables
//var_dump();
//die();

$nom = "LEFEBVRE";
$prenom = "Didier";

echo "je suis " . $prenom . $nom;
echo "je suis $prenom" . $nom;
