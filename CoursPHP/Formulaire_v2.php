<!DOCTYPE html>
<html lang="en">

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

    <!-- Exercice :
    Nom*
    Prénom*
    Numéro de téléphone*
    Date de l'achat *
    L'agent a-t-il été agréable ? * → oui (2 points), non (0 point), sans avis (1 point)
    L'agent a-t-il compris votre problème ? * → oui (2 points), non (0 point), sans avis (1 point)
    L'agent a-t-il résolu votre problème ? * → oui (1points), non (-1point)
    Dites-nous en plus :
    Acceptez vous d'être rappelé (case à cocher)
    -->

    <form action="" method="get">

        <legend>Identity</legend>

        <div class="form-group">
            <label for="fname">First name:</label>
            <input type="text" class="form-control" id="exampleInputFname" aria-describedby="FnameHelp" placeholder="Enter your First Name">
            <small id="FnameHelp" class="form-text text-muted">We'll never share your First Name with anyone else.</small>

            <label for="fname">Last name:</label>
            <input type="text" class="form-control" id="exampleInputLname" aria-describedby="LnameHelp" placeholder="Enter your Last Name">
            <small id="LnameHelp" class="form-text text-muted">We'll never share your Last Name with anyone else.</small>

            <label for="exampleInputPhone">Phone:</label>
            <input type="tel" class="form-control" id="exampleInputPhone" aria-describedby="phoneHelp" placeholder="Enter Phone Number">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
        </div>

        <legend>Date of purchase</legend>

        <div class="form-group">
            <label for="exampleInputDate">Date of purchase</label>
            <input type="date" class="form-control" id="exampleInputDate" aria-describedby="DateHelp" placeholder="Enter Date of purchase">
            <small id="DateHelp" class="form-text text-muted">We'll never share your Date of purchase with anyone else.</small>
        </div>

        <legend>Satisfaction investigation</legend>

        <legend>Was the agent nice?</legend>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios_1" id="optionsRadios_1_1" value="option_1_1" checked="">
                YES<br>
                <input type="radio" class="form-check-input" name="optionsRadios_1" id="optionsRadios_1_2" value="option_1_2" checked="">
                NO<br>
                <input type="radio" class="form-check-input" name="optionsRadios_1" id="optionsRadios_1_3" value="option_1_3" checked="">
                Without Notice
            </label>
        </div>

        <legend>Did the officer understand your problem?</legend>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios_2" id="optionsRadios_2_1" value="option_2_1" checked="">
                YES<br>
                <input type="radio" class="form-check-input" name="optionsRadios_2" id="optionsRadios_2_2" value="option_2_2" checked="">
                NO<br>
                <input type="radio" class="form-check-input" name="optionsRadios_2" id="optionsRadios_2_3" value="option_2_3" checked="">
                Without Notice
            </label>
        </div>

        <legend>Has the agent solved your problem?</legend>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios_3" id="optionsRadios_3_1" value="option_3_1" checked="">
                YES<br>
                <input type="radio" class="form-check-input" name="optionsRadios_3" id="optionsRadios_3_2" value="option_3_2" checked="">
                NO<br>
                <input type="radio" class="form-check-input" name="optionsRadios_3" id="optionsRadios_3_3" value="option_3_3" checked="">
                Without Notice
            </label>
        </div>

        <fieldset class="form-group">
            <legend>Tell us more:</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="" checked="">
                    Accept to be recalled (checkbox)
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>

    </form>

</body>

</html>