<?php

namespace App\Models;

use PDO;

class Post
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllPosts()
    {
        $stmt = $this->pdo->query('SELECT * FROM articles  ORDER BY date DESC');
        return $stmt->fetchAll();
    }

    public function getAllPostsWithImage()
    {
        $stmt = $this->pdo->query('SELECT * FROM articles,photos  ORDER BY date DESC');
        return $stmt->fetchAll();
    }


    public function deletePost($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM articles WHERE id=:id');
        $stmt->execute(['id' => $id]);
    }
    public function getImagesForPost($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM photos where article_id=:id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll();
    }
    public function getOnePost($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM articles  WHERE id=:id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function addPost($data)
    {
        $stmt = $this->pdo->prepare('INSERT INTO articles(name, description, date)
                VALUES (:name,:description,:date)') ;
        $stmt->execute([
           'name'=>$data['name'],
            'description'=>$data['description'],
            'date' => date('Y-m-d'),
        ]);
        return $this->pdo->lastInsertId();
    }

    public function updatePost($data)
    {
        $stmt = $this->pdo->prepare('UPDATE articles SET name = :name,description=:description,date=:date
WHERE id=:id');
        $stmt->execute([
            'name'=>$data['name'],
            'description'=>$data['description'],
            'date' => date('Y-m-d'),
            'id'=>$data['id']
        ]);
    }

}