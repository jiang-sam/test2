<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/8/30/030
 * Time: 16:08
 */
class blogs extends top{
    function views(){
        $id=intval($_GET[$this->data->pri]);
        $this->data->checkid($id);
        $this->data->query("update ".$this->data->tbname." set hits=hits+1 where ".$this->data->pri."='$id'");
        $this->resone=$this->data->where($this->data->pri."='$id'")->join("left join ".DB_PREFIX."users on ".DB_PREFIX."users.uid=".DB_PREFIX."blogs.uid left join ".DB_PREFIX."categories on ".DB_PREFIX."categories.cid=".DB_PREFIX."blogs.cid")->find();
        $this->display();
    }
}