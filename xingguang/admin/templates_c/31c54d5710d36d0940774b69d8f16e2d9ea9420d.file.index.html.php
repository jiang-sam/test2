<?php /* Smarty version Smarty-3.1.9, created on 2017-10-10 16:17:31
         compiled from ".\templates\blogs\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3059259dc821b5f5343-82044847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c54d5710d36d0940774b69d8f16e2d9ea9420d' => 
    array (
      0 => '.\\templates\\blogs\\index.html',
      1 => 1505020390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3059259dc821b5f5343-82044847',
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
  'unifunc' => 'content_59dc821bc057a1_98056056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dc821bc057a1_98056056')) {function content_59dc821bc057a1_98056056($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\oop\\xingguang\\Smarty\\plugins\\modifier.date_format.php';
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

                <div style="text-align: right"><a class="btn" href="<?php echo U('blogs','add');?>
">添加文章</a></div>
                <table class="table table-striped table-bordered table-hover mytable">
                    <tr height="15%"><th>序号</th><th>文章分类</th><th>文章标题</th><th>作者</th><th>点击量</th><th>发布时间</th><th>操作</th></tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <tr height="15%" align="center">
                        <td><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</span></td>
                        <td><span class="label label-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['cname']);?>
</span></td>
                        <td><span class="label label-important"><?php echo truncate_zh(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['title']),20);?>
</span></td>
                        <td><span class="label label-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['username']);?>
</span></td>
                        <td><span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['v']->value['hits'];?>
</span></td>
                        <td><span class="label label-inverse"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['createtime'],"%Y-%m-%d %H:%M:%S");?>
</span></td>
                        <td><a href=../<?php echo U('blogs','views',"bid=".((string)$_smarty_tpl->tpl_vars['v']->value['bid']));?>
 target="_blank"><i class="icon-tag"></i> 查看</a>
                            <?php if ($_SESSION['flag']=='y'||$_SESSION['uid']==$_smarty_tpl->tpl_vars['v']->value['uid']){?>
                            <i class="icon-pencil"></i> <a href=<?php echo U('blogs','update',"bid=".((string)$_smarty_tpl->tpl_vars['v']->value['bid']));?>
>编辑</a> | <i class="icon-trash"></i> <a onclick="return confirm('亲，数据无价，真的要删除吗？')"  href=<?php echo U('blogs','delete',"bid=".((string)$_smarty_tpl->tpl_vars['v']->value['bid']));?>
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
        </div>


    </div>

    <!-- END PAGE -->

</div>

<!-- END CONTAINER -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>