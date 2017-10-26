<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/8/28/028
 * Time: 21:27
 */
class index extends  top{
    function __construct($data,$smarty){
        parent::__construct($data, $smarty);
    }
    function index(){
        checked_login();
        $viewModel=new data(DB_PREFIX."view",$this->data->db);
        $findone=$viewModel->where("username='".$_SESSION['username']."'")->find();
        $viewArr=array(
            'username'=>$_SESSION['username'],
            'avatar'=>$_SESSION['avatar'],
            'vtime'=>time()
        );
        if (empty($findone)){
            $viewModel->add($viewArr);
        }else{
            $viewModel->query("update ".$viewModel->tbname." set vtime=".time()." where vid=".$findone['vid']);
        }
        $pageid=(!isset($_GET['pageid'])||empty($_GET['pageid'])||intval($_GET['pageid'])<=0)?"1":$_GET['pageid'];
        $perpage=5;
        $makeModel=new data(DB_PREFIX."make",$this->data->db);
        $result=$makeModel->order("mid desc")->page($pageid,$perpage,"");
        $this->arr=$result['arr'];
        $this->pagestr=$result['pagestr'];
        $time=date("Y-m-d",time());
        $stime=strtotime($time."0:0:0");
        $this->view=$viewModel->order("vtime desc")->where("vtime>".$stime."&&vtime<".($stime+86400))->select();
        $this->num=$viewModel->where("vtime>".$stime."&&vtime<".($stime+86400))->mysql_count();
        $this->display();
    }
   
}