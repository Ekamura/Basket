<?php
use App\Models\Validator;
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['submit'])){
    $email = Validator::preProcessing($_POST['email']);
    $password = Validator::preProcessing($_POST['password']);
    $user = $dataAuth->auth($email,$password);
//var_dump($email);
//var_dump($password);
//var_dump($_SESSION);
    if($user){   $_SESSION['errors']['auth'] = 'Неправильно введён логин или пароль!';
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location: /admin/auth/');

    }
    else{
        $_SESSION['user'] = json_encode($user, JSON_UNESCAPED_UNICODE);
        $_SESSION['auth'] = true;
        header('Location: /admin/panel/');
    }
}

