<?php


// Exercice 1 : afficher le plus petit nombre
$a = 10;
$b = 20;

if ($a < $b) {
    echo $a . ' est plus petit que ' . $b;
} else {
    echo $b . ' est plus petit que ' . $a;
}

echo "<hr>";

// Exercice 2 : afficher la table de 9 (opération + résultat)

for ($i = 0; $i < 11; $i++) {
    echo '9 x ' . $i . ' = ' . $i * 9 . '<br>';
}

echo "<hr>";

// Exercice 3 : compter à rebours

for ($i = 10; $i > -1; $i--) {
    echo '9 x ' . $i . ' = ' . $i * 9 . '<br>';
}


echo "<hr>";

// Exercice 4 : Ecrire une boucle qui produit une ligne horizontale de 8 étoiles

// Ecrire le code ici

echo "<hr>";

// Exercice 5 : Afficher un figure de 8 étoiles sur 8.

// Ecrire le code ici

echo "<hr>";

// Exercice 6 : Ecrire une fonction (utilisant une boucle) qui remplace tout les espaces d'une phrase par un underscore
// indice : si $mot = "jouet" alors $mot[0] = "j", $mot[1] = "o", ... 
// indice : chercher sur google une fonction qui renvoie la longueur d'une chaine de caractères

// Ecrire le code ici

// trouver sur google son équivalant clef en main.
echo "<hr>";

// Exercice 7 : Ecrire une fonction (utilisant une boucle) qui inverse et affiche l'ordre des lettres d'un mot

// Ecrire le code ici

// trouver sur google son équivalant clef en main.
echo "<hr>";




// Exercice 8: Ecrire une fonction qui supprime les espaces et met la phrase en camelCase
// Interdit d'utiliser les fonctions suivantes : ucwords() et str_replace().
$sentence = "le chat est mort"; //devient : leChatEstMort

// Ecrire le code ici

// Réécrire la fonction en utilisant les fonctions interdites