<?php /* Smarty version Smarty-3.1.9, created on 2017-09-15 10:04:52
         compiled from ".\templates\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:321459bb3544555496-27226782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0b4c7f14ad8217deb80608a4af1ab1688b46c9f' => 
    array (
      0 => '.\\templates\\sidebar.html',
      1 => 1504268084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321459bb3544555496-27226782',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59bb35445a02c7_16918098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bb35445a02c7_16918098')) {function content_59bb35445a02c7_16918098($_smarty_tpl) {?><!-- BEGIN SIDEBAR -->

<div class="page-sidebar nav-collapse collapse">

    <!-- BEGIN SIDEBAR MENU -->

    <ul class="page-sidebar-menu">

        <li>

            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

            <div class="sidebar-toggler hidden-phone"></div>

            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

        </li>

        <li>

            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

            <form class="sidebar-search">

                <div class="input-box">

                    <a href="javascript:;" class="remove"></a>

                    <input type="text" placeholder="Search..." />

                    <input type="button" class="submit" value=" " />

                </div>

            </form>

            <!-- END RESPONSIVE QUICK SEARCH FORM -->

        </li>

        <li class="start active ">

            <a href="index.php">

                <i class="icon-home"></i>

                <span class="title">首页</span>

                <span class="selected"></span>

            </a>

        </li>

        <li class="">

            <a href="javascript:;">

                <i class="icon-user"></i>

                <span class="title">管理员管理</span>

                <span class="arrow "></span>

            </a>

            <ul class="sub-menu">

                <li >

                    <a href="<?php echo U('users','index');?>
">管理员列表</a>

                </li>

            </ul>

        </li>
        <li class="">

            <a href="javascript:;">

                <i class=" icon-book"></i>

                <span class="title">文章管理</span>

                <span class="arrow "></span>

            </a>

            <ul class="sub-menu">

                <li >

                    <a href="<?php echo U('blogs','index');?>
">文章管理列表</a>

                </li>

            </ul>

        </li>

    <li class="">

        <a href="javascript:;">

            <i class="icon-list-alt"></i>

            <span class="title">分类管理</span>

            <span class="arrow "></span>

        </a>

        <ul class="sub-menu">

            <li >

                <a href="<?php echo U('categories','index');?>
">分类管理列表</a>

            </li>

        </ul>

    </li>

        <li class="">

            <a href="javascript:;">

                <i class="icon-magnet"></i>

                <span class="title">友情链接管理</span>

                <span class="arrow "></span>

            </a>

            <ul class="sub-menu">

                <li >

                    <a href="<?php echo U('friendlink','index');?>
">友情链接管理列表</a>

                </li>

            </ul>

        </li>

        <li class="">

            <a href="javascript:;">

                <i class="icon-glass"></i>

                <span class="title">合作客户管理</span>

                <span class="arrow "></span>

            </a>

            <ul class="sub-menu">

                <li >

                    <a href="<?php echo U('customer','index');?>
">合作客户管理列表</a>

                </li>

            </ul>

        </li>

        <li class="">

            <a href="javascript:;">

                <i class="icon-briefcase"></i>

                <span class="title">设计团队户管理</span>

                <span class="arrow "></span>

            </a>

            <ul class="sub-menu">

                <li >

                    <a href="<?php echo U('team','index');?>
">设计团队管理列表</a>

                </li>

            </ul>

        </li>

        <li class="">

            <a href="javascript:;">

                <i class="icon-gift"></i>

                <span class="title">精品案例管理</span>

                <span class="arrow "></span>

            </a>

            <ul class="sub-menu">

                <li >

                    <a href="<?php echo U('cases','index');?>
">精品案例管理列表</a>

                </li>
                <li >

                    <a href="<?php echo U('style','index');?>
">装饰风格列表</a>

                </li>
                <li >

                    <a href="<?php echo U('area','index');?>
">装饰面积列表</a>

                </li>
                <li >

                    <a href="<?php echo U('layout','index');?>
">装饰户型列表</a>

                </li>

            </ul>

        </li>

    <!-- END SIDEBAR MENU -->

</div>

<!-- END SIDEBAR --><?php }} ?>