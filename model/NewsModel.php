<?php
require_once  'Model.php';

class NewsModel extends Model
{
    protected $pdo;

    public function __construct()
    {
        // 获取已经创建好的 PDO 对象
        $this->pdo = Model::getInstance()->pdo;
    }

    //获取所有news存进一个数组
    public function getAllNews()
    {
        $query = $this->pdo->query("SELECT * FROM news ORDER BY id DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    //获取news总数量
    public function getTotalNews()
    {
        $query = $this->pdo->prepare("SELECT COUNT(*) AS total FROM news");
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result ['total'];
    }

    //获取每页的news
    public function getPerPageNews($start, $perPage)
    {   
        $query = $this->pdo->prepare("SELECT * FROM news ORDER BY id DESC LIMIT ?, ? ");
        //将参数绑定到准备语句中的占位符,防止 SQL 注入攻击,提高查询的安全性和性能,使代码更加可靠和可维护
        $query->bindParam(1, $start, PDO::PARAM_INT);  
        $query->bindParam(2, $perPage, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewsById($id)
    {
        $query = $this->pdo->prepare("SELECT * FROM news WHERE id = ?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getNewsByDate($date)
    {
        $query = $this->pdo->prepare("SELECT * FROM news WHERE DATE_FORMAT(date, '%Y-%m-%d') = ?");
        $query->execute([$date]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addNews($title, $content)
    {
        $query = $this->pdo->prepare("INSERT INTO news (titre, contenu, date) VALUES (?, ?, NOW())");
        return $query->execute([$title, $content]);
    }

   
    public function updateNews($id, $title, $content)
    {
        $query = $this->pdo->prepare("UPDATE news SET titre = ?, contenu = ? WHERE id = ?");
        return $query->execute([$title, $content, $id]);
    }

    public function deleteNews($id)
    {
        $query = $this->pdo->prepare("DELETE FROM news WHERE id = ?");
        return $query->execute([$id]);
    }

    public function searchNews($keyword)
    {
        $query = $this->pdo->prepare("SELECT * FROM news WHERE titre LIKE :keyword OR contenu LIKE :keyword");
        $query->execute(['keyword' => "%$keyword%"]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


}
