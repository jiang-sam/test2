<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/8/29/029
 * Time: 14:43
 */
class customer extends top{
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
            array("customername","require","合作客户名称未填写"),
            array("customername","unique","合作客户名称已存在"),
            array("customerurl","require","合作客户网址未填写")
        );
        $this->data->set_check($check);
        $msgArr=$this->data->call_check($_POST);
        if(!empty($msgArr)){
            msg(implode(" | ",$msgArr));
        }
        if($_FILES['customerimage']['error']!=4){
            $fileName="customerimage";
            $fileSize=1*1024*1024;
            $fileType=array("jpg","jpeg","gif","png","bmp");
            $uploadDir="upload";
            $uploadobj=new upload($fileName,$fileSize,$fileType,$uploadDir);
            $_POST['customerimage']=$uploadobj->run();
        }else{
            msg("亲，合作客户图像未上传");
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
            array("customername","require","合作客户名称未填写"),
            array("customername","unique","合作客户名称已存在",1),
            array("customerurl","require","合作客户网址未填写")
        );
        $this->data->set_check($check);
        $msgArr=$this->data->call_check($_REQUEST);
        if(!empty($msgArr)){
            msg(implode(" | ",$msgArr));
        }
        if($_FILES['customerimage']['error']!=4){
            $fileName="customerimage";
            $fileSize=1*1024*1024;
            $fileType=array("jpg","jpeg","gif","png","bmp");
            $uploadDir="upload";
            $uploadobj=new upload($fileName,$fileSize,$fileType,$uploadDir);
            $_POST['customerimage']=$uploadobj->run();
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
            $rows=$this->data->delete($id);
        }else{
            msg("亲，权限不够");
        }
        if($rows>0){
            @unlink($resone['customerimage']);
            msg("亲，删除成功",U(__CLASS__,"index"));
        }else{
            msg("亲，删除失败");
        }
    }
}