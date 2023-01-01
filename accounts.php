<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
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
    <header>        
            <a href="index.php">
                <img class="logo" src="/image/Kabrock-logo-remove test 2.png">
            </a>
            <div class="header_div">
                <h1>Kabrock Web</h1>
                </br>
                <h2>Index</h2>
            </div>
            <div class="topright">
                <h3><?php echo $_SESSION['username']; ?><h3></a>
            </div>
        </header>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre tableau de bord.</p>
		<a href="logout.php">Déconnexion</a>
		</div>
        <?php /*
            //récupérer username à partie de la session
            $username = $_SESSION["username"];
            //requête SQl pour récupérer tous les informations de l'utilisateur
            $query = "SELECT * FROM users WHERE username='$username'"
            //exécuter la requête 
            $row = mysql_fetch_array($query);
            //le résultat de la requête sera stocké dans le tableau $row[]
            $id = $row['id'];
            $username = $row['username'];
            $email = $row['email'];

            //afficher les informations de l'utilisateur
            echo $id;
            echo $username;
            echo $email;
        */?>
	</body>
</html>