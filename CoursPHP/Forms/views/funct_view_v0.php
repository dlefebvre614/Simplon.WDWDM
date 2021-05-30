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
echo '<hr><h3>Function "Score Calculation to Display": calculRate($score, ' . $yes . ', ' . $no . ', ' . $size . ')</h3>';
echo '<table border=4 align=center>';
echo '  <tr align=center>';
echo '      <td>Limits testing</td>';
echo '      <td>Parameters</td>';
echo '  </tr>';
echo '  <tr align=center>';
echo '      <td>calculRate($score, ' . $yes . ', ' . $no . ', ' . $size . ')</td>';
echo '      <td>calculRate($score, $yes, $no, $size)</td>';
echo '  </tr>';
echo '  <tr align=center>';
echo '      <td>';
echo '          <table border=1 align=center>';
echo '              <tr align=center>';
echo '                  <td>$score</td>';
echo '                  <td>Display</td>';
echo '              </tr>';
for ($i = -1; $i < $size + 2; $i++) {
    echo '          <tr align=center>';
    echo '              <td>' . $i . '</td>';
    echo '              <td>' . calculRate($i, $yes, $no, $size) . '</td>';
    echo '          </tr>';
}
echo '          </table>';
echo '      </td>';
echo '      <td>';
echo '          <table border=1 align=center>';
echo '              <tr align=center><td>Parameter</td><td>Value</td></tr>';
echo '              <tr align=center><td>$score</td><td>1-' . $size . '</td></tr>';
echo '              <tr align=center><td>$yes</td><td>' . $yes . '</td></tr>';
echo '              <tr align=center><td>$no</td><td>' . $no . '</td></tr>';
echo '              <tr align=center><td>$size</td><td>' . $size . '</td></tr>';
echo '          </table>';
echo '      </td>';
echo '  </tr>';
echo '</table>';
echo '<hr>';
