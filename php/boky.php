<?php

session_start();

if (!isset($_SESSION["name"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/boky.css">
    <link rel="stylesheet" href="../css/sty.css">


    <title>Hitsangatsangana</title>
</head>

<body>

    <div id="particles-js">

    </div>
    <div class="book">
        <div class="cover"></div>
        <div class="page"></div>
        <div class="page"></div>
        <div class="page"></div>
        <div class="page"></div>
        <div class="page"></div>
        <div class="last-page">
            <img src="../image/logo.jpg" alt="">
            <h3 style="text-align:center;font-size:15px">Bienvenue <?php echo $_SESSION['name']; ?>!</h3>
            <a style="text-decoration:none;position:relative;top:20px;left:25px" href="index2.php">Voir les réservation|</a>

        </div>
        <div class="back-cover"></div>
    </div>
    <script type="text/javascript" src="../js/particles.min.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>


</body>

</html>