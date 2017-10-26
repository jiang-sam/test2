<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/8/30/030
 * Time: 21:59
 */
class team extends top{
    function index(){
        $pageid=(!isset($_GET['pageid'])||empty($_GET['pageid'])||intval($_GET['pageid'])<=0)?"1":$_GET['pageid'];
        $perpage=4;
        $result=$this->data->page($pageid,$perpage,"");
        $this->arr=$result['arr'];
        $this->pagestr=$result['pagestr'];
        $this->display();
    }
    function views(){
        $id=intval($_GET[$this->data->pri]);
        $this->resone=$this->data->where($this->data->pri."=".$id)->find();
        $this->display();
    }
}