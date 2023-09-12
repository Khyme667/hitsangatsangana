<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/log.css">
    <title>Hitsangatsangana</title>


</head>

<body>

    <?php

    require('config.php');
    session_start();

    if (isset($_POST['name'])) {

        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($conn, $name);
        $_SESSION['name'] = $name;

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        $query = "SELECT * FROM `users` where name = '$name' and password = '" . hash('sha256', $password) . "'";
        $result = mysqli_query($conn, $query) or die(mysqli_connect_error());

        if (mysqli_num_rows($result) == 1) {

            $user = mysqli_fetch_assoc($result);

            if ($user['type'] == 'admin') {
                header('location: boky.php');
            } else {
                header('location: createss.php');
            }
        } else {
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect";
        }
    }

    ?>

    <form name="login" method="post" class="box" style="position: relative;
bottom: 64px;">
        <div class="singe"><img style="width: 24%;
position: relative;
right: 114px;
top: 310px;" src="../image/singe.png" alt=""></div>
        <div class="card">
            <div class="image">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="content">
                <img style="width: 230px;height: 225px;position: relative;bottom: 23px;" src="../image/logo.jpg" alt="">
                <h2 style="position: relative;bottom: 39px;color: #ffe4c48f;">Se connecter</h2>
                <input style="position: relative;bottom: 20px;width: 210px;height: 21px;background-color: white;" type="text" class="box-input" name="name" placeholder="Nom d'utilisateur">
                <input style="background-color: white;width: 210px;height: 21px;" type="password" class="box-input" name="password" placeholder="Mot de passe">
                <input id="h3" style="background: #6fff6fc2;border-radius: 20px;padding: 10px;margin: 20px;" type="submit" value="Connexion " name="submit" class="box-button">


                <h4><a style="color: #ffe4c48f;padding: 11px;text-decoration: overline;box-shadow: 0PX -4PX 6PX 2PX white;font-size: 21px;" href="s'inscrire.php">S'inscrire</a></h4>

                <?php if (!empty($message)) { ?>

                    <p style="background-color: red;padding: 5px;position: relative;top: 26px;" class="errorMessage">

                        <?php echo $message; ?>

                    </p>

                <?php } ?>


            </div>
        </div>
    </form>

</body>

</html>