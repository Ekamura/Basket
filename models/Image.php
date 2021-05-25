<?php


namespace App\Models;

use PDO;

class Image
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addImage($data)
    {
        $stmt = $this->pdo->prepare('INSERT INTO photos(photo, article_id)
                VALUES (:photo,:article_id)');
        $stmt->execute([
            'photo' => $data['photo'],
            'article_id' => $data['article_id']
        ]);
        return $this->pdo->lastInsertId();
    }

    public function addImageEdit($images, $id)
    {
        $stmt = $this->pdo->prepare('INSERT INTO photos(photo, article_id)
                VALUES (:photo,:article_id)');
        if (!empty($images)) {
            foreach ($images as $img) {
                $stmt->execute([
                    "photo" => $img,
                    "article_id" => $id
                ]);
            }
            return $this->pdo->lastInsertId();
        }
    }

    public function deleteImage($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM photos WHERE id_photo=:id_photo');
        $stmt->execute(['id_photo' => $id
        ]);
    }
}