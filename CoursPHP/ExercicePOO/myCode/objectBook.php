<?php

/**
 * Exercice 2
 */

// Ecrire du code ici

$book = new Book();

$book->setTitle('Chroniques du monde émergé');
$book->setAuthor('Licia Troisi');
$book->setGenre('Heroic fantasy');
$book->setDescription('Chroniques du monde émergé (titre original : Cronache del Mondo Emerso) est une trilogie de romans de fantasy de Licia Troisi. La trilogie comprend Nihal de la Terre du Vent, La Mission de Sennar et Le Talisman du pouvoir. Elle raconte l\'histoire de Nihal, demi-elfe orpheline dont le peuple a été exterminé par un mage noir, le Tyran.');
//$book->setdateinstanciation





/**
 * Exercice 4
 */

// Ecrire du code ici
require '../Model/Entity/Book.php';

$manga = new Manga();

$manga->settitle('Hunter X Hunter');
$manga->setauthor('Yoshihiro Togashi');
$manga->setillustrateur('Yoshihiro Togashi');
$manga->setgenre('Shōnen');
$manga->setdescription('Gon Freecss a douze ans, et rêve de devenir hunter. Les hunters sont des aventuriers d\'élite qui peuvent être chasseurs de prime, chefs-cuisinier, archéologues, zoologues, justiciers ou consultants dans divers domaines.');
