<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
//$category = $dataCategory->getAllCategory();
//$subcategory = $dataSubcategory->getAllSubategory();
$post = $dataPost->getOnePost(12);
$post2 = $dataPost->getOnePost(13);
$post3 = $dataPost->getOnePost(14);
$post4 = $dataPost->getOnePost(15);
$post5 = $dataPost->getOnePost(16);
$post6 = $dataPost->getOnePost(17);
include "history.php";