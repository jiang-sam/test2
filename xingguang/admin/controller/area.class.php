<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/9/1/001
 * Time: 20:23
 */
   class area extends top{
       function __construct($data,$smarty){
           parent::__construct($data, $smarty);
           checked_login();
       }
       function index()
       {
           $pageid = (!isset($_GET['pageid']) || empty($_GET['pageid']) || intval($_GET['pageid']) <= 0) ? "1" : $_GET['pageid'];
           $perpage = 5;
           $result = $this->data->page($pageid, $perpage, "");
           $this->arr = $result['arr'];
           $this->pagestr = $result['pagestr'];
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
               array("casearea","require","装饰面积未填写"),
               array("casearea","unique","装饰面积已存在")
           );
           $this->data->set_check($check);
           $msgArr=$this->data->call_check($_POST);
           if(!empty($msgArr)){
               msg(implode(" | ",$msgArr));
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
           $this->data->checkid($id);
           $check=array(
               array("casearea","require","装饰面积未填写"),
               array("casearea","unique","装饰面积已存在",1)
           );
           $this->data->set_check($check);
           $msgArr=$this->data->call_check($_REQUEST);
           if(!empty($msgArr)){
               msg(implode(" | ",$msgArr));
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
           $this->data->checkid($id);
           if($_SESSION['flag']=='y'){
               $resid= $this->data->delete($id);
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