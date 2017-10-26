<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/9/3/003
 * Time: 18:11
 */
class make extends top{
    function yuyue(){
        $this->display();
    }
    function addTodo(){
        $check=array(
            array("xingming","require","姓名未填写"),
            array("shouji","require","手机未填写"),
            array("shouji","length","手机号码应为11位数",11,11),
            array("email","require","邮箱未填写"),
            array("liuyan","require","留言未填写")
        );
        $this->data->set_check($check);
        $msgArr=$this->data->call_check($_POST);
        if(!empty($msgArr)){
            msg(implode(" | ",$msgArr));
        }
        $auto=array(
            array("createtime","time","function")
        );
        $this->data->set_auto($auto);
        $_POST=$this->data->call_auto($_POST);
        $resid=$this->data->add($_POST);
        if($resid>0){
            msg("亲，预约成功",U("index","index"));
        }else{
            msg("亲，预约失败");
        }
    }
    function delete(){
        $id=intval($_GET[$this->data->pri]);
        $this->data->checkid($id);
        if($_SESSION['flag']=='y'){
            $resid=$this->data->delete($id);
        }else{
            msg("亲，权限不够");
        }
        if($resid>0){
            msg("亲，删除成功","admin/index.php");
        }else{
            msg("亲，删除失败");
        }
    }
    function views(){
        $id=intval($_GET[$this->data->pri]);
        $this->data->checkid($id);
        $this->data->query("update ".$this->data->tbname." set flag='n' where ".$this->data->pri."='$id'");
        $this->makeArr=$this->data->where("mid=$id")->find();
        $this->display();
    }
    function read(){

    }
}