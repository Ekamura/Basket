<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
$post = $dataPost->getOnePost(33);
$post2 = $dataPost->getOnePost(34);
$post3 = $dataPost->getOnePost(35);
$post4 = $dataPost->getOnePost(36);
$post5 = $dataPost->getOnePost(37);
$post6 = $dataPost->getOnePost(38);
include "index.view.php";