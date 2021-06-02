<!-- header factoring bootstrap DLE -->
<?php include("layout/header.inc.php"); ?>

<!-- Barnav DLE -->
<?php include("views/dev_nav.php"); ?>

<div class="bs-component">
    <?PHP
    // call for functions to be verified
    require('library/forms.inc.php');

    // var_dump($_POST);

    // Routeur
    if ($_POST === []) {
        include("views/form_satisfaction.php");
    } elseif (strlen($_POST['Fname']) < 3 || strlen($_POST['Lname']) < 3 || strlen($_POST['Phone']) < 10) {
        include("views/form_satisfaction.php");
    } else {
        include("views/control_form.php");
    }

    ?>
</div>


<!-- footer factor's : DLE -->
<?php include("layout/footer.inc.php"); ?>