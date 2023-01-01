<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link ref="shortcut icon" href="icon kabrock 16.png">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<title>Kabrock web</title>
	</head>
	<body>
		<header>        
            <a href="../index.php">
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
            <?php /*
                if(!isset($_SESSION["username"])){
                echo "<div class='topright'>
                    <a href='connection.php'><h3>Connection<h3></a>
                </div>";
                }
                else{
                    ?>
                    echo "<div class='topright'>
                    <a href=accounts.php ><h3><?php echo $_SESSION["username"];?></h3></a>
                </div>";
                <?php
                }*/?>
        </header>
		<?php
			require('../config.php');

			if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])){
				// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
				$username = stripslashes($_REQUEST['username']);
				$username = mysqli_real_escape_string($conn, $username); 
				// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
				$email = stripslashes($_REQUEST['email']);
				$email = mysqli_real_escape_string($conn, $email);
				// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
				$password = stripslashes($_REQUEST['password']);
				$password = mysqli_real_escape_string($conn, $password);
				// récupérer le type (user | admin)
				$type = stripslashes($_REQUEST['type']);
				$type = mysqli_real_escape_string($conn, $type);
				
				$query = "INSERT into `users` (username, email, type, password)
							VALUES ('$username', '$email', '$type', '".hash('sha256', $password)."')";
				$res = mysqli_query($conn, $query);

				if($res){
				echo "<div class='sucess'>
						<h3>L'utilisateur a été créée avec succés.</h3>
						<p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
						</div>";
				}
			}else{
			?>
			<form class="box" action="" method="post">
				<h1 class="box-title">Add user</h1>
				<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
				<input type="text" class="box-input" name="email" placeholder="Email" required />
				<div class="input-group">
						<select class="box-input" name="type" id="type" >
							<option value="" disabled selected>Type</option>
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
				</div>
				<input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
				<input type="submit" name="submit" value="+ Add" class="box-button" />
			</form>
		<?php } ?>
	</body>
</html>