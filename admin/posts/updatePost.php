<?php
session_start();

use App\Models\Validator;

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';


if (isset($_POST['submitUpdate'])) {
    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['description'] = Validator::preProcessing($_POST['description']);
//    $data['photo']=Validator::preProcessing($_POST['photo']);
//    $data['article_id']=Validator::preProcessing($_POST['article_id']);
    $data['id'] = $_POST['id'];
    $errorLoad = "";
    $errorDel = "";
    $imgPath = [];
    $imagesObj = $_POST['delImg'];

    if (!empty($imagesObj)) {


        foreach ($imagesObj as $obj) {
            $Exp = explode(";", $obj);
//            var_dump($obj);
            $dataImage->deleteImage($Exp[0]);
            $imgPath[] = $Exp[1];
        }


        deleteIMG($imgPath, $uploadPath);


    }
    header("Location: /");


    [$errors, $fileNames] = loadImg($maxFileSize, $validFileTypes, $uploadPath, 'photo');

    if (empty($errors)) {
        $_SESSION["msg"] = "Файлы успешно загружены...";
        $_SESSION["alert"] = "#00ff00";

        $dataImage->addImageEdit($fileNames, $data['id']);
    }

    $dataPost->updatePost($data);
    unset($_SESSION['errors']);
    $post = $dataPost->getOnePost($data['id']);
    if (empty($errorLoad)) {
        $data['photo'] = $fileName;
        $dataPost->updatePost($data);

//        header('Location: /admin/posts/show.php?id=' . $data['id']);
    } else {
        $_SESSION['errors']['update'] = $errorLoad;

//        header('Location: /admin/UpdatePost/edit.php?id=' . $data['id']);
    }
}

















//    $imagesForPost = $dataPost->getImagesForPost($id);
//    [$errorLoad, $fileName] = loadImg($maxFileSize, $validFiletypes, $uploadPath, 'photo');
//    if ($_FILES['photo']['error'] == UPLOAD_ERR_NO_FILE) {
//        $fileName = $image->photo;
//        $errorLoad = '';
//    } else {
//        foreach ($imagesForPost as $img){
//            $error = deletePost($_SERVER['DOCUMENT_ROOT'].'/img/' . $img->photo);
//        }
//    }