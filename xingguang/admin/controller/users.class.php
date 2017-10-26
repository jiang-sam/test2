<?php
//后台控制器
require_once ("../include/mail.class.php");
    class users extends top{
        function index(){
            checked_login();
            $pageid=(!isset($_GET['pageid'])||empty($_GET['pageid'])||intval($_GET['pageid'])<=0)?"1":$_GET['pageid'];
            $perpage=5;
            $result=$this->data->where("uid>1")->order("uid desc")->page($pageid,$perpage,"");
            $this->arr=$result['arr'];
            $this->pagestr=$result['pagestr'];
            $this->display();
        }
        function reg(){
                $this->display();
        }
        function regTodo(){
            $check=array(
               array("username","require","用户名未填写"),
               array("username","length","用户名长度不合法",6,20),
               array("username","unique","用户名已存在"),
               array("username","unique","邮箱已存在"),
               array("password","require","密码不能为空"),
               array("sex","require","性别不能为空"),
               array("city","require","城市不能为空"),
               array("code","require","验证码未填写"),
               array("fav","require","爱好不能为空")
            );
            $this->data->set_check($check);
            $msgArr=$this->data->call_check($_POST);
            if(!empty($msgArr)){
                msg(implode(" | ",$msgArr));
            }
             if(strtoupper($_POST['code'])!=$_SESSION['code']){
                msg("亲，验证码不正确");
            }
            if($_FILES['avatar']['error']!=4){
                $fileName="avatar";
                $fileSize=1*1024*1024;
                $fileType=array("jpg","jpeg","gif","png","bmp");
                $uploadDir="upload";
                $uploadobj=new upload($fileName,$fileSize,$fileType,$uploadDir);
                $_POST['avatar']=$uploadobj->run();
            }
            //自动完成
            $auto=array(
                array("password","md5","function"),
                array("regtime","time","function"),
                array("fav","implode","function",",")
            );
            $this->data->set_auto($auto);
            $_POST=$this->data->call_auto($_POST);
            $resid=$this->data->add($_POST);
            if($resid>0){
                msg("亲，注册成功",U("users","login"));
            }else{
                msg("亲，注册失败");
            }
        }
        function login(){
            $this->display();
        }
        function loginTodo(){
            if (empty($_POST['username'])||empty($_POST['password'])){
                msg("亲，登录信息不完整");
            }
            $findone=$this->data->where("username='".trim($_POST['username'])."'")->find();
            if(empty($findone)){
                msg("亲，用户名不存在");
            }
            if(md5($_POST['password'])!=$findone['password']){
                msg("亲，密码错误");
            }
            if(empty($_POST['code'])){
                msg("亲，验证码未填写");
            }else if(strtoupper($_POST['code'])!=$_SESSION['code']){
                msg("亲，验证码不正确");
            }
            $_SESSION['username']=$findone['username'];
            $_SESSION['flag']=$findone['flag'];
            $_SESSION['uid']=$findone['uid'];
            $_SESSION['avatar']=$findone['avatar'];
            msg("亲，登录成功",U("index","index"));
         }
        function loginOut(){
            unset($_SESSION['username']);
            unset($_SESSION['uid']);
            unset($_SESSION['avatar']);
            msg("亲，注销成功","../index.php");
        }
        function update(){
            checked_login();
            $id=intval($_GET[$this->data->pri]);
            $this->resone=$this->data->checkid($id);
            if($_SESSION['flag']=='y'||$_SESSION['uid']==$id){
                $this->display();
            }else{
                msg("亲，权限不够");
            }
        }
        function updateTodo(){
            $check=array(
                array("username","require","用户名未填写"),
                array("username","length","用户名长度不合法",6,20),
                array("username","unique","用户名已存在",1),
                array("mail","unique","邮箱已存在",1),
                array("sex","require","性别不能为空"),
                array("city","require","城市不能为空"),
                array("fav","require","爱好不能为空")
            );
            $this->data->set_check($check);
            $msgArr=$this->data->call_check($_REQUEST);
            if(!empty($msgArr)){
                msg(implode(" | ",$msgArr));
            }
                if($_FILES['avatar']['error']!=4){
                    $fileName="avatar";
                    $fileSize=1*1024*1024;
                    $fileType=array("jpg","jpeg","gif","png","bmp");
                    $uploadDir="upload";
                    $uploadobj=new upload($fileName,$fileSize,$fileType,$uploadDir);
                    $_REQUEST['avatar']=$uploadobj->run();

                }
                if(empty($_REQUEST['password'])){
                    unset($_REQUEST['password']);
                }else
                    $_REQUEST['password'] = md5($_REQUEST['password']) ;

            $auto=array(
                array("regtime","time","function"),
                array("fav","implode","function",",")
            );
            $this->data->set_auto($auto);
            $_REQUEST=$this->data->call_auto($_REQUEST);
            $result=$this->data->save($_REQUEST);
            if($result){
                msg("亲，更新成功",U(__CLASS__,"index"));
            }else{
                msg("亲，更新失败");
            }
        }
        function quanxian(){
            checked_login();
            $id=intval($_GET[$this->data->pri]);
            $this->resone=$this->data->checkid($id);
            if($_SESSION['uid']=='1'){
                $this->display();
            }else{
                msg("亲，权限不够");
            }
        }
        function quanxianTodo(){
            $id=intval($_GET[$this->data->pri]);
            $this->data->checkid($id);
            $rows=$this->data->save($_REQUEST);
            if($rows){
                msg("亲，权限设置成功",U(__CLASS__,"index"));
            }else{
                msg("亲，权限设置失败");
            }
        }
        function delete(){
            checked_login();
            $id=intval($_GET[$this->data->pri]);
            $resone=$this->data->checkid($id);
            if($_SESSION['flag']=='y'||$_SESSION['uid']==$id){
                $rows=$this->data->delete($id);
            }else{
                msg("亲，权限不够");
            }
            if($rows>0){
                @unlink($resone['timage']);
                msg("亲，删除成功",U(__CLASS__,"index"));
            }else{
                msg("亲，删除失败");
            }
        }
        function forgotpassword(){
            $this->display() ;     
        }
        function forgotpasswordTodo(){
            $email=trim($_POST['mail']);
            if(empty($email)){
                msg("亲，邮箱未填写");
            }
            $findone=$this->data->where("mail='$email'")->find();
            $mail = new MySendMail();
            $mail->setServer("smtp.exmail.qq.com", "xcx@kenuoedu.com", "designphp65531331");
            $mail->setFrom("xcx@kenuoedu.com");
            $mail->setReceiver($email);
            $password=rand(100000,999999);
            $updateArr=array(
                'uid'=>$findone['uid'],
                'password'=>md5($password)
            );
            $this->data->save($updateArr);
            $mail->setMailInfo("星光装饰网新密码重置", "尊敬 ".$findone['username']." 会员您好,您的新密码为: ".$password." ,请妥善保管好你的新密码,请勿告诉你的团伙!");
            $mail->sendMail();
            msg("亲，密码更新成功",U(__CLASS__,'login'));
        }
    }
?>