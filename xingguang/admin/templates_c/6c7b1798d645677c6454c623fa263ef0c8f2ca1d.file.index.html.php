<?php /* Smarty version Smarty-3.1.9, created on 2017-09-15 10:05:12
         compiled from ".\templates\users\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2265559bb3558091b03-51235432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7b1798d645677c6454c623fa263ef0c8f2ca1d' => 
    array (
      0 => '.\\templates\\users\\index.html',
      1 => 1505020800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2265559bb3558091b03-51235432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
    'v' => 0,
    'pagestr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59bb355821fd09_05382411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bb355821fd09_05382411')) {function content_59bb355821fd09_05382411($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\oop\\xingguang\\Smarty\\plugins\\modifier.date_format.php';
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
            <div id="main">
                <?php if ($_SESSION['flag']=='y'){?> <div style="text-align: right"><a class="btn" href="<?php echo U('users','reg');?>
">用户注册</a></div><?php }?>
                <table class="table table-striped table-bordered table-hover mytable">
                    <tr height="15%"><th>头像</th><th>序号</th><th>用户名</th><th>性别</th><th>爱好</th><th>城市</th><th>注册时间</th><th>操作</th></tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <tr height="15%" align="center">
                        <td style="width: 5%"><img width="80%" height="80%"  src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['v']->value['avatar'])===null||$tmp==='' ? 'templates/img/3.jpeg' : $tmp);?>
"></td>
                        <td><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</span></td>
                        <td><span class="label label-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['username']);?>
</span></td>
                        <td><span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['v']->value['sex']=='m' ? '男' : '女';?>
</span></td>
                        <td><span class="label label-inverse"><?php if (strstr($_smarty_tpl->tpl_vars['v']->value['fav'],"sports")){?>体育 <?php }?><?php if (strstr($_smarty_tpl->tpl_vars['v']->value['fav'],"reading")){?>阅读 <?php }?><?php if (strstr($_smarty_tpl->tpl_vars['v']->value['fav'],"shopping")){?>购物 <?php }?></span></td>
                        <td><span class="label label-important"><?php echo $_smarty_tpl->tpl_vars['v']->value['city']=='hefei' ? '合肥' : '芜湖';?>
</span></td>
                        <td><span class="label label-success"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['regtime'],"%Y-%m-%d %H:%M:%S");?>
</span></td>
                        <td>
                            <?php if ($_SESSION['flag']=='y'||$_SESSION['uid']==$_smarty_tpl->tpl_vars['v']->value['uid']){?>
                            <i class="icon-pencil"></i> <a href=<?php echo U('users','update',"uid=".((string)$_smarty_tpl->tpl_vars['v']->value['uid']));?>
>编辑</a> | <i class="icon-trash"></i> <a onclick="return confirm('亲，数据无价，真的要删除吗？')"  href=<?php echo U('users','delete',"uid=".((string)$_smarty_tpl->tpl_vars['v']->value['uid']));?>
>删除</a>
                            <?php }?>
                            <?php if ($_SESSION['uid']==1){?>
                            | <i class="icon-star"></i> <a href=<?php echo U('users','quanxian',"uid=".((string)$_smarty_tpl->tpl_vars['v']->value['uid']));?>
>权限</a>
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
        </div>


    </div>

    <!-- END PAGE -->

</div>

<!-- END CONTAINER -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>