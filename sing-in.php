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

            <!-- Ma partie à moi --> 

            <!-- <h3>Inscription</h3> 
            <form action="connection.php" method="POST" class="connect">
				<label for="fname">Prenom :</label><br>
				<input name="Pseudo"></input><br>
				<label for="name">Nom :</label><br>
				<input name="MDP"></input><br>
                <label for="fname">Pseudo :</label><br>
				<input name="Pseudo"></input><br>
				<label for="name">Mot de passe :</label><br>
                <input name="mdp"></input><br>
                <label for="name">Comfimer votre mot de passe :</label><br>
                <input name="conf-mdp"></input><br>
				<input type="submit" name="submit"/>-->


                <?php
                    require('config.php');
                    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
                        // récupérer le nom d'utilisateur 
                        $username = stripslashes($_REQUEST['username']);
                        $username = mysqli_real_escape_string($conn, $username); 
                        // récupérer l'email 
                        $email = stripslashes($_REQUEST['email']);
                        $email = mysqli_real_escape_string($conn, $email);
                        // récupérer le mot de passe 
                        $password = stripslashes($_REQUEST['password']);
                        $password = mysqli_real_escape_string($conn, $password);
                        
                        $query = "INSERT into `users` (username, email, type, password)
                                VALUES ('$username', '$email', 'user', '".hash('sha256', $password)."')";
                        $res = mysqli_query($conn, $query);
                            if($res){
                            echo "<div class='sucess'>
                                    <h3>Vous êtes inscrit avec succès.</h3>
                                    <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
                            </div>";
                            }
                    }else{
                        ?>
                            <form class="box" action="" method="post">
                                <h1 class="box-title">S'inscrire</h1>
                            <input type="text" class="box-input" name="username" 
                            placeholder="Nom d'utilisateur" required />
                            
                                <input type="text" class="box-input" name="email" 
                            placeholder="Email" required />
                            
                                <input type="password" class="box-input" name="password" 
                            placeholder="Mot de passe" required />
                            
                                <input type="submit" name="submit" 
                            value="S'inscrire" class="box-button" />
                            
                                <p class="box-register">Déjà inscrit? 
                            <a href="login.php">Connectez-vous ici</a></p>
                            </form>
                        <?php 
                    } ?>
			</form>
        </div>
    </body>
</html>