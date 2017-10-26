<?php /* Smarty version Smarty-3.1.9, created on 2017-10-05 13:07:24
         compiled from ".\templates\about\index.html" */ ?>
<?php /*%%SmartyHeaderCode:132859d5be0c17bd96-82363859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13a962e0b5d0b8f4b0c4cc342728e1a52370ba8e' => 
    array (
      0 => '.\\templates\\about\\index.html',
      1 => 1504102463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132859d5be0c17bd96-82363859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59d5be0c29fe13_85933724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d5be0c29fe13_85933724')) {function content_59d5be0c29fe13_85933724($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <!--关于我们-->
    <div id="about" class="pc_overflow">
        <div id="about_son" class="w980 mt50">
            <!--左侧-->
            <?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!--右侧-->
            <div id="right" class="fr ml5">
                <div><span>关于我们　　　　　　　　　　　　　　　　　　　　　　　　　　  　　　　　　About us</span></div>
                <div><img src="<?php echo @TP;?>
img/line.png" class="mt2" /></div>
                <div><img src="<?php echo @TP;?>
img/gywm.png" width="544" height="395" class="fr mt15"/></div>
                <div class="clear"></div>
                <div class="text">
                   <?php echo $_smarty_tpl->tpl_vars['resone']->value['contents'];?>

                </div>
                <div class="mt25"><span>公司优势　　　　　　　　　　　　　　　　 　　　　　　　　　　 　　　　　Advantage</span></div>
                <div><img src="<?php echo @TP;?>
img/line.png" class="mt2" /></div>
                <div class="mt15 gsys">
                    <div><img src="<?php echo @TP;?>
img/clys.png"  class="fl pic" height="92" width="61"/></div>
                    <div><span class="fr text mt10">我公司使用材料的原则是：永远比竞争对手使用的材料高一个档次。与全国知名材料生产商及经销建立了<br />良好合作关系！先了解材料生产源头的具体情况再染经销商合作事宜。形成了稳定的配送体系，由专人管理，<br />避免了以次充好，以假充真的现象。选用国内知名材料，坚决不做贴牌。</span></div>
                </div>
                <div class="mt15 gsys">
                    <div><img src="<?php echo @TP;?>
img/wtjtk.png"  class="fl pic" height="92" width="61"/></div>
                    <div><span class="fr text text2 mt10 mt30">为了保护客户利益，我公司郑重承诺：3次设计不满意将无条件退款。为了保护客户利益，我公司公司郑公</span></div>
                </div>
                <div class="mt25 gsys">
                    <div><img src="<?php echo @TP;?>
img/wxfw.png"  class="fl pic" height="92" width="61"/></div>
                    <div><span class="fr text mt10">我公司使用材料的原则是：永远比竞争对手使用的材料高一个档次。与全国知名材料生产商及经销建立了<br />良好合作关系！先了解材料生产源头的具体情况再染经销商合作事宜。形成了稳定的配送体系，由专人管理，<br />避免了以次充好，以假充真的现象。选用国内知名材料，坚决不做贴牌。</span></div>
                </div>
                <div class="mt25 gsys">
                    <div><img src="<?php echo @TP;?>
img/zytd.png"  class="fl pic" height="92" width="61"/></div>
                    <div><span class="fr text mt10">我公司使用材料的原则是：永远比竞争对手使用的材料高一个档次。与全国知名材料生产商及经销建立了<br />良好合作关系！先了解材料生产源头的具体情况再染经销商合作事宜。形成了稳定的配送体系，由专人管理，<br />避免了以次充好，以假充真的现象。选用国内知名材料，坚决不做贴牌。</span></div>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
   <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>