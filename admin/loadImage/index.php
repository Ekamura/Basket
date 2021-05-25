<?php

include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

$articles  = $dataPost ->getAllPosts();

include $_SERVER['DOCUMENT_ROOT'].'/admin/loadImage/index.view.php';
