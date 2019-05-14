<h2>Table de <?php echo $nbTable=$_GET['selecteur']; ?></h2>

<?php
echo('<table>');
$multiple=1;
for($i= 1; $i<=10 ; $i++){
    echo('<tr>');
    for($x=1; $x<=3 ; $x++){
        echo('<td>');
        echo($nbTable . 'x' . $multiple . '=' . ($nbTable*$multiple) );
        $multiple++;
        echo('</td>');
    }
    echo('</tr>');

}
echo('</table>');