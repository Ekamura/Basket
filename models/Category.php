<?php


namespace App\Models;
use PDO;

class Category
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addCategory($data)
    {
        $stmt = $this->pdo->prepare('INSERT INTO categories(name,description)
                VALUES (:name,:description)');
        $stmt->execute([
            'name'=>$data['name'],
            'description'=>$data['description']
        ]);
        return $this->pdo->lastInsertId();
    }

    public function getAllCategory()
    {
        $stmt = $this->pdo->query('SELECT * FROM categories');
        return $stmt->fetchAll();
    }

    public function deleteCategory($id){
        $stmt = $this->pdo->prepare('DELETE FROM categories where id=:id');
        $stmt->execute(['id' => $id]);
    }
}