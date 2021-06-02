    <!--<table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Live Chat Amazin</th>
                <th scope="col">Column heading</th>
                <th scope="col">Column heading</th>
                <th scope="col">Column heading</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                <th scope="row">Active</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr>
                <th scope="row">Default</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="table-primary">
                <th scope="row">Primary</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="table-secondary">
                <th scope="row">Secondary</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="table-success">
                <th scope="row">Success</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="table-danger">
                <th scope="row">Danger</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="table-warning">
                <th scope="row">Warning</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="table-info">
                <th scope="row">Info</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="table-light">
                <th scope="row">Light</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr class="table-dark">
                <th scope="row">Dark</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
        </tbody>
    </table>-->

    <h1>Live chat Amazin</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" class="col-2" hidden>date</th>
                <th scope="col" class="col-2" hidden>pseudo</th>
                <th scope="col" class="col-8" hidden>message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < 3; $i++) {
            ?>
                <tr class="table-light">
                    <td class="col-2">02/06/2021</td>
                    <td class="col-2">didier</td>
                    <td class="col-8">Message de didier</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>