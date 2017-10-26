<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/8/24/010
 * Time: 18:35
 */
header("Content-type:text/html;charset=UTF-8");
date_default_timezone_set("PRC");
//开启session
session_start();
//session生存周期
setcookie(session_name(),session_id(),time()+86400*7);

define("JIANG","jiang");//设置常量
define("TP","templates/");//设置常量

require_once("include/global.php");//全局函数
require_once ("config.php");//配置文件
require_once ("include/data.class.php");//数据库操作
require_once("include/db.class.php");//数据库连接
require_once("include/upload.class.php");//文件上传
require_once ("controller/top.class.php");//公共类

//smarty
require_once ("Smarty/Smarty.class.php");
$smarty=new Smarty();

$db=new db(DB_HOST,DB_USER,DB_PWD,DB_DATABASE,DB_CHARSET);
$c=(!isset($_GET['c'])||empty($_GET['c']))?"index":trim($_GET['c']);
$a=(!isset($_GET['a'])||empty($_GET['a']))?"index":trim($_GET['a']);
$tbname=DB_PREFIX.$c;
$data=new data($tbname,$db);

/************过滤***********/
$_GET=new_addslashes($_GET);
$_POST=new_addslashes($_POST);
$_REQUEST=new_addslashes($_REQUEST);

if(file_exists("controller/".$c.".class.php")){
require_once ("controller/".$c.".class.php");
    $controllerObj=new $c($data,$smarty);
    if(method_exists($controllerObj,$a)){
        $controllerObj->$a();
    }else{
        die("亲，{$c}控制器的{$a}方法不存在");
    }
}else{
    die("亲，{$c}控制器不存在");
}

