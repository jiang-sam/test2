<?php /* Smarty version Smarty-3.1.9, created on 2017-09-19 23:53:04
         compiled from ".\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1705759c13d60c574d0-52238881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993a4f4a79418d6aa41c40045b97b005c86ba121' => 
    array (
      0 => '.\\templates\\header.html',
      1 => 1504278862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1705759c13d60c574d0-52238881',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59c13d60d01696_97864780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c13d60d01696_97864780')) {function content_59c13d60d01696_97864780($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>星光装饰</title>
    <script type="text/javascript" src="<?php echo @TP;?>
js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo @TP;?>
js/global.js"></script>
    <script type="text/javascript" src="<?php echo @TP;?>
js/Marquee-1.0.js"></script>
    <script src="<?php echo @TP;?>
js/jquery.slides.min.js"></script>
</head>

<body>
<link rel="stylesheet" type="text/css" href="<?php echo @TP;?>
css/basic1.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @TP;?>
css/style1.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @TP;?>
css/basic.css" />
<link rel="stylesheet" type="text/css" href="<?php echo @TP;?>
css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="./<?php echo @TP;?>
js/DD_belatedPNG.js"></script>
<script type="text/javascript">
    DD_belatedPNG.fix('*');
</script>
<![endif]-->



<script>
    <!--手风琴-->
    $(function(){
        accordion(".teaml li",65,233);
    });
    <!--文字滚动-->
    $(function(){
        $('#marquee6').kxbdSuperMarquee({
            isMarquee:true,
            isEqual:false,
            scrollDelay:70,
            controlBtn:{up:'#goUM',down:'#goDM'},
            direction:'up'
        });
    });
    <!--返回顶部-->
    $(function(){
        $(window).scroll(function() {
            if($(window).scrollTop() >= 100){
                $('.actGotop').fadeIn(300);
            }else{
                $('.actGotop').fadeOut(300);
            }
        });
        $('.actGotop').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);});
    });
    <!--轮播
    $(function() {
        $('#slides').slidesjs({
            play:{
                active: false,
                effect: "fade",
                auto: true,
                interval: 4000
            },
            effect: {
                fade: {
                    speed: 1500,
                    crossfade: true
                }
            },
            pagination: {
                active: true
            },
            navigation:{
                active: false
            }
        });
    });
</script>

<!--<div class="actGotop"><a href="javascript:;" title="Top"></a></div>-->
<!--导航条-->
<div id="nav">
    <div class="navson w980">
        <div class="navsonl fl">
            <a href="index.php"><img class="mt25" src="<?php echo @TP;?>
img/logo.png" width="168" height="73" /></a>
        </div>
        <div class="navsonr fr">
            <div class="pc_overflow">

                <!---<img class="ml15 mt15 fr" src="<?php echo @TP;?>
img/phone.png" width="193" height="31" />-->
                <?php if (!empty($_SESSION['uid'])){?>
                <div class="fr mt10" style="margin-right:30px;"><a href="admin/index.php" style="color:#ffffff">欢迎 <?php echo $_SESSION['username'];?>
 回来</a>&nbsp;&nbsp;&nbsp;<a href="admin/<?php echo U('users','loginOut');?>
" style="color:#ffffff">注销</a></div>
                <?php }else{ ?>
                <div class="fr mt10" style="margin-right:30px;"><a href="admin/<?php echo U('users','reg');?>
" style="color:#ffffff">注册</a>&nbsp;&nbsp;&nbsp;<a href="admin/<?php echo U('users','login');?>
" style="color:#ffffff">登录</a></div>
                <?php }?>
            </div>
            <ul class="mt5">
                <li class="fl">
                    <a href="index.php">
                		<span>
            				<span class="disBlock">首页</span><span class="span2">Home</span>
                    	</span>
                    </a>
                </li>
                <li class="fl">
                    <a href="<?php echo U('about','index');?>
">
                		<span>
            				<span class="disBlock">关于我们</span><span class="span2">About us</span>
                    	</span>
                    </a>
                </li>
                <li class="fl">
                    <a href="<?php echo U('cases','index');?>
">
                		<span>
            				<span class="disBlock">精品案例</span><span class="span2">Excellent case</span>
                    	</span>
                    </a>
                </li>
                <li class="fl">
                    <a href="<?php echo U('team','index');?>
">
                		<span>
            				<span class="disBlock">设计团队</span><span class="span2">Design team</span>
                    	</span>
                    </a>
                </li>
                <li class="fl">
                    <a href="<?php echo U('product','index');?>
">
                		<span>
            				<span class="disBlock">产品展示</span><span class="span2">Display</span>
                    	</span>
                    </a>
                </li>
                <li class="fl">
                    <a href="<?php echo U('contact','index');?>
">
                		<span>
            				<span class="disBlock">联系我们</span><span class="span2">Contact us</span>
                    	</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="clear"></div><?php }} ?>