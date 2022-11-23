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
                <img class="logo" src="/image/kabrock-removebg-preview.png">
            </a>
            <div class="header_div">
                <h1>Kabrock Web</h1>
                </br>
                <h2>Index</h2>
            </div>
            <div class="topright">
                <h3>Identifie toi au lieu de regarder la<h3>
            </div>
        </header>
        <div class="ZoneSaisie">
            <h3>Connection</h3>
            <form action="connection.php" method="POST">
				<label for="fname">Nom d'utilisateur</label><br>
				<input name="Pseudo"></input><br>
				<label for="name">Mot de passe :</label><br>
				<input name="MDP"></input><br>
				<input type="submit" name="submit"/>
			</form>
            <h3>S'inscrire</h3>	
        </div>
    </body>
</html>