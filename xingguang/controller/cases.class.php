<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/8/30/030
 * Time: 21:57
 */
class cases extends top{
    function index(){
        $pageid=(!isset($_GET['pageid'])||empty($_GET['pageid'])||intval($_GET['pageid'])<=0)?"1":$_GET['pageid'];
        $perpage=9;
       error_reporting(E_ALL^E_NOTICE);
        if(!isset($_GET['sid'])&&!isset($_GET['aid'])&&!isset($_GET['lid'])){
            $_SESSION['where']=array();
        }
        if(isset($_GET['sid'])&&!empty($_GET['sid'])){
            $_SESSION['where'][DB_PREFIX."cases.sid"]=$_GET['sid'];
        }else if($_GET['sid']=='0'){
           unset( $_SESSION['where'][DB_PREFIX."cases.sid"]);
        }
        if(isset($_GET['aid'])&&!empty($_GET['aid'])){
            $_SESSION['where'][DB_PREFIX."cases.aid"]=$_GET['aid'];
        }else if($_GET['aid']=='0'){
            unset( $_SESSION['where'][DB_PREFIX."cases.aid"]);
        }
        if(isset($_GET['lid'])&&!empty($_GET['lid'])){
            $_SESSION['where'][DB_PREFIX."cases.lid"]=$_GET['lid'];
        }else if($_GET['lid']=='0'){
            unset( $_SESSION['where'][DB_PREFIX."cases.lid"]);
        }
        foreach ($_SESSION['where'] as $key=>$value){
            $where .="$key=$value&&";
        }
        $where=substr($where,0,-2);
        $result=$this->data->where($where)->join("left join ".DB_PREFIX."style on ".DB_PREFIX."style.sid=".DB_PREFIX."cases.sid left join ".DB_PREFIX."area on ".DB_PREFIX."area.aid=".DB_PREFIX."cases.aid left join ".DB_PREFIX."layout on ".DB_PREFIX."layout.lid=".DB_PREFIX."cases.lid")->page($pageid,$perpage,"");
        $this->arr=$result['arr'];
        $this->pagestr=$result['pagestr'];
        $stylelinkModel=new data(DB_PREFIX."style",$this->data->db);
        $this->styleArr=$stylelinkModel->select();
        $arealinkModel=new data(DB_PREFIX."area",$this->data->db);
        $this->areaArr=$arealinkModel->select();
        $layoutlinkModel=new data(DB_PREFIX."layout",$this->data->db);
        $this->layoutArr=$layoutlinkModel->select();
        $this->display();
    }
    function views(){
        $id=intval($_GET[$this->data->pri]);
        $this->resone=$this->data->where($this->data->pri."=".$id)->join("left join ".DB_PREFIX."style on ".DB_PREFIX."style.sid=".DB_PREFIX."cases.sid left join ".DB_PREFIX."area on ".DB_PREFIX."area.aid=".DB_PREFIX."cases.aid left join ".DB_PREFIX."layout on ".DB_PREFIX."layout.lid=".DB_PREFIX."cases.lid")->find();
        $this->display();
    }
}