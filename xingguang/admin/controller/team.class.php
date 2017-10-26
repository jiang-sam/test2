<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/8/30/030
 * Time: 22:29
 */
class team extends top{
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
            array("tname","require","姓名未填写"),
            array("tposition","require","职称未填写"),
            array("tstore","require","门店未填写"),
            array("tcase","require","案例数未填写"),
            array("tpop","require","人气数未填写"),
            array("tdesign","require","设计宣言未填写"),
        );
        $this->data->set_check($check);
        $msgArr=$this->data->call_check($_POST);
        if(!empty($msgArr)){
            msg(implode(" | ",$msgArr));
        }
        if($_FILES['timage']['error']!=4){
            $fileName="timage";
            $fileSize=1*1024*1024;
            $fileType=array("jpg","jpeg","gif","png","bmp");
            $uploadDir="upload";
            $uploadobj=new upload($fileName,$fileSize,$fileType,$uploadDir);
            $_POST['timage']=$uploadobj->run();
        }else{
            msg("亲，头像未上传");
        }
        $resid=$this->data->add($_POST);
        if($resid>0){
            msg("亲，添加成功",U(__CLASS__,"index"));
        }else{
            msg("亲，添加失败");
        }
    }
    function update(){
        $id=intval($_GET[$this->data->pri]);
        $this->resone=$this->data->checkid($id);
        if($_SESSION['flag']=='y'){
            $this->display();
        }else{
            msg("亲，权限不够");
        }
    }
    function updateTodo(){
        $id=intval($_GET[$this->data->pri]);
        $this->resone=$this->data->checkid($id);
        $check=array(
            array("tname","require","姓名未填写"),
            array("tposition","require","职称未填写"),
            array("tstore","require","门店未填写"),
            array("tcase","require","案例数未填写"),
            array("tpop","require","人气数未填写"),
            array("tdesign","require","设计宣言未填写"),
        );
        $this->data->set_check($check);
        $msgArr=$this->data->call_check($_REQUEST);
        if(!empty($msgArr)){
            msg(implode(" | ",$msgArr));
        }
        if($_FILES['timage']['error']!=4){
            $fileName="timage";
            $fileSize=1*1024*1024;
            $fileType=array("jpg","jpeg","gif","png","bmp");
            $uploadDir="upload";
            $uploadobj=new upload($fileName,$fileSize,$fileType,$uploadDir);
            $_REQUEST['timage']=$uploadobj->run();
        }
        $result=$this->data->save($_REQUEST);
        if($result){
            msg("亲，更新成功",U(__CLASS__,"index"));
        }else{
            msg("亲，更新失败");
        }
    }
    function delete(){
        $id=intval($_GET[$this->data->pri]);
        $resone=$this->data->checkid($id);
        if($_SESSION['flag']=='y'){
            $resid=$this->data->delete($id);
        }else{
            msg("亲，权限不够");
        }
        if($resid>0){
            @unlink($resone['timage']);
            msg("亲，添加成功",U(__CLASS__,"index"));
        }else{
            msg("亲，添加失败");
        }
    }
}