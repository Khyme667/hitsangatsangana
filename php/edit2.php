<?php

require_once('db2.php');
$upload_dir = '../image/importer/';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from contacts where id=" . $id;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        $êrrorMsg = 'Could not find Any Record';
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $date = $_POST['date'];

    $imgName = $_FILES['image']['name'];
    $imgTmp = $_FILES['image']['tmp_name'];
    $imgSize = $_FILES['image']['size'];

    if ($imgName) {
        $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
        $allowExt = array('jpeg', 'jpg', 'png', 'gif');
        $userPic = time() . '_' . rand(1000, 9999) . '.' . $imgExt;

        if (in_array($imgExt, $allowExt)) {
            if ($imgSize < 5000000) {
                unlink($upload_dir . $row['image']);
                move_uploaded_file($imgTmp, $upload_dir . $userPic);
            } else {
                $errorMsg = 'Image too large';
            }
        } else {
            $errorMsg = 'Please select a valid image';
        }
    } else {
        $userPic = $row['image'];
    }

    if (!isset($errorMsg)) {
        $sql = "update contacts 
        set name = '" . $name . "',
        contact = '" . $contact . "',
        email = '" . $email . "',
        date = '" . $date . "',
        image = '" . $userPic . "'
        where id=" . $id;

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $successMsg = 'New record updated succesfully';
            header('location: index2.php');
        } else {
            $errorMsg = 'Error' . mysqli_error($conn);
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hitsangatsangana</title>
    <link rel="stylesheet" href="../bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../jquery-3.6.0.min.js">
</head>

<body style="background:black">

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="index.php">PHP CRUD WITH IMAGE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="btn btn-outline-danger" href="index2.php"><i class="fa fa-sign-out-alt"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background:orange">
                        Edit Profile
                    </div>
                    <div class="card-body">
                        <form class="" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $row['name']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact No:</label>
                                <input type="text" class="form-control" name="contact" placeholder="Enter Mobile Number" value="<?php echo $row['contact']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email" value="<?php echo $row['email']; ?>">
                            </div>
                            <div class="form-group">
                                <!-- <label for="transport">transport</label>
                      <input type="transport" class="form-control" name="transport" placeholder="Enter transport" value="<?php echo $row['transport']; ?>">
                   -->

                                <label for="date">Dates</label> <br>
                                <input style="border: 1px solid;" type="date" class="form-control" name="date" placeholder="veuillez saisir la date"><br>

                            </div>



                            <div class="form-group">
                                <label for="image">Choose Image</label>
                                <div class="col-md-4">
                                    <img src="<?php echo $upload_dir . $row['image'] ?>" width="100">
                                    <input type="file" class="form-control" name="image" value="">
                                </div>
                            </div>
                            <div class="form-group" style="text-align:center">
                                <button type="submit" name="Submit" class="btn btn-secondary waves">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../bootstrap-4.3.1/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="../jquery-3.6.0.min.js" charset="utf-8"></script>
</body>

</html>