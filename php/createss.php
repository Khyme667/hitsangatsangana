<?php
include('add2.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Enveloppe.css">

    <title>Hitsangatsangana</title>
    <Style>

    </Style>
</head>

<body>
    <div style="position: relative;top: 126px;" id="wrap">
        <div id="form-wrap">
            <form style="background: #faeef6c7;box-shadow: 2PX 2PX 5PX 1PX;" class="" action="add2.php" method="post" enctype="multipart/form-data">
                <label for="name">Nom</label>
                <input style="border: 1px solid;" type="text" class="form-control" name="name" placeholder="Enter Name" value="">
                <label for="contact">Contact:</label>
                <input style="border: 1px solid;" type="text" class="form-control" name="contact" placeholder="Enter Mobile Number" value="">
                <label for="email">E-Mail</label> <br>
                <input style="border: 1px solid;" type="email" class="form-control" name="email" placeholder="Enter Email" value=""> <br>
                <label for="date">dates</label> <br>
                <input style="border: 1px solid;" type="date" class="form-control" name="date" placeholder="veuillez saisir la date"><br>
                <label for="image">Choisir Image</label><br>
                <input style="border: 1px solid;" type="file" class="form-control" name="image" value="">
                <button style="    background: red;
                color: beige;
                position: relative;
                top: 33px;
                left: 62px;" type="submit" name="Submit" class="btn btn-primary waves"> Envoyer</button>

            </form>
        </div>
    </div>

</body>

</html>