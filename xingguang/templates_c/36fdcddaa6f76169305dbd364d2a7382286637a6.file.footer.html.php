<?php /* Smarty version Smarty-3.1.9, created on 2017-09-19 23:53:04
         compiled from ".\templates\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:736659c13d60d14213-28811546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36fdcddaa6f76169305dbd364d2a7382286637a6' => 
    array (
      0 => '.\\templates\\footer.html',
      1 => 1504278768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '736659c13d60d14213-28811546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'friendlinkArr' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59c13d60db8c20_46329206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c13d60db8c20_46329206')) {function content_59c13d60db8c20_46329206($_smarty_tpl) {?><div id="footer" class="pc_overflow">
    <div class="footerson w980">
        <p class="p1 mt10">
            <font class="a1">友情链接:</font>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friendlinkArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['furl'];?>
" target="_blank nofollow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['fname']);?>
</a>
            <?php } ?>
        </p>
        <img class="img1" src="<?php echo @TP;?>
img/footer1.png" width="258" height="51" />
        <img class="img1" src="<?php echo @TP;?>
img/footer2.png" width="258" height="51" />
        <img class="img1" src="<?php echo @TP;?>
img/footer3.png" width="258" height="51" />
        <p class="mt10"><a href="<?php echo U('about','index');?>
">公司简介</a>  |   <a href="<?php echo U('contact','index');?>
">联系我们</a>  |  <a href="http://wpa.qq.com/msgrd?v=3&uin=2254682944" target="_blank">在线咨询</a>  |   <a href="<?php echo U('contact','index');?>
">网站地图</a></p>
        <div class="footerb">
            <p class="mt5 fl">@版权所有 星光装饰设计有限公司<br />皖ICP备120968号</p>
            <ul class="fr pc_overflow">
                <li class="fl mt10"><p>分享到:</p></li>
                <li class="fl ml10 mt10"><img src="<?php echo @TP;?>
img/qqkj.png" width="24" height="24" /></li>
                <li class="fl ml10 mt10"><img src="<?php echo @TP;?>
img/weix.png" width="24" height="24" /></li>
                <li class="fl ml10 mt10"><img src="<?php echo @TP;?>
img/txwb.png" width="24" height="24" /></li>
                <li class="fl ml10 mt10"><img src="<?php echo @TP;?>
img/xlwb.png" width="24" height="24" /></li>
                <li class="fl ml10 mt10"><img src="<?php echo @TP;?>
img/tieba.png" width="24" height="24" /></li>
                <li class="fl ml10 mt10"><img src="<?php echo @TP;?>
img/gengd.png" width="24" height="24" /></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html><?php }} ?>