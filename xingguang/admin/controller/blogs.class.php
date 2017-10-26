<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/8/29/029
 * Time: 22:43
 */
class blogs extends top{
    function __construct($data,$smarty){
        parent::__construct($data, $smarty);
        checked_login();
    }
    function index(){
        $pageid=(!isset($_GET['pageid'])||empty($_GET['pageid'])||intval($_GET['pageid'])<=0)?"1":$_GET['pageid'];
        $perpage=5;
        $result=$this->data->join("left join ".DB_PREFIX."users on ".DB_PREFIX."users.uid=".DB_PREFIX."blogs.uid left join ".DB_PREFIX."categories on ".DB_PREFIX."categories.cid=".DB_PREFIX."blogs.cid")->page($pageid,$perpage,"");
        $this->arr=$result['arr'];
        $this->pagestr=$result['pagestr'];
        $this->display();
    }
    function add(){
        checked_login();
        $categorieslinkModel=new data(DB_PREFIX."categories",$this->data->db);
        $this->categoriesArr=$categorieslinkModel->select();
        $this->display();
    }
    function addTodo(){
        $check=array(
            array("title","require","文章标题未填写"),
            array("title","unique","文章标题已存在"),
            array("cid","require","文章分类未选择"),
            array("contents","require","合作客户网址未填写")
        );
        $this->data->set_check($check);
        $msgArr=$this->data->call_check($_POST);
        if(!empty($msgArr)){
            msg(implode(" | ",$msgArr));
        }
        $auto=array(
            array("createtime","time","function")
        );
        $_POST['uid']=$_SESSION['uid'];
        $this->data->set_auto($auto);
        $_POST=$this->data->call_auto($_POST);
        $resid=$this->data->add($_POST);
        if($resid>0){
            msg("亲，添加成功",U(__CLASS__,"index"));
        }else{
            msg("亲，添加失败");
        }
    }
    function update(){
        $id=intval($_GET[$this->data->pri]);
        $resone= $this->resone=$this->data->checkid($id);
        $categorieslinkModel=new data(DB_PREFIX."categories",$this->data->db);
        $this->categoriesArr=$categorieslinkModel->select();
        if($_SESSION['flag']=='y'||$_SESSION['uid']==$resone['uid']){
            $this->display();
        }else{
            msg("亲，权限不够");
        }
    }
    function updateTodo(){
        $check=array(
            array("title","require","文章标题未填写"),
            array("title","unique","文章标题已存在",1),
            array("cid","require","文章分类未选择"),
            array("contents","require","文章内容未填写")
        );
        $this->data->set_check($check);
        $msgArr=$this->data->call_check($_REQUEST);
        if(!empty($msgArr)){
            msg(implode(" | ",$msgArr));
        }
        $auto=array(
            array("createtime","time","function")
        );
        $this->data->set_auto($auto);
        $_POST=$this->data->call_auto($_REQUEST);
        $resid=$this->data->save($_REQUEST);
        if($resid){
            msg("亲，更新成功",U(__CLASS__,"index"));
        }else{
            msg("亲，更新失败");
        }
    }
    function delete(){
        $id=intval($_GET[$this->data->pri]);
        $this->data->checkid($id);
        if($_SESSION['flag']=='y'||$_SESSION['uid']==$id){
            $resid=$this->data->delete($id);
        }else{
            msg("亲，权限不够");
        }
        if($resid>0){
            msg("亲，删除成功",U(__CLASS__,"index"));
        }else{
            msg("亲，删除失败");
        }
    }
}