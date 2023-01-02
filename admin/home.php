<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		//header("Location: /connection.php");
		//exit(); 
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../style.css" />
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
				<a href="../index.php"><h2>Index</h2></a>
			</div>
			<!--<div class='topright'>
					<a href='connection.php'><h3>Connection<h3></a>
					<a href='accounts.php'>Kalio</a> // A utiliser en dernier recours si le php plante le site-->
			<?php
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
                }?>
			?>
		</header>
		<div class="sucess">
			<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
			<p>C'est votre espace admin.</p>
			<a href="add_user.php">Add user</a> | 
			<a href="#">Update user</a> | 
			<a href="#">Delete user</a> | 
			<a href="../logout.php">Déconnexion</a>
			</ul>
		</div>
	</body>
</html>