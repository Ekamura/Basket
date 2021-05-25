<?php


namespace App\Models;

use PDO;

class Auth
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function auth($email, $password)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users 
                    WHERE email = :email');
        $stmt->execute([
            'email' => $email,
        ]);

        $user = $stmt->fetch();

        if ($user) {
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
//        return $user;
    }

    public function register($id, $name, $email, $password)
    {
        if ($this->auth($email, $password)) {
            return -1;
        }
        $stmt = $this->pdo->prepare('INSERT INTO users (email, password) 
            VALUES (:email,:password)');
        $stmt->execute([
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ]);
        return $this->pdo->lastInsertId();

    }
//
//    public function posts($user_id)
//    {
//        $stmt = $this->pdo->prepare('SELECT posts.* FROM posts INNER JOIN users ON posts.user_id = users.id
//                        WHERE posts.user_id = :user_id');
//        $stmt->execute(['user_id' => $user_id]);
//        return $stmt->fetchAll();
//    }

    public function find($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE id=:id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}