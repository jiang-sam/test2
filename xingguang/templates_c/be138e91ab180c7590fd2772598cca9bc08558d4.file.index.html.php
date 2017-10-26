<?php /* Smarty version Smarty-3.1.9, created on 2017-10-05 13:07:27
         compiled from ".\templates\cases\index.html" */ ?>
<?php /*%%SmartyHeaderCode:199659d5be0fe8d320-44695164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be138e91ab180c7590fd2772598cca9bc08558d4' => 
    array (
      0 => '.\\templates\\cases\\index.html',
      1 => 1504324659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199659d5be0fe8d320-44695164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'styleArr' => 0,
    'v' => 0,
    'areaArr' => 0,
    'vv' => 0,
    'layoutArr' => 0,
    'vvv' => 0,
    'arr' => 0,
    'k' => 0,
    'pagestr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59d5be100e9dd6_79198796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d5be100e9dd6_79198796')) {function content_59d5be100e9dd6_79198796($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!--设计案例-->
    <div id="case" class="pc_overflow">
        <div id="case_son" class="w980 mt50">
            <!--左侧-->
           <?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!--右侧-->
            <style>
                .cur{
                    background: #403127;
                    color: #ffffff !important;
                }
            </style>
            <div id="right" class="fr">
                <div><span>设计案例　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　Case</span></div>
                <div><<?php echo @TP;?>
img/ src="<?php echo @TP;?>
img//line.png" class="mt2" width="723" /></div>
                <div class="nav  mt15">
                    <div class="nav_l fl">
                        <ul class="pc_overflow">
                            <li><span class="ml5">&nbsp;装饰风格：</span></li>
                            <li><span class="ml5">&nbsp;装饰面积：</span></li>
                            <li class="last"><span class="ml5">&nbsp;装饰户型：</span></li>
                        </ul>
                    </div>
                    <div class="nav_r fr">
                        <ul class="ml2">
                            <li>
                                <a href=<?php echo U('cases','index',"sid=0");?>
 <?php if (empty($_SESSION['where']['jzy_xingguang_cases.sid'])){?>class="cur"<?php }?>}> &nbsp;全部&nbsp;</a>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['styleArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                    <a href=<?php echo U('cases','index',"sid=".((string)$_smarty_tpl->tpl_vars['v']->value['sid']));?>
  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_SESSION['where']['jzy_xingguang_cases.sid']==$_tmp1){?>class="cur"<?php }?>}>&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['casestyle'];?>
&nbsp;</a>
                                <?php } ?>
                            </li>
                            <li>
                                <a href=<?php echo U('cases','index',"aid=0");?>
 <?php if (empty($_SESSION['where']['jzy_xingguang_cases.aid'])){?>class="cur"<?php }?>}>&nbsp;全部&nbsp;</a>
                                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['areaArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
                                    <a href=<?php echo U('cases','index',"aid=".((string)$_smarty_tpl->tpl_vars['vv']->value['aid']));?>
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['vv']->value['aid'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_SESSION['where']['jzy_xingguang_cases.aid']==$_tmp2){?>class="cur"<?php }?>>&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['casearea'];?>
&nbsp;</a>
                                <?php } ?>
                            </li>
                            <li class="last">
                                <a href=<?php echo U('cases','index',"lid=0");?>
 <?php if (empty($_SESSION['where']['jzy_xingguang_cases.lid'])){?>class="cur"<?php }?>}>&nbsp;全部&nbsp;</a>
                                <?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layoutArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value){
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>
                                    <a href=<?php echo U('cases','index',"lid=".((string)$_smarty_tpl->tpl_vars['vvv']->value['lid']));?>
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['vvv']->value['lid'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_SESSION['where']['jzy_xingguang_cases.lid']==$_tmp3){?>class="cur"<?php }?>>&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['caselayout'];?>
&nbsp;</a>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <div id="xdjy" class="pc_overflow fr"  style="display:block;">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <div id="xdjy_son" class="mt30 fl <?php if ($_smarty_tpl->tpl_vars['k']->value%3!=0){?>ml15<?php }?>" >
                        <a href=<?php echo U('cases','views',"caseid=".((string)$_smarty_tpl->tpl_vars['v']->value['caseid']));?>
>
                            <div><img src="admin/<?php echo $_smarty_tpl->tpl_vars['v']->value['caseimage'];?>
" width="225" height="166" class="pic"/></div>
                            <div><span class="disBlock"><?php echo $_smarty_tpl->tpl_vars['v']->value['casename'];?>
　　<?php echo $_smarty_tpl->tpl_vars['v']->value['casestyle'];?>
</span></div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <div id="pages" style="float:right;">
                    <ul>
                        <?php echo $_smarty_tpl->tpl_vars['pagestr']->value;?>

                    </ul>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!--footer-->
   <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>