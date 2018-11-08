
/*Création du sélecteur en fonction du nombre de table*/

var selecteur= document.getElementById("selecteur");

for(var i=1 ; i<=10 ; i++){
    var newTable=document.createElement("OPTION");
    newTable.value=i;
    newTable.innerHTML="Table de "+i;
    selecteur.appendChild(newTable);
};
console.log(nbTable)
var button= document.getElementById("voir");
var form= document.getElementById("choiceContainer");
var multiple= 1; 

for(var i= 1; i<=10 ; i++){
    var table=document.getElementById("tableau");
    var ligne= table.insertRow()
    for(var x=1; x<=3 ; x++){
        
        var caseTableau = ligne.insertCell();
        caseTableau.innerHTML=nbTable+" x "+multiple+" = "+(nbTable*multiple);
        multiple++;
    }

}
