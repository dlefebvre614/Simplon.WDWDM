<!-- header factoring bootstrap DLE -->
<?php include("layout/header.inc.php"); ?>

<!-- Barnav DLE -->
<?php include("views/funct_nav.php"); ?>

<!--<h1>"Functions are my wealth!" DLE</h1>
<h2>Call library: library/forms.inc.php</h2>-->

<?PHP
// call for functions to be verified
require('library/forms.inc.php');

// Function calculRate() Score calculation to display : DLE
// example of use : calculRate($_POST['question_1'] + $_POST['question_2'] + $_POST['question_3']), '⭐', '⚫', 5)

// initialization of test variables
$yes = "⭐";
$no = "⚫";
$size = 10;

// Display limits test and parameters in table

?>

<hr>
<div class="bs-component">
    <balise id="calculRate">
        <h1>Function "Score Calculation to Display": calculRate($score, <?= $yes ?>, <?= $no ?>, <?= $size ?>)</h1>
        <table class="table table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col">Study of the limits</th>
                    <th scope="col">Parameters</th>
                </tr>
            </thead>

            <tbody>
                <tr class="table-active">
                    <td>calculRate($score, <?= $yes ?>, <?= $no ?>, <?= $size ?>)</td>
                    <td>calculRate($score, $yes, $no, $size)</td>
                </tr>

                <tr class="table-light">
                    <td>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-primary">
                                    <th scope="col">$score</th>
                                    <th scope="col">Display</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?PHP
                                for ($i = -1; $i <= $size + 1; $i++) {

                                    if ($i < 0 || $i > $size) {
                                ?>
                                        <tr class="table-warning">
                                        <?PHP
                                        // Tester si un nombre est pair ou impair
                                        // En utilisant le modulo :
                                    } elseif ($i % 2 == 1) {
                                        ?>
                                        <tr class="table-active">
                                        <?PHP
                                    } else {
                                        ?>
                                        <tr class="table-secondary">
                                        <?PHP
                                    }
                                        ?>
                                        <td><?= $i ?></td>
                                        <td><?= calculRate($i, $yes, $no, $size) ?></td>
                                        </tr>
                                    <?PHP
                                }
                                    ?>
                        </table>
                    </td>
                    <td>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-primary">
                                    <th scope="col">Parameter</th>
                                    <th scope="col">Value</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr class="table-active">
                                    <td>$score</td>
                                    <td>0-<?= $size ?></td>
                                </tr>

                                <tr class="table-secondary">
                                    <td>$yes</td>
                                    <td><?= $yes ?></td>
                                </tr>

                                <tr class="table-active">
                                    <td>$no</td>
                                    <td><?= $no ?></td>
                                </tr>

                                <tr class="table-secondary">
                                    <td>$size</td>
                                    <td><?= $size ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-primary">
                                    <th scope="col">Back-end PHP code</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="table-active">
                                    <td>
                                        <pre>

function calculRate(string $score, string $yes, string $no, int $size): string
{
     $rate = ''; // Initialization display string

    if ($score < 0) $score=0; // deletion $score less than 0
                                        
    // do string $rate
    for ($i=0; $i < $size; $i++) {
        if ($i < $score) { 
            $rate .=$yes; 
        } else {
            $rate .=$no;
        }
    }
    return $rate;
}
                                        </pre>
                                    </td>
                            </tbody>
                        </table>
                    </td>
                </tr>
        </table>
    </balise>
</div>
<hr>

<!-- footer factor's : DLE -->
<?php include("layout/footer.inc.php"); ?>