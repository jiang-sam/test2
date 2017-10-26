<?php /* Smarty version Smarty-3.1.9, created on 2017-10-05 13:07:24
         compiled from ".\templates\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:144959d5be0c2e62b5-01899301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0b4c7f14ad8217deb80608a4af1ab1688b46c9f' => 
    array (
      0 => '.\\templates\\sidebar.html',
      1 => 1504433921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144959d5be0c2e62b5-01899301',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59d5be0c351c32_29544143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d5be0c351c32_29544143')) {function content_59d5be0c351c32_29544143($_smarty_tpl) {?><div id="left" class="fl">
    <div id="lnav" style="height:auto;">
        <?php if ($_GET['c']=='about'){?>
        <div class="text"><span>联系我们<span class="text1">&nbsp; About us</span></span></div>
        <?php }?>
        <?php if ($_GET['c']=='cases'){?>
        <div class="text"><span>精品案例<span class="text1">&nbsp; Cases</span></span></div>
        <?php }?>
        <?php if ($_GET['c']=='team'){?>
        <div class="text"><span>设计团队<span class="text1">&nbsp; Team</span></span></div>
        <?php }?>
        <?php if ($_GET['c']=='contact'){?>
        <div class="text"><span>联系我们<span class="text1">&nbsp; Contact us</span></span></div>
        <?php }?>
        <div class="lxwm">
            <ul>
                <li><a href="<?php echo U('about','index');?>
">&nbsp;&nbsp;关于我们</a></li>
                <li><a href="<?php echo U('cases','index');?>
">&nbsp;&nbsp;精品案例</a></li>
                <li><a href="<?php echo U('team','index');?>
">&nbsp;&nbsp;设计团队</a></li>
                <li><a href="<?php echo U('contact','index');?>
">&nbsp;&nbsp;联系我们</a></li>

            </ul>
        </div>
    </div>
    <div id="leftbottom" class="pc_overflow">
        <div class="lbt">
            <ul>
                <li class="li1"><a href="index.php">&nbsp;&nbsp;参观报名</a></li>
                <li class="li2"><a href="<?php echo U('make','yuyue');?>
">&nbsp;&nbsp;预约设计</a></li>
                <li class="li3"><a href="http://wpa.qq.com/msgrd?v=3&uin=2254682944" target="_blank">&nbsp;&nbsp;在线咨询</a></li>
                <li class="last li4"><a href="<?php echo U('contact','index');?>
">&nbsp;&nbsp;联系我们</a></li>
            </ul>
        </div>
        <div class="img mt50"></div>
    </div>
</div><?php }} ?>