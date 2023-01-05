<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  /*if(!isset($_SESSION["username"])){
    //header("Location: login.php");
    exit(); // C'est le exit() qui plante le site lorsque que l'on enleve la redirection a la ligne d'audessus
  }*/
  ?>
<!DOCTYPE html>
<html>
    <head>   
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link ref="shortcut icon" href="icon kabrock 16.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Kabrock web</title>
    </head>
    <body>
        <header>        
            <a href="index.php">
                <img class="logo" src="/image/Kabrock-logo-remove test 2.png">
            </a>
            <div class="header_div">
                <h1>Kabrock Web</h1>
                </br>
                <h2>Index</h2>
            </div>
            <!--<div class='topright'>
                    <a href='connection.php'><h3>Connection<h3></a>
                    <a href='accounts.php'>Kalio</a> // A utiliser en dernier recours si le php plante le site-->
            <?php
            require('config.php');
                if(!isset($_SESSION["username"])){
                    echo "<div class='topright'> <a href='connection.php'><h3>Connection<h3></a></div>";
                }
                else{
                    ?>
                    <div class='topright'>
                        <a href="accounts.php"><h3><?php echo $_SESSION["username"];?></h3></a>
                    </div>";
                    <?php
                }?>
        </header>

        <div class="options">
            <ul>
                <li class="librairie"><p>Bibliotheque</p><div id="Panel1" class="SecretPanel"><p id="music">Musique</p><p>&nbsp;&nbsp; </p><p id="image">Image</p></div></li>
                <li class="bot"><p>Bots</p></li>
                <li class="web"><p>Sites web</p></li>
                <li class="bts"><p>Cours</p><div id="Panel1" class="SecretPanel"><a href="cours.php" id="CGE">CGE</a><p>&nbsp;&nbsp; </p><a href="elec.php" id="elec">Elec</a></div></li>
            </ul>
        </div>
    </body>
</html>
