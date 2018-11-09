<?php 
$nbTable=$_GET['table']; 
$manyTable = count($nbTable);
$multiple=1;
for($x=0 ; $x<=$manyTable-1 ; $x++){
    echo ('<table>');
    echo ('<tbody>');
    echo ('<h2>Table de ' . $nbTable[$x] . '</h2>');
    for($i=1 ; $i<=10 ; $i++){
        echo ('<tr>');
        for($n=1 ; $n<=3 ; $n++){
            echo('<td>' . $nbTable[$x] . 'x' . $multiple . '=' . ($nbTable[$x]*$multiple) . '</td>');
            $multiple++;
        }
        echo ('</tr>');
    }
    echo ('</tbody>');
    echo ('</table>');
    $multiple=1;
};
?>