<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../font/css/all.css">
    <link rel="stylesheet" href="../css/suc.css">
    <link rel="stylesheet" href="../css/style200.css">
    <link rel="stylesheet" href="../css/Hack.css">
    <title>Hitsangatsangana</title>
</head>

<body>

    <?php

    require('config.php');

    if (isset($_REQUEST['name'], $_REQUEST['email'], $_REQUEST['password'])) {

        $name = stripslashes($_REQUEST['name']);
        if (empty($name)) {
            $name_er = "entrez votre nom";
        } else {
            $name = mysqli_real_escape_string($conn, $name);
        }

        $email = stripslashes($_REQUEST['email']);
        if (empty($email)) {
            $email_er = "entrez votre email";
        } else {
            $email = mysqli_real_escape_string($conn, $email);
        }

        $password = stripslashes($_REQUEST['password']);
        if (empty($password)) {
            $password_er = "entrez votre mot de passe";
        } else {
            $password = mysqli_real_escape_string($conn, $password);
        }

        if (empty($name_er) && empty($email_er) && empty($password_er)) {
        }


        $query = "INSERT into `users` (name,email,type,password) VALUES 
    ('$name','$email','user','" . hash('sha256', $password) . "')";

        $res = mysqli_query($conn, $query);

        if ($res) {
            echo "<p style='position: absolute;
        z-index: 999999;'><a style='font-size: 44px;color: #aaa;' href='login.php'>connecter</a></p>
        <h1 style='position: absolute;
        z-index: 999999;font-size: 21px;bottom: 180px;color: #00000087;'>Vous êtes inscrit avec succès</h1>
        
        <div style='z-index:9999' class='container'>
            <div class='plate'></div>
            <div class='cup'>
                <div class='top'>
                    <div class='vapour'>
                        <span style='--i:1;'></span>
                        <span style='--i:3;'></span>
                        <span style='--i:16;'></span>
                        <span style='--i:5;'></span>
                        <span style='--i:13;'></span>
                        <span style='--i:20;'></span>
                        <span style='--i:6;'></span>
                        <span style='--i:7;'></span>
                        <span style='--i:10;'></span>
                        <span style='--i:8;'></span>
                        <span style='--i:17;'></span>
                        <span style='--i:11;'></span>
                        <span style='--i:12;'></span>
                        <span style='--i:14;'></span>
                        <span style='--i:2;'></span>
                        <span style='--i:9;'></span>
                        <span style='--i:15;'></span>
                        <span style='--i:4;'></span>
                        <span style='--i:19;'></span>
                    </div>
                    <div class='circle'>
                        <div class='tea'></div>
                    </div>
                </div>
                <div class='handle'></div>
            </div>
        </div>";
        }
    } else {



    ?>
        <form class="box" action="" method="post" name="login">
            <div class="container">
                <aside style="background: rgba(71, 34, 34, 0.507);
z-index: 9;">
                    <p>Bienvenue</p>
                    <input type="name" name="name" class="box-input" placeholder="Nom d'utilisateur" required><br>
                    <input type="email" name="email" class="box-input" placeholder="Email" required><br>
                    <input type="password" name="password" class="box-input" placeholder="Mot de passe" required><br>
                    <input type="submit" name="submit" class="box-button" value="s'inscrire" required><br>

                    <a href="login.php">Se connecter</a>
                </aside>

                <div class="drop drop-1"></div>
                <div class="drop drop-2"></div>
                <div class="drop drop-3"></div>
                <div class="drop drop-4"></div>
                <div class="drop drop-5"></div>
            </div>
        </form>
    <?php } ?>
    <header style="position: absolute;
bottom: 0px;">
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <i class="fa fa-bath" aria-hidden="true"></i>
                <i class="fa fa-shower" aria-hidden="true"></i>
                <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <i class="fa fa-battery-half" aria-hidden="true"></i>
                <i class="fa fa-kiss" aria-hidden="true"></i>
                <i class="fa fa-bicycle" aria-hidden="true"></i>
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <i class="fa fa-gift" aria-hidden="true"></i>
                <i class="fa fa-poop" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
                <i class="fa fa-portrait" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-hourglass" aria-hidden="true"></i>
                <i class="fas fa-landmark" aria-hidden="true"></i>
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
        </div>
    </header>

</body>

</html>