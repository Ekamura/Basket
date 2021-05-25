<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$error = "";


if (isset($_POST["delete"])) {

    $id = $_POST['id'];
    $images = $dataPost->getImagesForPost($id);
    foreach ($images as $image){
        $error = deletePost($_SERVER['DOCUMENT_ROOT'].'/img/' . $image->photo);
    }
    if (empty($error)) {

        $_SESSION["msg"] = "Файл успешно удалён";
        $_SESSION['alert'] = 'alert-success';
        $dataPost->deletePost($id);
        header("Location: /admin/panel/");

    } else {

        $_SESSION["msg"] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header("Location: /");
    }

}
