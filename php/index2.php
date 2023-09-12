<?php

include('db2.php');
$upload_dir = '../image/importer/';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "select * from contacts where id = " . $id;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $image = $row['image'];
        unlink($upload_dir . $image);
        $sql = "delete from contacts where id=" . $id;

        if (mysqli_query($conn, $sql)) {
            header('location:index2.php');
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
    <link rel="stylesheet" href="../css/bulles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <script src="../jquery-3.6.0.min.js" charset="utf-8"></script>
</head>

<body style="min-height: 100vh;">

    <!-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
        <a class="navbar-brand" href="index.php">PHP CRUD WITH IMAGE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="btn btn-primary" href="create2.php"><i class="fa fa-user-plus"></i></a></li>
            </ul>
        </div>
      </div>
    </nav> -->
    <div class="container" style="border-radius:20px">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="bubbles">
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:24;"></span>
                    <span style="--i:10;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:19;"></span>
                    <span style="--i:20;"></span>
                    <span style="--i:22;"></span>
                    <span style="--i:25;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:21;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:26;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:28;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:24;"></span>
                    <span style="--i:10;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:19;"></span>
                    <span style="--i:20;"></span>
                    <span style="--i:22;"></span>
                    <span style="--i:25;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:21;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:26;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:28;"></span>

                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div style="background: #4040404d;" class="card">
                                <div class="card-header" style="background: #e3dfdf42;color: beige;">Liste des réservations <a href="logout.php" style="position:relative;left:750px;text-decoration: none;
color: white;">Déconnexion</a></div>

                                <div class="card-body">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr style="background: #040d4059;color:white">
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Contact No:</th>
                                                <th>E-Mail</th>
                                                <th>Date</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $sql = "select * from contacts";
                                            $result = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($result)) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                    <tr style="color:white">
                                                        <td style="border: 1px solid #00000012;"><?php echo $row['id'] ?></td>
                                                        <td style="border: 1px solid #00000012;"><img src="<?php echo $upload_dir . $row['image'] ?>" height="40"></td>
                                                        <td style="border: 1px solid #00000012;"><?php echo $row['name'] ?></td>
                                                        <td style="border: 1px solid #00000012;"><?php echo $row['contact'] ?></td>
                                                        <td style="border: 1px solid #00000012;"><?php echo $row['email'] ?></td>
                                                        <td style="border: 1px solid #00000012;"><?php echo $row['date'] ?></td>

                                                        <td style="border: 1px solid #00000012;" class="text-center">
                                                            <a href="show2.php?id=<?php echo $row['id'] ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                            <a href="edit2.php?id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fa fa-user-edit"></i></a>
                                                            <a href="index2.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="../bootstrap-4.3.1/js/bootstrap.min.js" charset="utf-8"></script>
                <script src="../jquery-3.6.0.min.js" charset="utf-8"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#example').DataTable();
                    });
                </script>
</body>

</html>