<?php

//入口文件-简单的路由器：根据不同的URL或请求参数调用不同的控制器和方法，实现灵活的请求处理和业务逻辑控制

//确定分发参数c-控制器
$default_controller = 'News';
$c = isset($_GET['c'])? $_GET['c'] : $default_controller;

//确定分发参数a-方法
$default_action = 'page';
//isset() 函数用于判断 $_GET['a'] 是否存在，存在，将其值赋给 $a ，否则将 $a 设为 $default_action
$a = isset($_GET['a'])? $_GET['a'] : $default_action;

//拼出控制器类名称
$controller_name = $c . 'Controller';
//载入控制器类
require ("./".$controller_name.".php");

//实例化控制器类
$controller = new $controller_name; //可变类

//拼出方法名, 需要方法名后缀和controller名一致
$action_name = $a.$c;

//调用方法
$controller -> $action_name();//可变方法 


?>