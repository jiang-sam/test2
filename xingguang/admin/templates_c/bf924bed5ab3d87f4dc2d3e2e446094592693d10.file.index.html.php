<?php /* Smarty version Smarty-3.1.9, created on 2017-09-15 10:05:25
         compiled from ".\templates\customer\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1858159bb356503ed72-31532757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf924bed5ab3d87f4dc2d3e2e446094592693d10' => 
    array (
      0 => '.\\templates\\customer\\index.html',
      1 => 1505020922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858159bb356503ed72-31532757',
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
  'unifunc' => 'content_59bb3565128371_32242885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bb3565128371_32242885')) {function content_59bb3565128371_32242885($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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

                <?php if ($_SESSION['flag']=='y'){?><div style="text-align: right"><a class="btn" href="<?php echo U('customer','add');?>
">添加合作客户</a></div><?php }?>
                <table class="table table-striped table-bordered table-hover mytable">
                    <tr height="15%"><th>合作客户图片</th><th>序号</th><th>合作客户名称</th><th>合作客户网址</th><?php if ($_SESSION['flag']=='y'){?><th>操作</th><?php }?></tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <tr height="15%" align="center">
                        <td style="width: 5%;"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['customerimage'];?>
" width="80%" height="80%"></td>
                        <td><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</span></td>
                        <td><span class="label label-important"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['customername']);?>
</span></td>
                        <td><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['v']->value['customerurl'];?>
</span></td>
                        <?php if ($_SESSION['flag']=='y'){?>
                        <td><i class="icon-pencil"></i> <a href=<?php echo U('customer','update',"cid=".((string)$_smarty_tpl->tpl_vars['v']->value['cid']));?>
>编辑</a> | <i class="icon-trash"></i> <a onclick="return confirm('亲，数据无价，真的要删除吗？')"  href=<?php echo U('customer','delete',"cid=".((string)$_smarty_tpl->tpl_vars['v']->value['cid']));?>
>删除</a></td>
                        <?php }?>
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