<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/8/30/030
 * Time: 16:42
 */
class contact extends top{
    function index(){
        $blogsModel=new data(DB_PREFIX."blogs",$this->data->db);
        $this->resone=$blogsModel->order("bid desc")->where("cid=6")->find();
        $this->display();
    }
}