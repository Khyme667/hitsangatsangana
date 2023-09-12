<?php
require_once('db2.php');
$upload_dir = '../image/importer/';

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $date = $_POST['date'];


    $imgName = $_FILES['image']['name'];
    $imgTmp = $_FILES['image']['tmp_name'];
    $imgSize = $_FILES['image']['size'];

    if (empty($name)) {
        $errorMsg = 'Please input name';
    } elseif (empty($contact)) {
        $errorMsg = 'Please input contact';
    } elseif (empty($email)) {
        $errorMsg = 'Please input email';
    } elseif (empty($date)) {
        $errorMsg = 'Please input date';
    } else {

        $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

        $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

        $userPic = time() . '_' . rand(1000, 9999) . '.' . $imgExt;

        if (in_array($imgExt, $allowExt)) {

            if ($imgSize < 5000000) {
                move_uploaded_file($imgTmp, $upload_dir . $userPic);
            } else {
                $errorMsg = 'Image too large';
            }
        } else {
            $errorMsg = 'Please select a valid image';
        }
    }


    if (!isset($errorMsg)) {
        $sql = "insert into contacts(name, contact, email,date, image)
					values('" . $name . "', '" . $contact . "', '" . $email . "','" . $date . "', '" . $userPic . "')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $successMsg = 'New record added successfully';
            header('Location: succes.php');
        } else {
            $errorMsg = 'Error ' . mysqli_error($conn);
        }
    }
}
