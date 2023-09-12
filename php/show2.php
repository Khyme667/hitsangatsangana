<?php

require('db2.php');
$upload_dir = '../image/importer/';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from contacts where id=" . $id;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        $errorMsg = 'Could not find Any Record';
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
    <link rel="stylesheet" href="../bootstrap-4.3.1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <script src="../jquery-3.6.0.min.js" charset="utf-8"></script>
</head>

<body style="background:black">

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="index2.php">PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header" style="background:orange">
                    Contact Details
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <img src="<?php echo $upload_dir . $row['image'] ?>" height="200">
                        </div>
                        <div class="col-md">
                            <h5 class="form-control"><i class="fa fa-user-tag">
                                    <span><?php echo $row['name'] ?></span>
                                </i></h5>
                            <h5 class="form-control"><i class="fa fa-mobile-alt">
                                    <span><?php echo $row['contact'] ?></span>
                                </i></h5>
                            <h5 class="form-control"><i class="fa fa-envelope">
                                    <span><?php echo $row['email'] ?></span>
                                </i></h5>
                            <h5 class="form-control"><i class="fa fa-calendar">
                                    <span><?php echo $row['date'] ?></span>
                                </i></h5>

                            <a class="btn btn-outline-secondary" href="index2.php"><i class="fa fa-sign-out-alt"></i><span>Back</span></a>

                        </div>
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