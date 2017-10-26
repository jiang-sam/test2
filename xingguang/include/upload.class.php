<?php
/**
 * Created by PhpStorm.
 * User: jaing
 * Date: 2017/8/19/019
 * Time: 10:36
 */
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");
class upload{
    var $fileName;
    var $fileSize;
    var $fileType;
    var $uploadDir;
    var $errorNo;
    var $ext;
    var $lujing;
    function __construct($fileName,$fileSize,$fileType,$uploadDir){
        $this->fileName=$fileName;
        $this->fileSize=$fileSize;
        $this->fileType=$fileType;
        $this->uploadDir=$uploadDir;
        $patharr=pathinfo($_FILES[$this->fileName]['name']);
        $this->ext=$patharr['extension'];
    }
    function isupload(){
        if(!is_uploaded_file($_FILES[$this->fileName]['tmp_name'])||$_FILES[$this->fileName]['error']==3||$_FILES[$this->fileName]['error']==4){
            $this->errorNo=1;
            $this->error();
        }
    }
    function fileSize(){
        if($_FILES[$this->fileName]['size']>$this->fileSize||$_FILES[$this->fileName]['error']==1||$_FILES[$this->fileName]['error']==2){
            $this->errorNo=2;
            $this->error();
        }
    }
    function fileType(){
        if(!in_array(strtolower($this->ext),$this->fileType)){
            $this->errorNo=3;
            $this->error();
        }
    }
    function error(){
        if($this->errorNo==1){
            $tex="文件上传失败";
        }else if($this->errorNo==2){
            $tex="文件过大";
        }else if($this->errorNo==3){
            $tex="文件格式不正确";
        }
        die($tex);
    }
    function Movefile(){
        $new_name=time().".".$this->ext;
        if(!file_exists($this->uploadDir)){
            mkdir($this->uploadDir,0777,true);
        }
        $result=move_uploaded_file($_FILES[$this->fileName]['tmp_name'],$this->uploadDir."/".$new_name);
        $this->lujing=$this->uploadDir."/".$new_name;
        if($result){
            echo "文件上传成功".$this->lujing;
        }else{
            $this->errorNo=1;
            $this->error();
        }
    }
    function run(){
        $this->isupload();
        $this->fileType();
        $this->fileSize();
        $this->Movefile();
        return $this->lujing;
    }
}
