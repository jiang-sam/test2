<?php
/**
 * Created by PhpStorm.
 * User: jaing
 * Date: 2017/8/30/030
 * Time: 22:31
 */
class cases extends top{
    function __construct($data,$smarty){
        parent::__construct($data, $smarty);
        checked_login();
    }
    function index(){
        $pageid=(!isset($_GET['pageid'])||empty($_GET['pageid'])||intval($_GET['pageid'])<=0)?"1":$_GET['pageid'];
        $perpage=5;
        $result=$this->data->join("left join ".DB_PREFIX."style on ".DB_PREFIX."style.sid=".DB_PREFIX."cases.sid left join ".DB_PREFIX."area on ".DB_PREFIX."area.aid=".DB_PREFIX."cases.aid left join ".DB_PREFIX."layout on ".DB_PREFIX."layout.lid=".DB_PREFIX."cases.lid")->page($pageid,$perpage,"");
        $this->arr=$result['arr'];
        $this->pagestr=$result['pagestr'];
        $this->display();
    }
    function add(){
        checked_login();
        $stylelinkModel=new data(DB_PREFIX."style",$this->data->db);
        $this->styleArr=$stylelinkModel->select();
        $arealinkModel=new data(DB_PREFIX."area",$this->data->db);
        $this->areaArr=$arealinkModel->select();
        $layoutlinkModel=new data(DB_PREFIX."layout",$this->data->db);
        $this->layoutArr=$layoutlinkModel->select();
        if($_SESSION['flag']=='y'){
        $this->display();
        }else{
            msg("亲，权限不够");
        }
    }
    function addTodo(){
        $check=array(
            array("casename","require","案例名称未填写"),
            array("casename","unique","案例名称已存在"),
            array("sid","require","装饰风格未选择"),
            array("aid","require","装饰面积未选择"),
            array("lid","require","装饰户型未选择")
        );
        $this->data->set_check($check);
        $msgArr=$this->data->call_check($_POST);
        if(!empty($msgArr)){
            msg(implode(" | ",$msgArr));
        }
        if($_FILES['caseimage']['error']!=4){
            $fileName="caseimage";
            $fileSize=1*1024*1024;
            $fileType=array("jpg","jpeg","gif","png","bmp");
            $uploadDir="upload";
            $uploadobj=new upload($fileName,$fileSize,$fileType,$uploadDir);
            $_POST['caseimage']=$uploadobj->run();
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
        $stylelinkModel=new data(DB_PREFIX."style",$this->data->db);
        $this->styleArr=$stylelinkModel->select();
        $arealinkModel=new data(DB_PREFIX."area",$this->data->db);
        $this->areaArr=$arealinkModel->select();
        $layoutlinkModel=new data(DB_PREFIX."layout",$this->data->db);
        $this->layoutArr=$layoutlinkModel->select();
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
            array("casename","require","案例名称未填写"),
            array("casename","unique","案例名称已存在",1),
            array("sid","require","装饰风格未选择"),
            array("aid","require","装饰面积未选择"),
            array("lid","require","装饰户型未选择")
        );
        $this->data->set_check($check);
        $msgArr=$this->data->call_check($_REQUEST);
        if(!empty($msgArr)){
            msg(implode(" | ",$msgArr));
        }
        if($_FILES['caseimage']['error']!=4){
            $fileName="caseimage";
            $fileSize=1*1024*1024;
            $fileType=array("jpg","jpeg","gif","png","bmp");
            $uploadDir="upload";
            $uploadobj=new upload($fileName,$fileSize,$fileType,$uploadDir);
            $_REQUEST['caseimage']=$uploadobj->run();
        }
        $resid=$this->data->save($_REQUEST);
        if($resid){
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
            @unlink($resone['caseimage']);
            msg("亲，删除成功",U(__CLASS__,"index"));
        }else{
            msg("亲，删除失败");
        }
    }
}