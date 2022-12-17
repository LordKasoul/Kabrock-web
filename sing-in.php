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
                <div class="breadcrumbs"> <!--Chemin d'accès--> 
                    <h2><a href="index.php">Index</a></h2>
                    <p>&nbsp;&gt; </p> <!--Permet de faire un espace + '>' et de finir avec un espace--> 
                    <h2><a href="sing-in.php">Inscription</a></h2>
                </div>
            </div>
            <div class="topright">
                <h3><h3>
            </div>
        </header>
        <div class="ZoneSaisie">
            <h3>Inscription</h3>
            <form action="connection.php" method="POST" class="connect">
				<label for="fname">Prenom :</label><br>
				<input name="Pseudo"></input><br>
				<label for="name">Nom :</label><br>
				<input name="MDP"></input><br>
                <label for="fname">Pseudo :</label><br>
				<input name="Pseudo"></input><br>
				<label for="name">Mot de passe :</label><br>
                <label for="name">Comfimer votre mot de passe :</label><br>
				<input type="submit" name="submit"/>
			</form>
        </div>
    </body>
</html>