<?php
use App\Models\Validator;

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';
$error = "";
if (isset($_POST['submit'])) {

    $data['name'] = Validator::preProcessing($_POST['name']);
    $data['description'] = Validator::preProcessing($_POST['description']);
    $data['category_id']=Validator::preProcessing($_POST['category_id']);
    if (empty($error)) {
        $_SESSION['msg'] = 'Файл успешно создан';
        $_SESSION['alert'] = 'alert-success';
        $dataSubcategory->addSubcategory($data);
        header('Location:/admin/Subcategories/');
    } else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /admin/Subcategories/');
    }

}
