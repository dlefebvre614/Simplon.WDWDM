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
    <div class="container">

        <h1> Amazin</h1>

        <form class="mb-5" method="POST" action="?">

            <fieldset class="form-group">
                <legend>Satisfaction investigation</legend>


                <?PHP // Treatment of the first name
                //var_dump($_POST);
                if ($_POST === []) {
                ?>

                    <div class="form-group">
                        <label for="Fname">First Name</label>
                        <input type="text" class="form-control" name="Fname" id="Fname" aria-describedby="FnameHelp" placeholder="Enter your First Name">
                        <small id="FnameHelp" class="form-text text-muted">We'll never share your First Name with anyone
                            else. (First Name must be between 3 and 20 characters)</small>
                    </div>

                <?PHP
                } elseif (strlen($_POST['Fname']) < 3) {
                ?>

                    <div class="form-group has-danger">
                        <label class="Fname" for="Fname">First Name</label>
                        <input type="text" value="<?= $_POST['Fname'] ?>" class="form-control is-invalid" name="Fname" id="Fname" aria-describedby="FnameHelp" placeholder="Enter your First Name">
                        <div class="invalid-feedback">Sorry, first name must be between 3 and 20 characters</div>
                    </div>

                <?PHP
                } else {
                ?>

                    <div class="form-group">
                        <label for="Fname">First Name</label>
                        <input type="text" class="form-control" value="<?= $_POST['Fname'] ?>" name="Fname" id="Fname" aria-describedby="FnameHelp" placeholder="Enter your First Name">
                        <small id="FnameHelp" class="form-text text-muted">We'll never share your First Name with anyone
                            else. (First Name must be between 3 and 20 characters)</small>
                    </div>

                <?PHP
                }
                if ($_POST == []) {
                ?>
                    <div class="form-group">
                        <label for="Lname">Last Name</label>
                        <input type="text" class="form-control" name="Lname" id="Lname" aria-describedby="LnameHelp" placeholder="Enter your Last Name">
                        <small id="LnameHelp" class="form-text text-muted">We'll never share your Last Name with anyone
                            else. (First Name must be between 3 and 20 characters)</small>
                    </div>

                <?PHP
                } elseif (strlen($_POST['Lname']) < 3) {
                ?>

                    <div class="form-group has-danger">
                        <label class="Lname" for="Lname">Last Name</label>
                        <input type="text" value="<?= $_POST['Lname'] ?>" class="form-control is-invalid" name="Lname" id="Lname" aria-describedby="LnameHelp" placeholder="Enter your Last Name">
                        <div class="invalid-feedback">Sorry, Last name must be between 3 and 20 characters</div>
                    </div>

                <?PHP
                } else {
                ?>

                    <div class="form-group">
                        <label for="Lname">Last Name</label>
                        <input type="text" class="form-control" name="Lname" value="<?= $_POST['Lname'] ?>" id="Lname" aria-describedby="LnameHelp" placeholder="Enter your Last Name">
                        <small id="LnameHelp" class="form-text text-muted">We'll never share your Last Name with anyone
                            else. (First Name must be between 3 and 20 characters)</small>
                    </div>

                <?PHP
                }
                if ($_POST == []) {
                ?>

                    <div class="form-group">
                        <label for="Phone">Phone Number</label>
                        <input type="tel" class="form-control" id="Phone" name="Phone" aria-describedby="PhoneHelp" placeholder="Enter your Phone Number">
                        <small id="PhoneHelp" class="form-text text-muted">We'll never share your phone number with anyone
                            else. (The phone number must be 10 digits long)</small>
                    </div>

                <?PHP
                } elseif (strlen($_POST['Phone']) < 10) {
                ?>

                    <div class="form-group has-danger">
                        <label class="Phone" for="Phone">Phone Number</label>
                        <input type="text" value="<?= $_POST['Phone'] ?>" class="form-control is-invalid" name="Phone" id="Phone" aria-describedby="PhoneHelp" placeholder="Enter your Phone Number">
                        <div class="invalid-feedback">Sorry, the phone number must be 10 digits long</div>
                    </div>

                <?PHP
                } else {
                ?>

                    <div class="form-group">
                        <label for="Phone">Phone Number</label>
                        <input type="tel" class="form-control" value="<?= $_POST['Phone'] ?>" id="Phone" name="Phone" aria-describedby="PhoneHelp" placeholder="Enter your Phone Number">
                        <small id="PhoneHelp" class="form-text text-muted">We'll never share your phone number with anyone
                            else. (The phone number must be 10 digits long)</small>
                    </div>

                <?PHP
                }
                ?>

                <div class="form-group">
                    <label for="exampleInputDate">Date of purchase</label>
                    <input type="date" class="form-control" id="exampleInputDate" aria-describedby="DateHelp" placeholder="Enter Date of purchase">
                    <small id="DateHelp" class="form-text text-muted">We'll never share your Date of purchase with
                        anyone
                        else.</small>
                </div>

                <legend>Was the agent nice?</legend>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios1" value="2" checked="">
                        YES
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios2" value="0" checked="">
                        NO
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios3" value="1" checked="">
                        Without Notice
                    </label>
                </div>

                <legend>Did the officer understand your problem?</legend>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios1" value="2" checked="">
                        YES
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios2" value="0" checked="">
                        NO
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios3" value="1" checked="">
                        Without Notice
                    </label>
                </div>

                <legend>Has the agent solved your problem?</legend>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question3" id="optionsRadios1" value="1" checked="">
                        YES
                    </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question3" id="optionsRadios2" value="-1" checked="">
                        NO
                    </label>
                </div>

                <div class="form-group">
                    <label for="message" class="form-label mt-3">Tell us more</label>
                    <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                </div>

                <div class="form-check">
                    <input name="recall" class="form-check-input" type="checkbox" value="true" id="recall">
                    <label class="form-check-label" for="recall">
                        Accept to be recalled (checkbox)
                    </label>
                </div>

                <button type="submit" class="btn btn-primary mt-5">Submit</button>

            </fieldset>

        </form>
    </div>