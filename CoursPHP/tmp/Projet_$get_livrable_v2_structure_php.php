<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- meta référencement -->
    <meta name="description" content="Web Dev PHP : Conditions, requêtes GET">
    <meta name="author" content="Didier LEFEBVRE">

    <title>Questionnaire de satisfaction du service client Amazin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

<?php
var_dump($_GET);
echo "<hr>";
if ($_GET == null) {
    echo '<a href="?step=1">Commencer</a><br>';
}

if (isset($_GET['step']) && $_GET['step'] == '1') {
    echo '
    <h2>Question 1</h2>
        <p>L\'agent a-t-il été agréable ?</p>

        <a href="?step=2&point=2" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
        <a href="?step=2&point=0" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
        <a href="?step=2&point=1" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point -->
    ';
}



if (isset($_GET['step']) && $_GET['step'] == '2') {
    $sum = $_get['point'];
    echo '<!-- Etape 2 : A afficher uniquement une fois que l\'étape 1 a été résolue -->
    <h2>Question 2</h2>
    <p>L\'agent a-t-il compris votre problème ?</p>
    <a href="?step=3&point=' . (string)($sum + 2) . '" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
    <a href="?step=3&point=' . $sum + 1 . '" role="button" class="btn btn-danger">non</a> <!-- rapporte 1 point -->
    <a href="?step=3&point=' . $sum . '" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 0 point -->';
}


if (isset($_GET['step']) && $_GET['step'] == '3') {
    $sum = $_get['point'];
    echo '<!-- Etape 3 : A afficher uniquement une fois que l\'étape 2 a été résolue -->
    <h2>Question 3</h2>
    <p>L\'agent a-t-il résolu votre problème ?</p>
    <a href="step=4&point=' . $sum + 1 . '" role="button" class="btn btn-success">oui</a> <!-- rapporte 1 point -->
    <a href="step=4&point=' . $sum - 1 . '" role="button" class="btn btn-danger">non</a> <!-- rapporte -1 point -->';
}

if (isset($_GET['step']) && $_GET['step'] == '4') {
    echo '<!-- Etape 4 : A afficher uniquement si "non" a été répondu à l\'étape 3 -->
    <p>Votre problème n\'a pas été résolu.</p>
    <p>Pour être rappelé, entrez votre numéro de téléphone dans le clavier virtuel et validez :</p>
    <!-- Coder ici un clavier numérique permettant de saisir le numéro de téléphone -->
    
    <!-- Afficher ici le numéro de téléphone qui s\'affiche au fur et à mesure de la saisie-->
    <p>Votre numéro : #numéro de téléphone saisi#</p>
    <a href="" role="button" class="btn btn-success">Valider</a> <!-- Validation du numéro de téléphone -->
    
    <!-- Etape finale : A afficher si "oui" a été répondu à la question 3 ou si l\'étape 4 a été résolue -->
    <p class="mt-5">Merci pour votre notation :⭐⭐⭐⚫⚫ </p> <!-- le nombre d\'étoiles représente le nombre de points cumulés -->
    
    <!-- Si un téléphone à été saisi, afficher "Vous serez rappelé très prochainement au #numéro de téléphone#" -->
    
    <p class="mt-5">
        <a href="" role="button" class="btn btn-danger">Recommencer</a>
    </p>';
}

?>

</body>

</html>