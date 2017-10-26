<?php /* Smarty version Smarty-3.1.9, created on 2017-09-15 10:04:52
         compiled from ".\templates\nav.html" */ ?>
<?php /*%%SmartyHeaderCode:1963159bb35445cf412-81321420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf487b549840656a2b8760bcae7ccfe3c3287371' => 
    array (
      0 => '.\\templates\\nav.html',
      1 => 1504418385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1963159bb35445cf412-81321420',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59bb35446b9584_73473248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bb35446b9584_73473248')) {function content_59bb35446b9584_73473248($_smarty_tpl) {?><div class="row-fluid">

    <div class="span12">

        <!-- BEGIN STYLE CUSTOMIZER -->

        <!-- END BEGIN STYLE CUSTOMIZER -->

        <!-- BEGIN PAGE TITLE & BREADCRUMB-->

        <h3 class="page-title">

            星光装饰 <small>欢迎您</small>

        </h3>

        <ul class="breadcrumb">

            <li>

                <i class="icon-home"></i>

                <a href="index.php">Home</a>

                <i class="icon-angle-right"></i>

            </li>
            <?php ob_start();?><?php echo $_GET['c'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='users'){?>

            <li><a href=<?php echo U("users","index");?>
>用户列表</a></li>

            <?php }else{?><?php ob_start();?><?php echo $_GET['c'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='blogs'){?>

            <li><a href=<?php echo U("blogs","index");?>
>新闻列表</a></li>

            <?php }else{?><?php ob_start();?><?php echo $_GET['c'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=='categories'){?>

            <li><a href=<?php echo U("categories","index");?>
>分类列表</a></li>

            <?php }else{?><?php ob_start();?><?php echo $_GET['c'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=='friendlink'){?>

            <li><a href=<?php echo U("friendlink","index");?>
>友情链接列表</a></li>

            <?php }else{?><?php ob_start();?><?php echo $_GET['c'];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5=='customer'){?>

            <li><a href=<?php echo U("customer","index");?>
>合作客户列表</a></li>

            <?php }else{?><?php ob_start();?><?php echo $_GET['c'];?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6=='team'){?>

            <li><a href=<?php echo U("team","index");?>
>设计团队列表</a></li>

            <?php }else{?><?php ob_start();?><?php echo $_GET['c'];?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7=='cases'){?>

            <li><a href=<?php echo U("cases","index");?>
>精品案例列表</a></li>

            <?php }else{?><?php ob_start();?><?php echo $_GET['c'];?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8=='area'){?>

            <li><a href=<?php echo U("area","index");?>
>装饰面积列表</a></li>

            <?php }else{?><?php ob_start();?><?php echo $_GET['c'];?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9=='layout'){?>

            <li><a href=<?php echo U("layout","index");?>
>装饰户型列表</a></li>

            <?php }else{?><?php ob_start();?><?php echo $_GET['c'];?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp10=='style'){?>

            <li><a href=<?php echo U("style","index");?>
>装饰风格列表</a></li>

            <?php }else{ ?>
            <li>主 页</li>
            <?php }}}}}}}}}}?>
            <li class="pull-right no-text-shadow"></li>


            <?php ob_start();?><?php echo $_GET['a'];?>
<?php $_tmp11=ob_get_clean();?><?php if ($_tmp11=='index'){?>

            <?php }else{?><?php ob_start();?><?php echo $_GET['a'];?>
<?php $_tmp12=ob_get_clean();?><?php if ($_tmp12=='update'){?>
            &nbsp;&nbsp;<i class="icon-angle-right"></i>&nbsp;&nbsp;
            <li>更新</li>
            <?php }else{?><?php ob_start();?><?php echo $_GET['a'];?>
<?php $_tmp13=ob_get_clean();?><?php if ($_tmp13=='add'){?>
            &nbsp;&nbsp;<i class="icon-angle-right"></i>&nbsp;&nbsp;
            <li>添加</li>
            <?php }}}?>
            <li class="pull-right no-text-shadow">
            </li>


        </ul>

        <!-- END PAGE TITLE & BREADCRUMB-->

    </div>

</div><?php }} ?>