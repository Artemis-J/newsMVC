<?php
require_once  'Model.php';

class UserModel extends Model
{
    protected $pdo;
    public function __construct()
    {
        // 获取已经创建好的 PDO 对象
        $this->pdo = Model::getInstance()->pdo;
    }

    public function getAllUsers()
    {
        $query = $this->pdo->query("SELECT * FROM user ORDER BY id DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserByUsername($username)
    {
        $query = $this->pdo->prepare('SELECT * FROM user WHERE username = :username');
        $query->bindParam(':username', $username);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function signIn($username, $password)
    {
        $query = $this->pdo->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
        return $query->execute([$username, $password]);
    }


}