<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet"> 
    <link rel="stylesheet" href="css/multiply.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    function loadTable() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("result").innerHTML =
                this.responseText;
        }
        };
        xhttp.open("GET", "table.php?selecteur="+$("select option:selected").val(), true);
        xhttp.send(); 
    }
    </script>
    <title>Multiply</title>
</head>
<body>
    <header><a href="index.php">
        <div id="title">
            <h1>TABLE DE MULTIPLICATION</h1>
        </div>
    </a></header>
    <main>
        <div id="container">
            <div id="page1">
                <ul class="tabs">
                    <li id="tab1" class="active"><a href="index.php">Table</a></li>
                    <li id="tab2"><a href="index2.php">Plusieurs tables</a></li>
                    <li id="tab3"><a href="index3.php">Interrogation</a></li>
                    <li id="tab4"><a href="index4.php">Super révision</a></li>
                </ul>
                <form action="index.php" method="get" id="choiceContainer">
                    <h2>Veuillez choisir la table à afficher</h2>
                    <select name="selecteur" id="selecteur" onchange="loadTable()">
                    </select>
                    
                    <div id="result">

                    </div>
                </form>

            </div>
        </div>
    </main>
    <footer>
        <h4>Created by Kent1</h4>
    </footer>
<script src="js/interro.js"></script>
</body>
</html>