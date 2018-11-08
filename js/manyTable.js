
/*Création du sélecteur en fonction du nombre de table*/

var selecteur= document.getElementById("manySelecteur");

for(var i=1 ; i<=10 ; i++){
    var newDiv=document.createElement("div");
    var newTable=document.createElement("INPUT");
    newTable.setAttribute("type","checkbox");
    newTable.setAttribute("id","table"+i)
    newTable.value=i;
    var labels=document.createElement("label");
    labels.htmlFor="table"+i;
    labels.innerHTML="Table de "+i;
    newDiv.appendChild(newTable);
    newDiv.appendChild(labels);
    selecteur.appendChild(newDiv)
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
