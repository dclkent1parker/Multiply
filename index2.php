<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet"> 
    <link rel="stylesheet" href="css/multiply.css">
    
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
                    <li id="tab1"><a href="index.php">Table</a></li>
                    <li id="tab2" class="active"><a href="index2.php">Plusieurs tables</a></li>
                    <li id="tab3"><a href="index3.php">Interrogation</a></li>
                    <li id="tab4"><a href="index4.php">Super révision</a></li>
                </ul>
                <form action="index2.php" method="get" id="choiceContainer">
                    <h2>Veuillez choisir les tables à afficher</h2>
                    <div name="selecteur" id="manySelecteur">
                        <div>
                        <input type="checkbox" name=table[] value="1" id="table1">
                        <label for="table1">Table de 1</label></div>
                        <div>
                        <input type="checkbox" name=table[] value="2" id="table2">
                        <label for="table2">Table de 2</label></div>
                        <div>
                        <input type="checkbox" name=table[] value="3" id="table3">
                        <label for="table3">Table de 3</label></div>
                        <div>
                        <input type="checkbox" name=table[] value="4" id="table4">
                        <label for="table4">Table de 4</label></div>
                        <div>
                        <input type="checkbox" name=table[] value="5" id="table5">
                        <label for="table5">Table de 5</label></div>
                        <div>
                        <input type="checkbox" name=table[] value="6" id="table6">
                        <label for="table6">Table de 6</label></div>
                        <div>
                        <input type="checkbox" name=table[] value="7" id="table7">
                        <label for="table7">Table de 7</label></div>
                        <div>
                        <input type="checkbox" name=table[] value="8" id="table8">
                        <label for="table8">Table de 8</label></div>
                        <div>
                        <input type="checkbox" name=table[] value="9" id="table9">
                        <label for="table9">Table de 9</label></div>
                        <div>
                        <input type="checkbox" name=table[] value="10" id="table10">
                        <label for="table10">Table de 10</label></div>
                    </div>
                    <button type="submit" name="envoyer" id="voir">Voir</button>
                    <?php if (isset($_GET['envoyer'])){include ('manyTable.php');}?>
                </form>

            </div>
        </div>
    </main>
    <footer>
        <h4>Created by Kent1</h4>
    </footer>
</body>
</html>