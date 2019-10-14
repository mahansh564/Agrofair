<?php
$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/usr/";
$target_file = $target_dir . date('U') . $_FILES['soil']['name'];
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["soil"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
}
if ($uploadOk != 0)
{
    if (move_uploaded_file($_FILES["soil"]["tmp_name"], $target_file)) {
		header('Location: /bin/back/farm/soil_analyse.php?img=' . basename($target_file) . '&size=' . $_POST['size'] . '&lat=' . $_POST['lat'] . '&long=' . $_POST['long']);
    }
}
?>