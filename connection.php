<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="#">
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
                    <h2><a href="connection.php">Connection</a></h2>
                </div>
            </div>
            <div class="topright">
                <h3><h3>
            </div>
        </header>
        <div class="ZoneSaisie">

            <!-- Ma partie a moi -->
            <!--    <h3>Connection</h3>
                <form action="connection.php" method="POST" class="connect">
                    <label for="fname">Nom d'utilisateur :</label><br>
                    <input name="Pseudo"></input><br>
                    <label for="name">Mot de passe :</label><br>
                    <input name="MDP"></input><br>
                    <input type="submit" name="submit"/>
                </form>
                <a href="sing-in.php"><h4>S'inscrire</h4></a>$_COOKIE-->
            
            <?php
                session_start();
                require('config.php');

                if (isset($_POST['username'])){
                $username = stripslashes($_REQUEST['username']);
                $username = mysqli_real_escape_string($conn, $username);
                $_SESSION['username'] = $username;
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($conn, $password);
                $query = "SELECT * FROM `users` WHERE username='$username'and password='".hash('sha256', $password)."'";

                $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
                
                if (mysqli_num_rows($result) == 1) {
                    $user = mysqli_fetch_assoc($result);
                    // vérifier si l'utilisateur est un administrateur ou un utilisateur
                    if ($user['type'] == 'admin') {
                    header('location: admin/home.php'); 
                    }else{
                    header('location: accounts.php');
                    }
                }else{
                    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
                }
                }
                ?>
                <form class="box" action="" method="post" name="login">
                <h1 class="box-title">Connexion</h1>
                <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
                <input type="password" class="box-input" name="password" placeholder="Mot de passe">
                <input type="submit" value="Connexion " name="submit" class="box-button">
                <p class="box-register">Vous êtes nouveau ici? 
                <a href="sing-in.php">S'inscrire</a>
                </p>
                <?php if (! empty($message)) { ?>
                    <p class="errorMessage"><?php echo $message; ?></p>
                <?php } ?>
                </form>

        </div>
    </body>
</html>