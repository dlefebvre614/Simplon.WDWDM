<?php

// Exercice : Ecrire une fonction qui supprime les espaces et met la phrase en camelCase
// $sentence = "le chat est mort" //devient : leChatEstMort
// indice : si $mot = "jouet" alors $mot[0] = "j", $mot[1] = "o", ... 
// indice : chercher sur google une fonction qui renvoie la longueur d'une chaine de caractères (nombre de caractère)

// Obtenir la longueur de la chaîne PHP Utilisez la fonction strlen () 
//pour mesurer la longueur de la chaîne en octets en PHP Utilisez la fonction mb_strlen () 
//pour mesurer la longueur de la chaîne en octets en PHP


$sentence = "le chat est mort";
echo ("The string length in bytes is: ");
echo (strlen($sentence));
echo '<br>';

// The string length in bytes is: 17

//Nous pouvons également utiliser la fonction mb_strlen() pour obtenir la longueur de la chaîne en octets. Mais elle est moins efficace que la fonction strlen(). La syntaxe correcte pour utiliser cette fonction est la suivante.

// -> mb_strlen($string, $encoding);

// Cette fonction a deux paramètres. Le détail de son paramètre est le suivant.

// Variables	Description
// $string	    C’est la chaîne de caractères dont la longueur sera renvoyée par la fonction.
// $encoding	C’est le codage que nous avons utilisé pour notre chaîne de caractères car les différents systèmes de codage ont des tailles différentes.
// Cette fonction retourne la longueur de la chaîne. Le programme ci-dessous montre comment nous pouvons utiliser la fonction mb_strlen() pour obtenir la longueur de la chaîne PHP.

echo ("The string length in bytes is: ");
echo (mb_strlen($sentence));
echo '<br>';

// The string length in bytes is: 17

// Comment vérifier si une chaîne commence par une chaîne spécifiée en PHP

// Utiliser la fonction substr() pour vérifier si une chaîne commence par une chaîne spécifiée en PHP
// Utilisation de la fonction strpos() pour vérifier si une chaîne commence par une chaîne spécifiée en PHP
// Utilisation de la fonction strncmp() pour vérifier si une chaîne commence par une chaîne spécifiée en PHP

// Utilisation de la fonction substr()
// Utilisation de la fonction strpos()
// Utilisation de la fonction strncmp()

// Utiliser la fonction substr() pour vérifier si une chaîne commence par une chaîne spécifiée en PHP

// La fonction intégrée substr() est utilisée pour accéder à une sous-chaîne. La chaîne est passée en entrée et la sous-chaîne à laquelle nous voulons accéder est retournée. Nous pouvons utiliser cette fonction pour vérifier si une chaîne commence par une chaîne spécifique. La syntaxe correcte pour utiliser cette fonction est la suivante

// -> substr($string, $startPosition, $lengthOfSubstring);

// Cette fonction a trois paramètres. Les détails de ses paramètres sont les suivants.

// Paramètres	                    La description
// $string	            obligatoire	La chaîne d’origine dont nous souhaitons accéder à la sous-chaîne.
// $startPosition	    obligatoire	Une variable entière. Il indique la position où commencera notre sous-chaîne.
//                                  S’il est positif, alors notre sous-chaîne commence du côté gauche de la chaîne, c’est-à-dire depuis le début.
//                                  S’il est négatif, alors notre sous-chaîne commence à la fin.
// $lengthOfSubstring	optionnel	Une variable entière. Il indique la longueur totale de la chaîne à partir de la position de départ.
//                                  S’il est omis, la sous-chaîne de la position de départ à la fin de la chaîne est renvoyée.
//                                  S’il est négatif, la chaîne de fin est supprimée en fonction de sa valeur. S’il est nul, une chaîne vide est renvoyée.


if (substr($sentence, 0, 3) === "le") {
    echo "The string starts with the desired substring.";
} else
    echo "The string does not start with the desired substring.";

echo '<br>';

// -> substr($string, 0, 3);

// 0 est l’indice de début de la sous-chaîne, ou en d’autres termes, la sous-chaîne commence à partir du premier caractère de la chaîne donnée.
// 3 signifie que la longueur de la sous-chaîne retournée est 3.
// Si le début de la chaîne est le même que Mr., il affichera La chaîne commence par la sous-chaîne souhaitée.

// The string starts with the desired substring.

// Utilisation de la fonction strpos() pour vérifier si une chaîne commence par une chaîne spécifiée en PHP

// La fonction strpos() retourne la position de la première occurrence d’une sous-chaîne dans la chaîne donnée. Nous pourrions l’utiliser pour vérifier si une chaîne commence par une chaîne spécifiée.

// La fonction strpos() retourne la position de la première occurrence d’une sous-chaîne dans la chaîne donnée. Nous pourrions l’utiliser pour vérifier si une chaîne commence par une chaîne spécifiée.

// -> strpos($string, $searchString, $startPosition);

// Il a trois paramètres. Les détails de ses paramètres sont les suivants.

// Paramètre	                La description
// $string	        obligatoire	C’est la chaîne dont nous souhaitons trouver la sous-chaîne.
// $searchString	obligatoire	C’est la sous-chaîne qui sera recherchée dans une chaîne.
// $startPosition	optionnel	Il s’agit de la position dans la chaîne à partir de laquelle la recherche commencera.

if (strpos($sentence, "le") === 0) {
    echo "The string starts with the desired substring.";
} else
    echo "The string does not start with the desired substring.";

echo '<br>';

// Ici, nous avons vérifié si notre chaîne commence par Mr. en trouvant la première occurrence de Mr..

// Production:

// The string starts with the desired substring.

// Utilisation de la fonction strncmp() pour vérifier si une chaîne commence par une chaîne spécifiée en PHP

// La fonction intégrée strncmp() compare deux chaînes données. Cette fonction est également sensible à la casse. La syntaxe correcte pour utiliser cette fonction est la suivante.

// -> strncmp($string1, $string2, $length);

// Il a trois paramètres. Les détails de ses paramètres sont les suivants.

// Paramètres	            La description
// $string1	obligatoire	    C’est la première chaîne à comparer.
// $string2	obligatoire	    C’est la deuxième chaîne à comparer.
// $length	obligatoire	    C’est la longueur de la chaîne à comparer.

// Il retourne zéro si les deux chaînes sont égales. Il s’agit d’une fonction sensible à la casse.

if (strncmp($sentence, "le ", 3) === 0) {
    echo "The string starts with the desired substring.";
} else
    echo "The string does not start with the desired substring.";

echo '<br>';

// Ici, les deux chaînes sont comparées. La longueur des chaînes à comparer est de trois.

// Production:

// The string starts with the desired substring.

// La version insensible à la casse de strncmp est strncasecmp. Il compare les n premiers caractères des deux chaînes données quel que soit leur cas.


if (strncasecmp($sentence, "le ", 3) === 0) {
    echo "The string starts with the desired substring.";
} else
    echo "The string does not start with the desired substring.";

echo '<br>';
    
// Production:

// The string starts with the desired substring.
