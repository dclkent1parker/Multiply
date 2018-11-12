<?php 
$points=0;
for ($x=1 ; $x <= 10 ; $x++){
    $multiple= $_GET['multipleChose' . $x];
    $nbTable= $_GET['nbTableChose' . $x];
    $answerTyped= $_GET['answerTyped' . $x];
    $answer= ($multiple*$nbTable); 
    if($answerTyped == $answer){
        $points++;
    }
}
echo('<h2>Vous avez obtenu un score de: </h2><br>');
echo("<h3>" . $points . "/10 </h3>");
?>