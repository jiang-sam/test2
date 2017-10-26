<?php /* Smarty version Smarty-3.1.9, created on 2017-09-19 23:53:04
         compiled from ".\templates\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1511259c13d60853a25-42372998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1b7769b23fcaed4712a6541bb6eddc833aef1d1' => 
    array (
      0 => '.\\templates\\index\\index.html',
      1 => 1504421772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1511259c13d60853a25-42372998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'teamArr' => 0,
    'v' => 0,
    'k' => 0,
    'customerArr' => 0,
    'blogsArr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59c13d60c19809_54306018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c13d60c19809_54306018')) {function content_59c13d60c19809_54306018($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\oop\\xingguang\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--banner-->
<div class="banner pc_overflow">
    <div class="slide-bg">
        <div class="slide-wp">
            <div id="slides" class="slides">

                <div>
                    <div class="slideChild"><a class="a-jd opa js-log-login" style="top:280px;left:310px;width:230px;height:70px;" href="http://www.97zzw.com"></a></div>
                    <img class="slideImg" src="<?php echo @TP;?>
img/banner1.jpg">
                </div>

                <div>
                    <div class="slideChild"><a href="http://www.97zzw.com" class="a-jd opa" style="top:280px; left:165px; width:200px; height:60px;"></a> </div>
                    <img class="slideImg" src="<?php echo @TP;?>
img/banner2.jpg">
                </div>


                <div>
                    <div class="slideChild"> <a class="a-video opa" href="http://www.97zzw.com"></a></div>
                    <img class="slideImg" src="<?php echo @TP;?>
img/banner3.jpg">
                </div>


            </div>
        </div>
    </div>

</div>
<!--精品案例-->
<div class="case w980 mt45">
    <div class="casetop">
        <p class="fl"><span class="fl">精品案例</span><span class="fr span2">Excellent case</span></p>
        <a href="<?php echo U('cases','index');?>
"><img class="fr" src="<?php echo @TP;?>
img/caseicon.png" width="52" height="18" /></a>
    </div>
    <div class="casebottom mt35">
        <div class="casel fl">
            <div class="fl casell">
                <img class="mt40 ml60" src="<?php echo @TP;?>
img/add.png" width="31" height="31" />
                <p>森林城堡别墅<br /><span>Forest Villa Castello</span></p>
            </div>
            <img class="img1" src="<?php echo @TP;?>
img/caseicon1.png" width="17" height="26" />
            <img class="fl" src="<?php echo @TP;?>
img/case4.png" width="264" height="154" />
        </div>
        <div class="casec fl">
            <div class="fl casecc">
                <img class="mt40 ml60" src="<?php echo @TP;?>
img/add.png" width="31" height="31" />
                <p>桂花园别墅<br /><span>Garden Villas</span></p>
            </div>
            <img class="img2" src="<?php echo @TP;?>
img/caseicon2.png" width="17" height="26" />
            <img class="fl" src="<?php echo @TP;?>
img/case5.png" width="263" height="154" />
        </div>
        <div class="caser fl">
            <div class="fl caserr">
                <img class="mt40 ml60" src="<?php echo @TP;?>
img/add.png" width="31" height="31" />
                <p>丽水园林<br /><span>Lishui Garden</span></p>
            </div>
            <img class="img3" src="<?php echo @TP;?>
img/caseicon3.png" width="26" height="17" />
        </div>
        <div class="caseb fl w980">
            <img src="<?php echo @TP;?>
img/case6.png"  width="980" height="182" />
        </div>
    </div>
</div>
<!--设计团队-->
<div class="team w980 mt40">
    <div class="teaml fl">
        <p class="fl"><span class="fl">设计团队</span><span class="fr span2">Design team</span></p><br />
        <ul>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['teamArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li class="fl"><a href=<?php echo U('team','views',"tid=".((string)$_smarty_tpl->tpl_vars['v']->value['tid']));?>
 target="_blank"><img src="templates/img/teamo<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
.png" width="67" height="235"><img src="admin/<?php echo $_smarty_tpl->tpl_vars['v']->value['timage'];?>
" width="166" height="235" /></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="teamr fr">
        <p class="p1"><span class="span1"><?php echo $_smarty_tpl->tpl_vars['teamArr']->value[0]['tname'];?>
</span>&nbsp;&nbsp;<span class="span2"><?php echo $_smarty_tpl->tpl_vars['teamArr']->value[0]['tposition'];?>
</span></p>
        <p class="mt10 ml50">北京美术学院毕业，十多年专注于房地产及星级酒店的设计，与国内多家房地产公司建立长期友<br />好的战略合作伙伴，并负责相关设计。</p>
        <ul class="mt10 ml50">
            <li class="fl">2006年度荣获成都最佳设计师荣誉奖称号</li>
            <li class="fl ml30">2006年度入选《艺术人生》封面人物</li>
            <li class="fl">2006年度荣获成都最佳设计师荣誉奖称号</li>
            <li class="fl ml30">2006年度荣获成都最佳设计师荣誉奖称号</li>
        </ul>
        <div>
            <a href=<?php echo U('team','index');?>
 target="_blank"><img class="fr" src="<?php echo @TP;?>
img/more.png" width="106" height="121" /></a>
        </div>
    </div>
</div>
<!--优势-->
<div class="advant w980 mt20">
    <div class="advantt"></div>
    <div class="advantb">
        <p class="fl">星光四大优势：</p>
        <a href="<?php echo U('about','index');?>
"><img class="fl ml15" src="<?php echo @TP;?>
img/youshi1.png" width="169" height="60" /></a>
        <a href="<?php echo U('about','index');?>
"><img class="fl ml25" src="<?php echo @TP;?>
img/youshi2.png" width="169" height="60" /></a>
        <a href="<?php echo U('about','index');?>
"><img class="fl ml25" src="<?php echo @TP;?>
img/youshi3.png" width="169" height="60" /></a>
        <a href="<?php echo U('about','index');?>
"><img class="fl ml25" src="<?php echo @TP;?>
img/youshi4.png" width="169" height="60" /></a>
    </div>
</div>
<!--合作-->
<div class="customer w980 mt40">
    <h3>合作客户<br /><span> Customer cooperation</span><br /></h3>
    <p class="mt10">自2000年成立以来，我们本着“创新设计、专业力量、周到服务”，秉承人性化的管理模式，率先推出绿色环保，请环<br />保专家对公司的员工实施专业培训，让“环保“意识根植于每一位员工的心里。公司坚持服务态度，追求装饰<br />艺术生活化、施工管理规范化、服务最优化、发展持续化、设计理念人性化，为广大客户提供更<br /> 优质的服务。</p>
    <div class="pic">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customerArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['customerurl'];?>
" target="_blank"><img title="<?php echo $_smarty_tpl->tpl_vars['v']->value['customername'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>ml10<?php }else{ ?>ml60<?php }?> fl" src="admin/<?php echo $_smarty_tpl->tpl_vars['v']->value['customerimage'];?>
" width="110" height="112" /></a>
       <?php } ?>
    </div>
</div>
<!--新闻资讯-->
<div class="main w980 mt35 pc_overflow">
    <!--新闻资讯-->
    <div class="mainl fl">
        <div class="pc_overflow">
            <h3 class="fl">新闻资讯&nbsp;&nbsp;&nbsp;<span>New</span></h3>
            <img class="fr" src="<?php echo @TP;?>
img/moren.png" width="50" height="18" />
        </div>
        <img class="mt10" src="<?php echo @TP;?>
img/newline.png" width="443" height="2" />
        <div id="marquee6">
            <ul id="con_two_1" class="pc_overflow">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogsArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <li><a href=<?php echo U("blogs","views","bid=".((string)$_smarty_tpl->tpl_vars['v']->value['bid']));?>
 target="_blank"><span class="fl"><?php echo truncate_zh(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['title']),30,"...");?>
</span><span class=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['createtime'],"%Y-%m-%d");?>
</span></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <!--联系我们-->
    <div class="mainr fr">
        <h3>联系我们&nbsp;&nbsp;&nbsp;<span>Contact us</span></h3>
        <img class="img1" src="<?php echo @TP;?>
img/contactline.png" width="491" height="2" />
        <div class="picl fl mt30">
            <img src="<?php echo @TP;?>
img/contactpic.png" width="223" height="215" />
        </div>
        <div class="picr fl mt30 ml15">
            <p class="mt10">联系电话：0551-63830522<br />邮箱：shanlian@sina.com<br />地址：安徽省合肥市经开区上海城市9棟2301</p>
            <ul>
                <li class="fl li1">
                    <a href="index6.html"><img class="mt10" src="<?php echo @TP;?>
img/qq.png" width="44" height="45" /></a>
                    <a href="index6.html"><img class="mt5" src="<?php echo @TP;?>
img/qq2.png" width="51" height="42" /></a>
                </li>
                <li class="fl li2 ml25"><a href="index6.html"><img src="<?php echo @TP;?>
img/weixin.png" width="115" height="115" /></a></li>
            </ul>
        </div>
    </div>
</div>

<!--底部-->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>