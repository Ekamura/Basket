<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$id = $_GET['id'] ?? 1;
$post = $dataPost->getOnePost($id);
$imagesForPost = $dataPost->getImagesForPost($id);
$articles  = $dataPost ->getAllPosts();
//var_dump($imagesForPost);
//$deleteImg = $dataImages->deleteImage($id);
include $_SERVER['DOCUMENT_ROOT'] . '/admin/posts/edit.view.php';