<?php

use App\db\Connect;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Auth;
use App\Models\Validator;
use App\Models\category;
use App\Models\Subcategory;
use App\Models\Image;
use App\Models\ShowData;
use App\Models\ArticleForSubcategory;

include $_SERVER['DOCUMENT_ROOT'] . '/db/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/db/Connect.php';
include $_SERVER['DOCUMENT_ROOT'] . '/db/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/models/Post.php';
include $_SERVER['DOCUMENT_ROOT'] . '/models/Category.php';
include $_SERVER['DOCUMENT_ROOT'].'/models/Subcategory.php';
include $_SERVER['DOCUMENT_ROOT'].'/models/Image.php';
include $_SERVER['DOCUMENT_ROOT'].'/models/ArticleForSubcategory.php';
//include $_SERVER['DOCUMENT_ROOT'] . '/models/Comment.php';
include $_SERVER['DOCUMENT_ROOT'] . '/models/Auth.php';
include $_SERVER['DOCUMENT_ROOT'] . '/models/validator.php';
include $_SERVER['DOCUMENT_ROOT'] . '/models/ShowData.php';
//var_dump(CONN);
$user = isset($_SESSION['auth']) && $_SESSION['auth'] ? json_decode($_SESSION['user']) : false;
$dataPost = new Post(Connect::make(CONN));
//$dataCom = new Comment(Connect::make(CONN));
$dataAuth = new Auth(Connect::make(CONN));
$dataShow = new ShowData;
$dataValid = new Validator;
$dataCategory = new Category(Connect::make(CONN));
$dataSubcategory = new Subcategory(Connect::make(CONN));
$dataImage = new Image(Connect::make(CONN));
$dataArticleForSubcategory = new ArticleForSubcategory(Connect::make(CONN));





$maxFileSize = 8*1024*1024;
$validFiletypes = ['image/jpg', 'image/jpeg', 'image/png'];
$uploadPath = $_SERVER['DOCUMENT_ROOT'] . "/img/";