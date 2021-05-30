<!-- header factoring bootstrap DLE -->
<?php include("../layout/header.inc.php"); ?>

<h1>Functions are my wealth! DLE</h1>
<h2>Call library: ../Library/forms.inc.php</h2>

<?PHP
// call for functions to be verified
require('../Library/forms.inc.php');

// Function calculRate() Score calculation to display : DLE
// example of use : calculRate($_POST['question_1'] + $_POST['question_2'] + $_POST['question_3']), '⭐', '⚫', 5)

// initialization of test variables
$yes = "⭐";
$no = "⚫";
$size = 5;

// Display limits test and parameters in table

?>

<hr>
<h3>Function "Score Calculation to Display": calculRate($score, <?= $yes ?>, <?= $no ?>, <?= $size ?>)</h3>
<table border=4 align=center>
    <tr align=center>
        <td>Limits testing</td>
        <td>Parameters</td>
    </tr>
    <tr align=center>
        <td>calculRate($score, <?= $yes ?>, <?= $no ?>, <?= $size ?>)</td>
        <td>calculRate($score, $yes, $no, $size)</td>
    </tr>
    <tr align=center>
        <td>
            <table border=1 align=center>
                <tr align=center>
                    <td>$score</td>
                    <td>Display</td>
                </tr>

                <?PHP
                for ($i = -1; $i < $size + 2; $i++) {
                ?>
                    <tr align=center>
                        <td><?= $i ?></td>
                        <td><?= calculRate($i, $yes, $no, $size) ?></td>
                    </tr>
                <?PHP
                }
                ?>
            </table>
        </td>
        <td>
            <table border=1 align=center>
                <tr align=center>
                    <td>Parameter</td>
                    <td>Value</td>
                </tr>
                <tr align=center>
                    <td>$score</td>
                    <td>1-<?= $size ?></td>
                </tr>
                <tr align=center>
                    <td>$yes</td>
                    <td><?= $yes ?></td>
                </tr>
                <tr align=center>
                    <td>$no</td>
                    <td><?= $no ?></td>
                </tr>
                <tr align=center>
                    <td>$size</td>
                    <td><?= $size ?></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<hr>

<!-- footer factor's : DLE -->
<?php include("../layout/footer.inc.php"); ?>