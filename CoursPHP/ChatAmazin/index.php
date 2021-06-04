<?php

// Get model
require('model/model.php');

// Verifying that the form is correct
/*if ($_POST['pseudo'] === "" || $_POST['content'] === "") {
    // die("necessary parameter");
    header("location: index.php");
} else {
    create($_POST['pseudo'], $_POST['content']);
}
*/

/* if (isset($_POST['submit'])) { */
/* if (isset($_POST)) { */
if (isset($_POST['submit'])) {
    if ($_POST['pseudo'] != "" && $_POST['content'] != "") {
        create($_POST['pseudo'], $_POST['content']);
    }
}

// Find the objects in the message table
$data = findAll();

// Display views
require('view/default.php');
