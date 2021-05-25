<?php


namespace App\Models;
use PDO;

class ArticleForSubcategory
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function ArticleForSubcategory(){}
}