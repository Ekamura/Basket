<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
$Subcategories=$dataSubcategory->getAllSubategory();
include $_SERVER['DOCUMENT_ROOT'].'/admin/Subcategories/allSubcategory.view.php';
