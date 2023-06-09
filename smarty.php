<?php
define('APP_DIR', __DIR__); //常量
require("./smarty/libs/Smarty.class.php");
class AppSmarty extends Smarty{
    function construct(){
    parent::construct();
    $this->setTemplateDir(APP_DIR . './templates');
    $this->setCompileDir(APP_DIR . './templates_c');
    $this->setConfigDir(APP_DIR . './configs');
    $this->setCacheDir(APP_DIR . './cache');
    }
}
?>