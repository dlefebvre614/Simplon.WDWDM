<form action="index.php" method="post">
    <fieldset>
        <div class="row">
            <div class="form-group col-4">
                <label for="fe_pseudo" class="form-label mt-4" hidden>Pseudo:</label>
                <input type="text" class="form-control" name="pseudo" id="fe_pseudo" aria-describedby="textHelp" placeholder="Enter your pseudo">
                <!--<small id="textHelp" class="form-text text-muted">We'll never share your pseudo with anyone else.</small>-->
            </div>

            <!--<label for="fe_message">Message:</label>
    <input type="text" name="message" id="fe_message" size=100>-->

            <div class="form-group col-8">
                <label for="fe_content" class="form-label mt-4" hidden>Pseudo area:</label>
                <textarea class="form-control" name="content" id="fe_content" rows="3" placeholder="Enter your message"></textarea>
                <!--<small id="contentHelp" class="form-text text-muted">We'll never share your message with anyone else.</small>-->
            </div>
        </div>
        <!--<br>
    <label for="fe_submit"></label>
    <input type="submit" value="Submit">-->

        <button type="submit" class="btn btn-primary">Submit</button>

    </fieldset>

    <!-- --INSERT INTO `message` (`id`, `pseudo`, `content`, `date`) VALUES (NULL, 'Didier', 'Salut, c\'est Didier\r\n\r\nA bientôt', CURRENT_TIMESTAMP); -->


</form>