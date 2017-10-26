<?php /* Smarty version Smarty-3.1.9, created on 2017-10-10 16:17:37
         compiled from ".\templates\cases\index.html" */ ?>
<?php /*%%SmartyHeaderCode:453759dc8221a3c4d9-47640640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be138e91ab180c7590fd2772598cca9bc08558d4' => 
    array (
      0 => '.\\templates\\cases\\index.html',
      1 => 1505020991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '453759dc8221a3c4d9-47640640',
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
  'unifunc' => 'content_59dc8222838975_50878187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dc8222838975_50878187')) {function content_59dc8222838975_50878187($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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

                <?php if ($_SESSION['uid']=='y'){?><div style="text-align: right"><a class="btn" href="<?php echo U('cases','add');?>
">添加案例</a></div> <?php }?>
                <table class="table table-striped table-bordered table-hover mytable">
                    <tr height="15%"><th>序号</th><th>案例图片</th><th>案例名称</th><th>装饰风格</th><th>装饰面积</th><th>装饰户型</th><th>操作</th></tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <tr height="15%" align="center">
                        <td style="width: 5%"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['caseimage'];?>
" width="80%" height="80%"></td>
                        <td><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['v']->value['caseid'];?>
</span></td>
                        <td><span class="label label-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['casename']);?>
</span></td>
                        <td><span class="label label-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['casestyle']);?>
</span></td>
                        <td><span class="label label-important"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['casearea']);?>
</span></td>
                        <td><span class="label label-warning"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['caselayout']);?>
</span></td>
                        <td><a href=../<?php echo U('cases','views',"caseid=".((string)$_smarty_tpl->tpl_vars['v']->value['caseid']));?>
 target="_blank"><i class="icon-tag"></i> 查看</a>
                            <?php if ($_SESSION['uid']=='y'){?>
                            <i class="icon-pencil"></i> <a href=<?php echo U('cases','update',"caseid=".((string)$_smarty_tpl->tpl_vars['v']->value['caseid']));?>
>编辑</a> | <i class="icon-trash"></i> <a onclick="return confirm('亲，数据无价，真的要删除吗？')"  href=<?php echo U('cases','delete',"caseid=".((string)$_smarty_tpl->tpl_vars['v']->value['caseid']));?>
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