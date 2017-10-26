<?php
/**
 * Created by PhpStorm.
 * User: jiang
 * Date: 2017/8/21/021
 * Time: 14:54
 */
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");
class db{
    var $mysqli;
    var $sql;
    /********连接数据库********/
    function __construct($dbhost,$dbuser,$dbpwd,$dbdatabase,$dbcharset='utf8'){
        $this->mysqli=@new mysqli($dbhost,$dbuser,$dbpwd,$dbdatabase);
        if(mysqli_connect_errno()){
            die("mysql链接错误".mysqli_connect_error());
        }
        $this->mysqli->query("set names ".$dbcharset);
    }
    /**************执行语句************/
    function mysql_exec($sql){
//        var_dump($sql);
        $this->sql=$sql;
        $result=$this->mysqli->query($this->sql);
        if(is_bool($result)){
            if($result==false){
                $this->msql_notice();
            }else{
                return $result;
            }
        }else{
            $arr=array();
            while ($row=$result->fetch_assoc()){
                $arr[]=$row;
            }
            return $arr;
        }

    }
    function msql_notice(){
        require_once ("notice.php");
        die;
    }
    /****************获得一条记录*****************/
    function mysql_getOne($sql){
        $findOne=$this->mysql_exec($sql);
        return array_pop($findOne);
    }
    /****************获得多条记录*****************/
    function mysql_getAll($sql){
        return $this->mysql_exec($sql);
    }
    /****************获得记录数*****************/
    function mysql_getCount($sql){
        $result=$this->mysql_getOne($sql);
        return intval($result['count(*)']);
    }
}