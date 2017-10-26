<?php /* Smarty version Smarty-3.1.9, created on 2017-09-15 10:04:52
         compiled from ".\templates\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2548859bb3544355d83-75485463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1b7769b23fcaed4712a6541bb6eddc833aef1d1' => 
    array (
      0 => '.\\templates\\index\\index.html',
      1 => 1505097891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2548859bb3544355d83-75485463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
    'v' => 0,
    'pagestr' => 0,
    'num' => 0,
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59bb35444736b4_32812687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bb35444736b4_32812687')) {function content_59bb35444736b4_32812687($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\oop\\xingguang\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- BEGIN CONTAINER -->

<div class="page-container">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <!-- BEGIN PAGE -->

    <div class="page-content">

        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

        <div id="portlet-config" class="modal hide">

            <div class="modal-header">

                <button data-dismiss="modal" class="close" type="button"></button>

                <h3>Widget Settings</h3>

            </div>

            <div class="modal-body">

                Widget settings form goes here

            </div>

        </div>

        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

        <!-- BEGIN PAGE CONTAINER-->

        <div class="container-fluid">

            <!-- BEGIN PAGE HEADER-->

            <?php echo $_smarty_tpl->getSubTemplate ("nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!--内容区域-->
            <div  style="width: 90%; float: left;">
                <table class="table table-striped table-bordered table-hover mytable">
                    <tr height="15%"><th>序号</th><th>姓名</th><th>手机</th><th>邮箱</th><th>预约时间</th><th>操作</th></tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <tr height="15%" align="center">
                        <td><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
</span></td>
                        <td><span class="label label-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['xingming']);?>
</span></td>
                        <td><span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['v']->value['shouji'];?>
</span></td>
                        <td><span class="label label-inverse"><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</span></td>
                        <td><span class="label label-success"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['createtime'],"%Y-%m-%d %H:%M:%S");?>
</span></td>
                        <td><a href=../<?php echo U('make','views',"mid=".((string)$_smarty_tpl->tpl_vars['v']->value['mid']));?>
><?php if ($_smarty_tpl->tpl_vars['v']->value['flag']=='y'){?><i class=" icon-envelope"></i> 未读<?php }else{ ?><i class="  icon-folder-open"></i> 已读<?php }?></a>
                            <?php if ($_SESSION['flag']=='y'){?>
                            | <i class="icon-trash"></i> <a onclick="return confirm('亲，数据无价，真的要删除吗？')"  href=../<?php echo U('make','delete',"mid=".((string)$_smarty_tpl->tpl_vars['v']->value['mid']));?>
>删除</a>
                            <?php }?>
                        </td>

                    </tr>
                    <?php } ?>
                </table>

           <div class="pc_overflow pagination pagination-large">
            <ul>
                <?php echo $_smarty_tpl->tpl_vars['pagestr']->value;?>

            </ul>
        </div>
            </div>
            <script language="javascript1.2" type="text/javascript">
                function onGetMessage(context)
                {
                    msg.innerHTML+=context;
                    msg_end.scrollIntoView();
                }
            </script>
                <div style="width:5%; float: right;">
            <div id="view"><h5  align="center">今日访客 <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</h5></div>
                    <div style="height:470px;overflow:auto; border:1px solid red; background: #ffffff; " id="fk">
                        <div  id="msg" style="overflow:hidden; padding: 5px;">
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['view']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <p align="center" style="background: #ededed; padding: 5px;"><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['v']->value['avatar'])===null||$tmp==='' ? 'templates/img/3.jpeg' : $tmp);?>
" width="80%" height="60%"><br/><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
<br/><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['vtime'],"%H:%M:%S");?>
</p>
                            <?php } ?>
                        </div>
                        <div id="msg_end" style="height:0px; overflow:hidden"></div>
                    </div>

                </div>
                </div>

        </div>


    </div>

    <!-- END PAGE -->

</div>

<!-- END CONTAINER -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>