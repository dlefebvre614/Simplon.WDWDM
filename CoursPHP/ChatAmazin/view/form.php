<form action="">
    <!--<label for="fe_pseudo" hidden>Pseudo:</label>
    <input type="text" name="speudo" id="fe_pseudo">-->

    <div class="form-group">
        <label for="fe_test" class="form-label mt-4">Pseudo:</label>
        <input type="text" class="form-control" id="fe_text" aria-describedby="textHelp" placeholder="Enter your pseudo">
        <small id="textHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <!--<label for="fe_message">Message:</label>
    <input type="text" name="message" id="fe_message" size=100>-->

    <div class="form-group">
        <!--<label for="fe_message" class="form-label mt-4" hidden>Text area:</label>-->
        <label for="fe_message" class="form-label mt-4">Text area:</label>
        <textarea class="form-control" name="message" id="fe_message" rows="3"></textarea>
    </div>

    <br>
    <label for="fe_submit"></label>
    <input type="submit" value="Submit">
</form>