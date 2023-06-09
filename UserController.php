<?php

require_once("model/UserModel.php");
require_once("smarty.php");

class UserController
{
    private $model;
    private $smarty;
    public function __construct()
    {
        $this->model = new UserModel();
        // 初始化Smarty对象
        $this->smarty = new Smarty();
    }
    public function listUser()
    {
        $list_users = $this->model->getAllUsers();
        // 将新闻列表赋值给模板
        $this->smarty->assign('list_users', $list_users);
        $this->smarty->display('userList.tpl');
    }

    public function loginUser()
    {

        // 查询数据库，验证用户名和密码是否正确
        if (isset($_POST['submit'])) {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $user = $this->model->getUserByUsername($username);
            if ($user && $user['password'] == $password) {
                // 用户名和密码正确，保存用户信息到Session中，跳转到首页
                $_SESSION['user'] = $user;
                header('Location: index.php');
            } else {
                echo "<script>alert('Incorrect username or password.');</script>";
            }
        }
        $this->smarty->display('login.tpl');
    }

    public function registerUser()
    {
        if (isset($_POST['submit'])) { //这句不写的话进入页面就会直接弹出提示框,写了submit之后才会判断
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                $username = $_POST['username'] ?? '';
                $password = $_POST['password'] ?? '';
                $newUser = $this->model->signIn($username, $password);
                // Check if the query was successful
                if ($newUser) {
                    // Redirect to the index page
                    header('Location: index.php');
                    exit();
                } else {
                    echo 'Error inserting data into the database';
                }
            } else {
                echo "<script>alert('Please fill in all the fields');</script>";
            }
        }
        $this->smarty->display("register.tpl");
    }
}
