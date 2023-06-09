<?php

require_once("model/CateModel.php");
require_once("smarty.php");

class CateController
{
    private $model;
    private $smarty;
    public function __construct()
    {
        $this->model = new CateModel();
        // 初始化Smarty对象
        $this->smarty = new Smarty();
    }
    public function listCate()
    {
        $list_cates = $this->model->getAllCates();
        // 将新闻列表赋值给模板
        $this->smarty->assign('list_cates', $list_cates);
        $this->smarty->display('cateList.tpl');
    }




}
