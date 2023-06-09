<?php

require_once("model/NewsModel.php");
require_once("smarty.php");

class NewsController
{
    private $model;
    private $smarty;

    public function __construct()
    {
        $this->model = new NewsModel();
        // 初始化Smarty对象
        $this->smarty = new Smarty();
    }

/*
    public function listNews()
    {
        $list_news = $this->model->getAllNews();
        foreach ($list_news as &$news) {
            $news['preview'] = substr($news['contenu'], 0, 150);
        }
        unset($news); // 释放引用
        $this->smarty->assign('list_news', $list_news);
        $this->smarty->display('index.tpl');
    }
*/

    /* https://juejin.cn/post/7088647765664169998 分页解释得很好*/ 
    public function pageNews()
    {
        $page = $_GET['page'] ?? 1; // 获取当前页码，默认为1
        $perPage = 10; // 每页显示的文章数量
        // 根据数据库中的文章总数计算总页数
        $totalNews = $this->model->getTotalNews();
        $totalPage = ceil($totalNews / $perPage); //向上取整 139/10 =14
        $totalPages = range(1, $totalPage); //注意totalPages和totalPage的区别，一个是整数，一个是范围
        $pre = $page == 1 ? $page : $page - 1;
        $next = $page == $totalPage ? $page : $page + 1;

        $start = ($page - 1) * $perPage; // 每一页从第几条文章开始，第一页：0 第二页：10 第三页：20……
        $page_news = $this->model->getPerPageNews($start, $perPage); // 查询数据库获取对应页码的文章列表
        $list_news = $this->model->getAllNews();

        foreach ($page_news as &$news) {
            $news['preview'] = substr($news['contenu'], 0, 200);
        }
        unset($news); // 释放引用

        // 将数据传递给模板引擎
        $this->smarty->assign('pre', $pre);
        $this->smarty->assign('next', $next);
        $this->smarty->assign('list_news', $list_news);
        $this->smarty->assign('page_news', $page_news);
        $this->smarty->assign('currentPage', $page);
        $this->smarty->assign('totalPages', $totalPages);
        $this->smarty->assign('totalPage', $totalPage);

        // 显示模板
        $this->smarty->display('index.tpl');

    }
    
    public function deleteNews()
    {
        if (isset($_GET['id'])) {
            $newsId = $_GET['id'];
            $this->model->deleteNews($newsId);
            header("Location: index.php?a=list");
            exit;
        }
    }

    public function addNews()
    {
        if (isset($_POST['submit'])) { //这句不写的话进入页面就会直接弹出警示框,写了submit之后才会判断
            if (!empty($_POST['title']) && !empty($_POST['content'])) {

                $title = trim($_POST['title']);
                $content = strip_tags($_POST['content']);
                $addNews = $this->model->addNews($title, $content);

                // Check if the query was successful
                if ($addNews) {
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
        $this->smarty->display("addNews.tpl");
    }

    public function searchNews()
    {
        if (isset($_POST['key'])) {
            $keyword = $_POST['key'];
            $newsList =  $this->model->searchNews($keyword);
        }
        // 遍历文章列表，对搜索关键词进行高亮显示。不区分大小写
        foreach ($newsList as &$news) {
            $news['titre'] = preg_replace("/($keyword)/i", "<mark>$1</mark>", $news['titre']);
            $news['contenu'] = preg_replace("/($keyword)/i", "<mark>$1</mark>", $news['contenu']);
        }
        // 将文章列表传递给模板
        $this->smarty->assign('newsList', $newsList);
        $this->smarty->display('searchNews.tpl');
    }

    public function modifyNews()
    {
        if (isset($_POST['id'])) {
            $newsId = $_POST['id'];
            //Prepares an SQL statement for execution
            $query = $this->model->getNewsById($newsId);
            $this->smarty->assign('news', $query);
            $this->smarty->display('modifyNews.tpl');
        }
    }

    public function updateNews()
    {
        if (isset($_POST['id'])) {
            $newsId = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $this->model->updateNews($newsId, $title, $content);
            header("Location: index.php");
            exit;
        }
    }

    public function detailNews()
    {
        if (isset($_GET['id'])) {
            $newsId = $_GET['id'];
            //Prepares an SQL statement for execution
            $query = $this->model->getNewsById($newsId);
        }
        $this->smarty->assign('news', $query);
        $this->smarty->display("newsDetail.tpl");
    }

    public function calendarNews()
    {
        if (isset($_GET['d'])) {
            $newsDate = $_GET['d'];
            //Prepares an SQL statement for execution
            $list_news = $this->model->getNewsByDate($newsDate);
            foreach ($list_news as &$news) {
                $news['preview'] = substr($news['contenu'], 0, 150);
            }
            unset($news); // 释放引用      
        }
        $this->smarty->assign('newsDate', $newsDate);
        $this->smarty->assign('newsList', $list_news);
        $this->smarty->display("calendarNews.tpl");
    }
}
