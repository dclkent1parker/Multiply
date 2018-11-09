<?php
$nbTable= $_GET['selecteur'];
echo("<form action='index3.php' method='get' id='answer'>");
echo('<h3>' . $nbTable . 'x' . $multiple=rand(0,30) . '= <input type="text" name="answerTyped" id="answerTyped" required minlength="1" maxlength="3" size="4">' . '</h3>');
echo("<button type='submit' name='result' id='result'> Voir le résultat </button>");
echo("<input type='hidden' name='nbTable' value='" . $nbTable . "'></input>");
echo("<input type='hidden' name='multiple' value='" . $multiple . "'></input>");
echo("</form>");
?>