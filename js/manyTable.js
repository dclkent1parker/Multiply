
/*Création du sélecteur en fonction du nombre de table*/

var selecteur= document.getElementById("manySelecteur");

for(var i=1 ; i<=10 ; i++){
    var newDiv=document.createElement("div");
    var newTable=document.createElement("INPUT");
    newTable.setAttribute("type","checkbox");
    newTable.setAttribute("id","table"+i)
    newTable.setAttribute("name","table[]")
    newTable.value=i;
    var labels=document.createElement("label");
    labels.htmlFor="table"+i;
    labels.innerHTML="Table de "+i;
    newDiv.appendChild(newTable);
    newDiv.appendChild(labels);
    selecteur.appendChild(newDiv)
};

console.log(array);
var multiple=1;
var container= document.getElementById("choiceContainer");
for(var i=0 ; i<=nbTable ; i++){
    var tableau= document.createElement("table");
    container.appendChild(tableau);
    for(var y= 1; y<=10 ; y++){
        var ligne= tableau.insertRow();
            for(var x=1; x<=3 ; x++){
                var caseTableau = ligne.insertCell();
                caseTableau.innerHTML=nbTable+" x "+multiple+" = "+(nbTable*multiple);
                multiple++;
            }
        }
}
                        