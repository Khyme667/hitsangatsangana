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
    <title>Hitsangatsangana</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="../css/Successtyle.css">



</head>

<body>
    <h2 style="font-size:40px;color:white"> <?php echo $_SESSION['name']; ?></h2>



    <input type="checkbox" name="" id="check">
    <label for="check">
        <div class="check-icon"> </div>

    </label>
    <div class="sary" style="justify-content:center">
        <a href="https://www.airtel.mg/airtelmoney/howItWork"><img style="width: 25%;height: 86px" src="../image/home/airtel.png" alt=""></a>
        <a href="https://www.mvola.mg/MVola_mobile_money.php"><img style="width: 25%;height: 86px;position:relative;left:20px" src="../image/home/mvola.jpg" alt=""></a>
        <a href="https://www.orange.mg/orangemoney/"><img style="width: 25%;height: 86px;position:relative;left:50px" src="../image/home/orange.png" alt=""></a>

    </div>

</body>

</html>