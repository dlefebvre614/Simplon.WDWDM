<?php
$start = '        <h1 class="mb-5">AMAZIN</h1>

<h2>Questionnaire de satisfaction</h2>

<!-- step 0 : A afficher uniquement au chargement de la page -->
<p>Vous avez contacté notre service client et nous aimerions avoir votre avis sur la qualité de ce service</p>
<p>Commencez le questionnaire : <a href="?step=1" role="button" class="btn btn-success">Commencer</a></p>
';

$step_1 = '        <!-- Etape 1 : A afficher uniquement une fois que le boutton "Commencer" a été pressé -->
<h2>Question 1</h2>
<p>L\'agent a-t-il été agréable ?</p>

<a href="?step=2&result=2" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
<a href="?step=2&result=0" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
<a href="?step=2&result=1" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point -->
';

$step_2 = '<!-- Etape 2 : A afficher uniquement une fois que l\'étape 1 a été résolue -->
<h2>Question 2</h2>
<p>L\'agent a-t-il compris votre problème ?</p>
<a href="?step=3&result=2" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
<a href="?step=3&result=1" role="button" class="btn btn-danger">non</a> <!-- rapporte 1 point -->
<a href="?step=3&result=0" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 0 point -->
';

$step_3 = '        <!-- Etape 3 : A afficher uniquement une fois que l\'étape 2 a été résolue -->
<h2>Question 3</h2>
<p>L\'agent a-t-il résolu votre problème ?</p>
<a href="?step=4&result=1" role="button" class="btn btn-success">oui</a> <!-- rapporte 1 point -->
<a href="?step=4&result=-1" role="button" class="btn btn-danger">non</a> <!-- rapporte -1 point -->
';

$step_4 = '        <!-- Etape 4 : A afficher uniquement si "non" a été répondu à l\'étape 3 -->
<p>Votre problème n\'a pas été résolu.</p>
<p>Pour être rappelé, entrez votre numéro de téléphone dans le clavier virtuel et validez :</p>
<!-- Coder ici un clavier numérique permettant de saisir le numéro de téléphone -->

<!-- Afficher ici le numéro de téléphone qui s\'affiche au fur et à mesure de la saisie-->
<p>Votre numéro : #numéro de téléphone saisi#</p>
<a href="?step=5&result=0" role="button" class="btn btn-success">Valider</a> <!-- Validation du numéro de téléphone -->

<!-- Etape finale : A afficher si "oui" a été répondu à la question 3 ou si l\'étape 4 a été résolue -->
<p class="mt-5">Merci pour votre notation :⭐⭐⭐⚫⚫ </p> <!-- le nombre d\'étoiles représente le nombre de points cumulés -->

<!-- Si un téléphone à été saisi, afficher "Vous serez rappelé très prochainement au #numéro de téléphone#" -->
';

$restart = '        <p class="mt-5">
<a href="?" role="button" class="btn btn-danger">Recommencer</a>
</p>
';

?>