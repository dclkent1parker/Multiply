<?php 
$nbTable= $_GET['table'];
for ($i=1 ; $i <= 10 ; $i++){
    $randomMultiple= array_rand($nbTable, 1);
    echo("<form action='index4.php' method='get' id='answer" . $i . "'>");
    echo('<h3>' . ($nbTableRandom = $nbTable[$randomMultiple]) . 'x' . ($multiple=rand(0,30)) . '= <input type="text" name="answerTyped' . $i . '" id="answerTyped' . $i . '" required minlength="1" maxlength="3" size="4">' . '</h3>');
    echo("<input type='hidden' name='multipleChose" . $i . "' value='" . $multiple . "'></input>");
    echo("<input type='hidden' name='nbTableChose" . $i . "' value='" . $nbTableRandom . "'></input>");
}
echo("<button type='submit' name='result' id='result'> Voir le résultat </button>");
echo("</form>");

?>