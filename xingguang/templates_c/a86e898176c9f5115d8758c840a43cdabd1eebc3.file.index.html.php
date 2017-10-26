<?php /* Smarty version Smarty-3.1.9, created on 2017-10-05 13:07:39
         compiled from ".\templates\team\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1077359d5be1b2a82c6-24048639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a86e898176c9f5115d8758c840a43cdabd1eebc3' => 
    array (
      0 => '.\\templates\\team\\index.html',
      1 => 1504232319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077359d5be1b2a82c6-24048639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
    'k' => 0,
    'v' => 0,
    'pagestr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59d5be1b34a6b6_80116101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d5be1b34a6b6_80116101')) {function content_59d5be1b34a6b6_80116101($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!--设计团队-->
    <div id="team" class="pc_overflow">
        <div id="team_son" class="w980 mt50">
            <!--左侧-->
          <?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!--右侧-->
            <div id="right" class="fr ml5">
                <div><span>设计团队　　　　　　　　　　　　　　　　　　　　　　　　　　　　　The design team</span></div>
                <div><img src="<?php echo @TP;?>
img/line.png" class="mt2" /></div>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <div class="mt25 <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>pc_overflow<?php }?>">
                    <div class="fl"><img src="admin/<?php echo $_smarty_tpl->tpl_vars['v']->value['timage'];?>
" width="130" height="130"  class="pic"/></div>
                    <div class="fr" style="width:580px;">
                        <div><span class="text1">姓名：<?php echo $_smarty_tpl->tpl_vars['v']->value['tname'];?>
   职称：<?php echo $_smarty_tpl->tpl_vars['v']->value['tposition'];?>
   门店：<?php echo $_smarty_tpl->tpl_vars['v']->value['tstore'];?>
   案例数：<?php echo $_smarty_tpl->tpl_vars['v']->value['tcase'];?>
    人气：<?php echo $_smarty_tpl->tpl_vars['v']->value['tpop'];?>
<br />设计宣言：<?php echo $_smarty_tpl->tpl_vars['v']->value['tdesign'];?>
 </span></div>
                        <div class="xxxx fr"><a href=<?php echo U('team','views',"tid=".((string)$_smarty_tpl->tpl_vars['v']->value['tid']));?>
>详细信息>></a></div>
                    </div>
                </div>
                <div class="clear"></div>
                <?php } ?>
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