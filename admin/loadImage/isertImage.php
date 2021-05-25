<?php

use App\Models\Validator;

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if (isset($_POST['submit'])) {


//    $data['name'] = Validator::preProcessing($_POST['name']);
//    $data['description'] = Validator::preProcessing($_POST['description']);
    $data['photo']=Validator::preProcessing($_POST['photo']);
    $data['article_id']=Validator::preProcessing($_POST['article_id']);
    [$error, $fileName] = loadImg($maxFileSize, $validFiletypes, $uploadPath, 'photo');

    if (empty($error)) {
        $_SESSION['msg'] = 'Файл успешно создан';
        $_SESSION['alert'] = 'alert-success';
        $data['photo'] = $fileName;
        $dataImage->addImage($data);
        header('Location:/admin/posts/');
    } else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: admin/loadImage/');
    }

}
