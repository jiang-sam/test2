<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/25/025
 * Time: 0:00
 */
class top{
    var $data;
    var $smarty;
    function __construct($data,$smarty){
        $this->data=$data;
        $this->smarty=$smarty;
        $friendlinkModel=new data(DB_PREFIX."friendlink",$this->data->db);
        $this->friendlinkArr=$friendlinkModel->select();
    }
    //自动变量
    function __set($name, $value){
        $this->smarty->assign($name,$value);
    }
    //自动模板
    function display($templatesurl=""){
        global $c;
        global $a;
        if(empty($templatesurl)){
            $templatesurl=$c."/".$a.".html";
        }
        $this->smarty->display($templatesurl);
    }
}