<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- meta référencement -->
    <meta name="description" content="Web Dev PHP : Conditions, requêtes GET">
    <meta name="author" content="Camile Ghastine">

    <title>Questionnaire de satisfaction du service client Amazin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <div class="container">

        <h1 class="mb-5">AMAZIN</h1>

        <h2>Questionnaire de satisfaction</h2>

        <?PHP
        if ($_GET == null) {
        ?>

            <!-- step 0 : A afficher uniquement au chargement de la page -->
            <p>Vous avez contacté notre service client et nous aimerions avoir votre avis sur la qualité de ce service</p>
            <p>Commencez le questionnaire : <a href="?step=1" role="button" class="btn btn-success">Commencer</a></p>

        <?PHP
        } elseif ($_GET['step'] === "1") {
        ?>

            <!-- Etape 1 : A afficher uniquement une fois que le boutton "Commencer" a été pressé -->
            <h2>Question 1</h2>
            <p>L'agent a-t-il été agréable ?</p>

            <a href="?step=2&result=2" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
            <a href="?step=2&result=0" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
            <a href="?step=2&result=1" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point -->

        <?PHP
        } elseif ($_GET['step'] === "2") {
        ?>

            <!-- Etape 2 : A afficher uniquement une fois que l'étape 1 a été résolue -->
            <h2>Question 2</h2>
            <p>L'agent a-t-il compris votre problème ?</p>
            <a href="?step=3&result=<?= $_GET['result'] + 2 ?>" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
            <a href="?step=3&result=<?= $_GET['result'] ?>" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
            <a href="?step=3&result=<?= $_GET['result'] + 1 ?>" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point -->

        <?PHP
        } elseif ($_GET['step'] === "3") {
        ?>

            <!-- Etape 3 : A afficher uniquement une fois que l'étape 2 a été résolue -->
            <h2>Question 3</h2>
            <p>L'agent a-t-il résolu votre problème ?</p>
            <a href="?step=5&result=<?= $_GET['result'] + 1 ?>" role="button" class="btn btn-success">oui</a> <!-- rapporte 1 point -->
            <a href="?step=4&result=<?= $_GET['result'] - 1 ?>&tel=" role="button" class="btn btn-danger">non</a> <!-- rapporte -1 point -->

        <?PHP
        } elseif ($_GET['step'] === "4") {
        ?>
            <!-- Etape 4 : A afficher uniquement si "non" a été répondu à l'étape 3 -->
            <p>Votre problème n'a pas été résolu.</p>
            <p>Pour être rappelé, entrez votre numéro de téléphone dans le clavier virtuel et validez :</p>
            <!-- Coder ici un clavier numérique permettant de saisir le numéro de téléphone -->

            <form action="" method="get">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon">tel</div>
                        <input type="tel" value="<?= $_GET['tel'] ?>" class="form-control" pattern="0[0-7]{1}[0-9]{8}" placeholder="" aria-label="Input group example" aria-describedby="btnGroupAddon" maxLength="10" required>
                    </div>
                    <div class="btn-group me-2" role="group" aria-label="First group">

                        <?php for ($i = 0; $i <= 9; $i++) { ?>

                            <a href="?step=4&result=<?= $_GET['result'] ?>&tel=<?= $_GET['tel'] . $i ?>" type="button" class="btn btn-secondary"><?= $i ?></a>

                        <?php } ?>

                        <a href="?step=4&count=<?= $_GET['result'] ?>&tel=<?= substr($_GET['tel'], 0, -1) ?>" role="button" class="btn btn-warning">Correction</a>
                        <a href="?step=4&count=<?= $_GET['result'] ?>&tel=" role="button" class="btn btn-success">Réinitialisation</a>
                    </div>
                </div>

                <!-- Afficher ici le numéro de téléphone qui s'affiche au fur et à mesure de la saisie-->
                <p>Votre numéro : #numéro de téléphone saisi#</p>
                <a href="?step=5&result=<?= $_GET['result'] ?>&tel=<?= $_GET['tel'] ?>" role="button" class="btn btn-warning">Ne pas être rappelé</a>
                <a href="?step=5&result=<?= $_GET['result'] ?>&tel=<?= $_GET['tel'] ?>" role="button" class="btn btn-success">Valider</a> <!-- Validation du numéro de téléphone -->
            </form>


        <?PHP
        } elseif ($_GET['step'] === "5") {
        ?>
            <!-- Etape finale : A afficher si "oui" a été répondu à la question 3 ou si l'étape 4 a été résolue -->
            <!-- <p class="mt-5">Merci pour votre notation :⭐⭐⭐⚫⚫ </p> le nombre d'étoiles représente le nombre de points cumulés -->


            <p class="mt-5">Merci pour votre notation :

                <?PHP

                $rate = $_GET['result'];
                if ($rate === -1) $rate = 0;
                while ($rate > 0) {
                    echo "⭐";
                    $rate--;
                }

                $rate = $_GET['result'];
                if ($rate === -1) $rate = 0;
                while ($rate < 5) {
                    echo "⚫";
                    $rate++;
                }

                ?>

            </p>

            <!-- Si un téléphone à été saisi, afficher "Vous serez rappelé très prochainement au #numéro de téléphone#" -->

            <p class="mt-5">
                <a href="?" role="button" class="btn btn-danger">Recommencer</a>
            </p>

        <?php
        }
        ?>

    </div>
</body>

</html>