<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$id = $_GET['id'] ?? 1;

$post=$dataPost->getOnePost($id);
$imagesForPost = $dataPost->getImagesForPost($id);
//$comments = $dataCom->getAllComments($id);
include $_SERVER['DOCUMENT_ROOT'] . '/admin/posts/show.view.php';