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
                    <li id="tab2"><a href="index2.php">Plusieurs tables</a></li>
                    <li id="tab3" class="active"><a href="index3.php">Interrogation</a></li>
                    <li id="tab4"><a href="index4.php">Super révision</a></li>
                </ul>
                <form action="index3.php" method="get" id="choiceContainer">
                    <h2>Choisissez une table, nous vous proposerons une multiplication à résoudre</h2>
                    <select name="selecteur" id="selecteur">
                    </select>
                    <button type="submit" name="envoyer" id="voir">Voir</button>
                    
                </form>
            <?php if (isset($_GET['envoyer'])){include ('interro.php');}?>
            <?php if (isset($_GET['result'])){include ('win.php');}?>
            </div>
        </div>
    </main>
    <footer>
        <h4>Created by Kent1</h4>
    </footer>
<script src="js/interro.js"></script>
</body>
</html>