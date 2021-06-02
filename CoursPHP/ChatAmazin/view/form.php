<form action="">
    <fieldset>
        <!--<label for="fe_pseudo" hidden>Pseudo:</label>
    <input type="text" name="speudo" id="fe_pseudo">-->
        <div class="row">
            <div class="form-group col-4">
                <label for="fe_test" class="form-label mt-4" hidden>Pseudo:</label>
                <input type="text" class="form-control" id="fe_text" aria-describedby="textHelp" placeholder="Enter your pseudo">
                <small id="textHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <!--<label for="fe_message">Message:</label>
    <input type="text" name="message" id="fe_message" size=100>-->

            <div class="form-group col-8">
                <!--<label for="fe_message" class="form-label mt-4" hidden>Text area:</label>-->
                <label for="fe_message" class="form-label mt-4" hidden>Text area:</label>
                <textarea class="form-control" name="message" id="fe_message" rows="3" placeholder="Enter your message"></textarea>
            </div>
        </div>
        <!--<br>
    <label for="fe_submit"></label>
    <input type="submit" value="Submit">-->

        <button type="submit" class="btn btn-primary">Submit</button>

    </fieldset>

    <!-- --INSERT INTO `message` (`id`, `pseudo`, `content`, `date`) VALUES (NULL, 'Didier', 'Salut, c\'est Didier\r\n\r\nA bientôt', CURRENT_TIMESTAMP); -->


</form>