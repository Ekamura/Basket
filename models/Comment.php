<?php


namespace App\Models;

use PDO;

class Comment
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addComment($dataCom)
    {
        $stmt = $this->pdo->prepare('INSERT INTO comments(nik_author,text,post_id,created_at) VALUES (:nik_author,:text,:post_id,:created_at)');
        $stmt->execute([
            'nik_author' => $dataCom['nik_author'],
            'text' => $dataCom['text'],
            'post_id' => $dataCom['post_id'],
            'created_at' => date('Y-m-d'),
        ]);
    }

    public function getAllComments($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM comments WHERE post_id=:id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll();
    }

    public function deleteCom($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM comments WHERE id=:id');
        $stmt->execute(['id' => $id]);
    }
}