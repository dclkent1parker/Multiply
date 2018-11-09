<?php 
$answerTyped=$_GET['answerTyped'];
$nbTable= $_GET['nbTable'];
$multiple= $_GET['multiple'];
$answer=$nbTable*$multiple;
if($answerTyped == $answer){
    echo('<h2>CONGRATULATIONS</h2>');
}else{
    echo('<h2>LOSER</h2>');
}
?>