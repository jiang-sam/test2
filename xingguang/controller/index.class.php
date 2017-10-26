<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/25/025
 * Time: 0:28
 */
class index extends  top{
    function __construct($data,$smarty){
        parent::__construct($data, $smarty);
        $customerlink=new data(DB_PREFIX."customer",$this->data->db);
        $this->customerArr=$customerlink->limit(6)->select();
        $blogsModel=new data(DB_PREFIX."blogs",$this->data->db);
        $this->blogsArr=$blogsModel->order("bid desc")->where("cid=1")->select();
        $teamModel=new data(DB_PREFIX."team",$this->data->db);
        $this->teamArr=$teamModel->limit(3)->order("tid desc")->select();
    }
    function index(){
        $this->display();
    }
}