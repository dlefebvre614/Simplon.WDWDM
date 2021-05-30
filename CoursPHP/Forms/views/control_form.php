<?php

// var_dump($_POST);

// Parcourir un tableau avec la boucle foreach
/* foreach ( $_POST as $key => $value ) {
    echo "<br>";
    echo $key . " : " . $value . "<br>";
}*/

// call for functions to be verified
//require('library/forms.inc.php');

?>

<p>Thank you for your rating: <?= calculRate($_POST['question1'] + $_POST['question2'] + $_POST['question3'], '⭐', '⚫', 5); ?></p>

<hr>

<?PHP
if (isset($_POST['recall']) && $_POST['question3'] === '-1') {
    echo 'We will call you back to the: ' . $_POST['Phone'];
}

?>