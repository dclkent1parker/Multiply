var selecteur= document.getElementById("selecteur");

for(var i=1 ; i<=10 ; i++){
    var newTable=document.createElement("OPTION");
    newTable.value=i;
    newTable.innerHTML="Table de "+i;
    selecteur.appendChild(newTable);
};