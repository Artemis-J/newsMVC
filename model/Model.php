<?php
class Model
{
    protected $pdo;
    private static $instance = null;
    public function __construct(){
        $this->initDao();

    }
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function initDao()
    {
        $host = 'localhost'; // 数据库主机名
        $dbName = 'test'; // 数据库名
        $charset = 'utf8mb4'; // 数据库字符集
        $user = 'root'; // 数据库用户名
        $pass = ''; // 数据库密码
        
        // 建立 PDO 连接
        $dsn = "mysql:host={$host};dbname={$dbName};charset={$charset}";
        $this->pdo = new PDO($dsn, $user, $pass);
        
        
        // 设置 PDO 错误模式为异常模式
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}
