<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/8/28/028
 * Time: 23:51
 */
class friendlink extends top{
    function __construct($data,$smarty){
        parent::__construct($data, $smarty);
        checked_login();
    }
    function index(){
        $pageid=(!isset($_GET['pageid'])||empty($_GET['pageid'])||intval($_GET['pageid'])<=0)?"1":$_GET['pageid'];
        $perpage=5;
        $result=$this->data->page($pageid,$perpage,"");
        $this->arr=$result['arr'];
        $this->pagestr=$result['pagestr'];
        $this->display();
    }
    function add(){
        if($_SESSION['flag']=='y'){
            $this->display();
        }else{
            msg("亲，权限不够");
        }
    }
    function addTodo(){
        $check=array(
            array("fname","require","友情链接名称未填写"),
            array("fname","unique","友情链接名称已存在"),
            array("furl","require","友情链接网址未填写")
        );
        $this->data->set_check($check);
        $msgArr=$this->data->call_check($_POST);
        if(!empty($msgArr)){
            msg(implode(" | ",$msgArr));
        }
        if(!strstr($_POST['furl'],"http://")){
            msg("亲，友情链接网址格式不正确");
        }
        $result=$this->data->add($_POST);
        if($result>0){
            msg("亲，添加成功",U(__CLASS__,"index"));
        }else{
            msg("亲，添加失败");
        }
    }
    function update(){
        $id=$_GET[$this->data->pri];
        $this->resone=$this->data->checkid($id);
        if($_SESSION['flag']=='y'){
            $this->display();
        }else{
            msg("亲，权限不够");
        }
    }
    function updateTodo(){
        $id=$_GET[$this->data->pri];
        $this->resone=$this->data->checkid($id);
        $check=array(
            array("fname","require","友情链接名称未填写"),
            array("fname","unique","友情链接名称已存在",1),
            array("furl","require","友情链接网址未填写")
        );
        $this->data->set_check($check);
        $msgArr=$this->data->call_check($_REQUEST);
        if(!empty($msgArr)){
            msg(implode(" | ",$msgArr));
        }
        if(!strstr($_POST['furl'],"http://")){
            msg("亲，友情链接网址格式不正确");
        }
       $rows= $this->data->save($_REQUEST);
        if($rows){ 
            msg("亲，更新成功",U(__CLASS__,"index"));
        }else{
            msg("亲，更新失败");
        }
    }
    function delete(){
        $id=$_GET[$this->data->pri];
        $this->data->checkid($id);
        if($_SESSION['flag']=='y'){
            $result=$this->data->delete($id);
        }else{
            msg("亲，权限不够");
        }
        if($result>0){
            msg("亲，删除成功",U(__CLASS__,"index"));
        }else{
            msg("亲，删除失败");
        }
    }

}