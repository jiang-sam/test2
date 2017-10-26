<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/8/21/021
 * Time: 18:52
 */
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");
class data{
    var $tbname;
    var $pri;
    var $columnsArr;
    var $sql;
    var $db;
    var $field="*";
    var $where="1";
    var $order="";
    var $limit="";
    var $join="";
    var $auto="";
    var $check="";
    function __construct($tbname,$db){
        $this->db=$db;
        $this->tbname=$tbname;
        $this->mysql_columns();
    }
    /********表字段***********/
    function mysql_columns(){
        $findOne=$this->db->mysql_getOne("show tables like '%".$this->tbname."%'");
            if(!empty($findOne)){
            $arr=$this->db->mysql_getAll("show columns from $this->tbname");
            foreach ($arr as $k=>$v) {
                if ($v['Key'] == 'PRI') {
                    $this->pri = $v['Field'];
                } else {
                    $this->columnsArr[] = $v['Field'];
                }
            }
        }
    }
    /***********执行语句****************/
    function query($sql){
        $this->sql=$sql;
        return $this->db->mysql_exec($this->sql);
    }
    /***********添加***************/
    function add($insertArr){
        $sql="insert into $this->tbname set ";
        foreach ($insertArr as $k=>$v){
            if(in_array($k,$this->columnsArr)){
                $sql.= "$k='$v',";
            }
        }
        $sql=substr($sql,0,-1);
        $this->query($sql);
        return $this->db->mysqli->insert_id;
    }
    /***********更新***************/
    function save($savetArr){
        $sql="update $this->tbname set ";
        foreach ($savetArr as $k=>$v){
            if(in_array($k,$this->columnsArr)){
                $sql.= "$k='$v',";
            }
        }
        $sql=substr($sql,0,-1);
        @$sql .=" where ".$this->pri."=".$savetArr[$this->pri];
        return $this->query($sql);
    }
    /***********检查***************/
    function checkid($id){
        if($id<=0){
            msg("亲，id的有效性有问题");
        }
        $resOne=$this->where("$this->pri=$id")->find();
        if(empty($resOne)){
            msg("亲，id的真实性有问题");
        }
        return $resOne;
    }
    /***********删除***************/
    function delete($id){
        @$sql="delete from $this->tbname where $this->pri=".$id;
        $this->query($sql);
        return $this->db->mysqli->affected_rows;
    }
    /***********查找***************/
    function find(){
        $sql="select $this->field from $this->tbname $this->join where $this->where $this->limit";
        $this->reset();
        return $this->db->mysql_getOne($sql);
    }
    /***********查询条数***************/
    function mysql_count(){
        $countArr=$this->field("count(*)")->find();
        return intval($countArr['count(*)']);
    }
    /***********查询多条***************/
    function select(){
        $sql="select $this->field from $this->tbname $this->join where $this->where $this->order $this->limit";
        $this->reset();
        return $this->db->mysql_getAll($sql);
    }
    /***********重置***************/
    function reset(){
         $this->field="*";
         $this->where="1";
         $this->order="";
         $this->limit="";
         $this->join="";
    }
    /***********条件***************/
    function where($where){
        $this->where=empty($where)? 1: $where;
        return $this;
    }
    /***********字段***************/
    function field($field){
        $this->field=empty($field) ? "*" : $field;
        return $this;
    }
    /***********排序***************/
    function order($order){
        $this->order=empty($order) ? "" :"order by $order";
        return $this;
    }
    /***********分页传参***************/
    function limit($limit){
        $this->limit=empty($limit) ? "" :"limit $limit";
        return $this;
    }
    /***********连表***************/
    function join($join){
        $this->join=$join;
        return $this;
    }
    /***********分页***************/
    function page($pageid,$perpage,$URL){
        $count=$this->db->mysql_getCount("select count(*) from $this->tbname where $this->where");
        $maxpage=ceil($count/$perpage);
        $pageid= ($pageid>$maxpage)? $maxpage:$pageid;
        $start=($pageid-1)*$perpage;
        $start=($start<0)? 0:$start;
        $arr=$this->limit("$start,$perpage")->select();
        $pagestr=$this->pagination($pageid,$maxpage,$URL);
        return $page=array(
            'arr'=>$arr,
            'pagestr'=>$pagestr
        );
    }
    /***********分页字符串***************/
    function pagination($pageid,$maxpage,$url){
        if(empty($url)){
            $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        }
        if (strstr($url,"pageid")){
            $url=explode("&",$url);
            array_pop($url);
            $url=implode("&",$url);
        }
        if(strstr($url,"?")){
            $x="&";
        }else{
            $x="?";
        }
        $_html="";
        if($maxpage>1){
            $_html .="<li><a href='".$url.$x."pageid=1'>首页</a></li> &nbsp;";
            $_html .="<li><a href='".$url.$x."pageid=".($pageid-1)."'>上一页</a></li> &nbsp;";
            $_html .="<li><a href='".$url.$x."pageid=".($pageid+1)."'>下一页</a></li>&nbsp; ";
            $_html .="<li><a href='".$url.$x."pageid=".$maxpage."'>末页</a></li> &nbsp;";
        }
        return $_html;
    }
    /***********自动完成***************/
    function set_auto($auto){
        $this->auto=$auto;
    }
    function call_auto($requireArr){
        foreach ($this->auto as $k=>$v){
            $filename=$v[0];
            $funcname=$v[1];
            $type=$v[2];
            if($type=='function'){
                if(!empty($v[3])){
                   @ $requireArr[$filename]=call_user_func($funcname,$v[3],$requireArr[$filename]);
                }else{
                   @ $requireArr[$filename]=call_user_func($funcname,$requireArr[$filename]);
                }
            }
        }
        return $requireArr;
    }
    /***********自动验证***************/
    function set_check($check){
        $this->check=$check;
    }
    function call_check($requireArr){
        foreach ($this->check as $k=>$v){
            $filename=$v[0];
            $funcname=$v[1];
            $tips=$v[2];
            if(!empty($msgArr[$filename])){
                continue;
            }
            if($funcname=='require'){
                if(empty($requireArr[$filename])){
                    $msgArr[$filename]=$tips;
                }
            }else if($funcname=='length'){
                if(strlen($requireArr[$filename])>$v[4]||strlen($requireArr[$filename])<$v[3]) {
                    $msgArr[$filename] = $tips . "长度应该在" . $v[3] . "-" . $v[4] . "之间";
                }
            }else if($funcname=='unique'){
                if(!empty($v[3])){
                    $where="$filename='".trim($requireArr[$filename])."'&&{$this->pri}!='".$requireArr[$this->pri]."'";
                }else{
                    $where="$filename='".$requireArr[$filename]."'";
                }
                $findone=$this->where($where)->find();
                if(!empty($findone)){
                    $msgArr[$filename]=$tips;
                }
            }
        }
        return @$msgArr;
    }
}


