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

    <!--
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

            <label for="exampleInputPhone">Phone</label>
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

        <!-- <div class="btn-group-horizontal">
            L'agent a-t-il été agréable ?
            <button type="button" class="btn btn-secondary">Button</button>
        </div> -->


        <legend>Was the agent nice?</legend>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios_1" id="optionsRadios_1_1" value="option_1_1" checked="">
                Yes<br>
                <input type="radio" class="form-check-input" name="optionsRadios_1" id="optionsRadios_1_2" value="option_1_2" checked="">
                No<br>
                <input type="radio" class="form-check-input" name="optionsRadios_1" id="optionsRadios_1_3" value="option_1_3" checked="">
                Without Notice
            </label>
        </div>

        <legend>Did the officer understand your problem?</legend>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios_2" id="optionsRadios_2_1" value="option_2_1" checked="">
                Yes<br>
                <input type="radio" class="form-check-input" name="optionsRadios_2" id="optionsRadios_2_2" value="option_2_2" checked="">
                No<br>
                <input type="radio" class="form-check-input" name="optionsRadios_2" id="optionsRadios_2_3" value="option_2_3" checked="">
                Without Notice
            </label>
        </div>

        <legend>Has the agent solved your problem?</legend>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios_3" id="optionsRadios_3_1" value="option_3_1" checked="">
                Yes<br>
                <input type="radio" class="form-check-input" name="optionsRadios_3" id="optionsRadios_3_2" value="option_3_2" checked="">
                No<br>
                <input type="radio" class="form-check-input" name="optionsRadios_3" id="optionsRadios_3_3" value="option_3_3" checked="">
                Without Notice
            </label>
        </div>

        <!--<div class="form-group">
            <label for="exampleSelect1">Example select</label>
            <select class="form-control" id="exampleSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>-->

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
    <!-- Back to topBlogRSSTwitterGitHubAPIDonate
Made by Thomas Park.

Code released under the MIT License.

Based on Bootstrap. Icons from Font Awesome. Web fonts from Google. -->

    <!-- 
        
    <div class="form-group">
        <fieldset disabled="">
            <label class="control-label" for="disabledInput">Disabled input</label>
            <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
        </fieldset>
    </div>

    <div class="form-group">
        <fieldset>
            <label class="control-label" for="readOnlyInput">Readonly input</label>
            <input class="form-control" id="readOnlyInput" type="text" placeholder="Readonly input here..." readonly="">
        </fieldset>
    </div>

    <div class="form-group has-success">
        <label class="form-control-label" for="inputValid">Valid input</label>
        <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
        <div class="valid-feedback">Success! You've done it.</div>
    </div>

    <div class="form-group has-danger">
        <label class="form-control-label" for="inputInvalid">Invalid input</label>
        <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
        <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
    </div>

    <div class="form-group">
        <label class="col-form-label col-form-label-lg" for="inputLarge">Large input</label>
        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="inputLarge">
    </div>

    <div class="form-group">
        <label class="col-form-label" for="inputDefault">Default input</label>
        <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
    </div>

    <div class="form-group">
        <label class="col-form-label col-form-label-sm" for="inputSmall">Small input</label>
        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="inputSmall">
    </div>

    <div class="form-group">
        <label class="control-label">Input addons</label>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>
        </div>
    </div>
-->
</body>

</html>