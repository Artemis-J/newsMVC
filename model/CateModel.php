<?php
require_once  'Model.php';

class CateModel extends Model
{
    protected $pdo;
    public function __construct()
    {
        // 获取已经创建好的 PDO 对象
        $this->pdo = Model::getInstance()->pdo;
    }

    public function getAllCates()
    {
        $query = $this->pdo->query("SELECT * FROM category ORDER BY id DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }



}