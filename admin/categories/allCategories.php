<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
$categories=$dataCategory->getAllCategory();
include $_SERVER['DOCUMENT_ROOT'].'/admin/categories/allCategories.view.php';
