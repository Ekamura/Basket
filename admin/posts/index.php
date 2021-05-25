<?php

include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

//$posts = $dataPost->getAllPosts();
$posts=$dataPost->getAllPosts();
include $_SERVER['DOCUMENT_ROOT'] . '/admin/posts/posts.view.php';