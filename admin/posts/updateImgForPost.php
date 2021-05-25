<?php

use App\Models\Validator;

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submit'])) {


//    $data['name'] = Validator::preProcessing($_POST['name']);
//    $data['description'] = Validator::preProcessing($_POST['description']);
    $data['photo']=Validator::preProcessing($_POST['photo']);
    $data['article_id']=Validator::preProcessing($_POST['article_id']);
    $data['id'] = $_POST['id'];
    [$error, $fileName] = loadImg($maxFileSize, $validFiletypes, $uploadPath, 'photo');

    if (empty($error)) {
        $_SESSION['msg'] = 'Файл успешно создан';
        $_SESSION['alert'] = 'alert-success';
        $_SESSION['id']=$data['id'];
//        var_dump($_SESSION['id']);
        $data['photo'] = $fileName;
        $dataImage->addImage($data);
        header('Location:/admin/posts/edit.php?id='.$_SESSION['id']);
    } else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /');
    }

}