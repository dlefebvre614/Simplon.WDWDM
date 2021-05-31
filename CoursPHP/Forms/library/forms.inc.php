<?php

// Functions used in processing forms : DLE

// Function calculRate() Score calculation to display : DLE

// example of use : calculRate($_POST['question_1'] + $_POST['question_2'] + $_POST['question_3']), '⭐', '⚫', 5);

function calculRate(string $score, string $yes, string $no, int $size): string
{
    $rate = ''; // Initialization display string

    if ($score < 0) $score = 0; // deletion $score less than 0

    // do string $rate
    for ($i = 0; $i < $size; $i++) {
        if ($i < $score) {
            $rate .= $yes;
        } else {
            $rate .= $no;
        }
    }

    return $rate;
}

/*function checkForm(array $post, string $field, int $min, int $max): string
{
    $messageError = [];

    if ($field === '') {
        $field = 'Name';
        $messageError[$field] = "We'll never share your ' . $field . ' with anyone else."
    }

    if ($min == '') {
        $min = 3;
    }

    if ($max == '') {
        $max = 10;
    }

    if ($post[$field] === "" strlen($post[$field]) <= 2) {
        $messageError[$field] = 'Error ' . $field . ' !!!!';
    }

    return $messageError;
}*/
