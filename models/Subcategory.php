<?php


namespace App\Models;
use PDO;

class Subcategory
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function addSubcategory($data)
    {
        $stmt = $this->pdo->prepare('INSERT INTO subcategories(category_id,name,description)
                VALUES (:category_id,:name,:description)');
        $stmt->execute([
            'category_id'=>$data['category_id'],
            'name'=>$data['name'],
            'description'=>$data['description']
        ]);
        return $this->pdo->lastInsertId();
    }
    public function getAllSubategory()
    {
        $stmt = $this->pdo->query('SELECT * FROM subcategories');
        return $stmt->fetchAll();
    }
}