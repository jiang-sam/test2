<?php /* Smarty version Smarty-3.1.9, created on 2017-10-14 21:08:17
         compiled from ".\templates\contact\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1220759e20c41f35091-81933431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28a3ddbb1c4d48f6b84e86ad037144cc889b9e5f' => 
    array (
      0 => '.\\templates\\contact\\index.html',
      1 => 1504087773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1220759e20c41f35091-81933431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59e20c42263f02_51954554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e20c42263f02_51954554')) {function content_59e20c42263f02_51954554($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <!--联系我们-->
    <div id="contact" class="pc_overflow">
        <div id="contact_son" class="w980 mt50">
            <!--左侧-->
            <?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!--右侧-->
            <div id="right" class="fr ml5">
                <div><span>联系我们　　　　　　　　　　　　　　　　　　　　　　　　　  　　　　　　Contact us</span></div>
                <div><img src="<?php echo @TP;?>
img/line.png" class="mt2" /></div>
                <div class="tel pc_overflow mt55">
                    <div class="tel_l"><img src="<?php echo @TP;?>
img/kf.png" class="fl ml2" /></div>
                    <div class="tel_r">
                    	<span class="fr">
                            <?php echo $_smarty_tpl->tpl_vars['resone']->value['contents'];?>

                         </span>
                    </div>
                </div>
                <div class="mt55"><span>我们的位置　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　Our location</span></div>
                <div><img src="<?php echo @TP;?>
img/line.png" class="mt2" /></div>
                <div class="map mt40">
                    <!--引用百度地图API-->
                    
                    <style type="text/css">
                        html,body{margin:0;padding:0;}
                        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
                        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
                    </style>
                    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

                    <!--百度地图容器-->
                    <div style="width:735px;height:305px;border:#ccc solid 1px;" id="dituContent"></div>

                    <script type="text/javascript">
                        //创建和初始化地图函数：
                        function initMap(){
                            createMap();//创建地图
                            setMapEvent();//设置地图事件
                            addMapControl();//向地图添加控件
                            addMarker();//向地图中添加marker
                        }

                        //创建地图函数：
                        function createMap(){
                            var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
                            var point = new BMap.Point(117.237294,31.788117);//定义一个中心点坐标
                            map.centerAndZoom(point,16);//设定地图的中心点和坐标并将地图显示在地图容器中
                            window.map = map;//将map变量存储在全局
                        }

                        //地图事件设置函数：
                        function setMapEvent(){
                            map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
                            map.enableScrollWheelZoom();//启用地图滚轮放大缩小
                            map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
                            map.enableKeyboard();//启用键盘上下左右键移动地图
                        }

                        //地图控件添加函数：
                        function addMapControl(){
                            //向地图中添加缩放控件
                            var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
                            map.addControl(ctrl_nav);
                            //向地图中添加缩略图控件
                            var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
                            map.addControl(ctrl_ove);
                            //向地图中添加比例尺控件
                            var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
                            map.addControl(ctrl_sca);
                        }

                        //标注点数组
                        var markerArr = [{title:"星光装饰设计公司",content:"我的备注",point:"117.231635|31.788102",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
                        ];
                        //创建marker
                        function addMarker(){
                            for(var i=0;i<markerArr.length;i++){
                                var json = markerArr[i];
                                var p0 = json.point.split("|")[0];
                                var p1 = json.point.split("|")[1];
                                var point = new BMap.Point(p0,p1);
                                var iconImg = createIcon(json.icon);
                                var marker = new BMap.Marker(point);
                                var iw = createInfoWindow(i);
                                var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
                                marker.setLabel(label);
                                map.addOverlay(marker);
                                label.setStyle({
                                    borderColor:"#808080",
                                    color:"#333",
                                    cursor:"pointer"
                                });

                                (function(){
                                    var index = i;
                                    var _iw = createInfoWindow(i);
                                    var _marker = marker;
                                    _marker.addEventListener("click",function(){
                                        this.openInfoWindow(_iw);
                                    });
                                    _iw.addEventListener("open",function(){
                                        _marker.getLabel().hide();
                                    })
                                    _iw.addEventListener("close",function(){
                                        _marker.getLabel().show();
                                    })
                                    label.addEventListener("click",function(){
                                        _marker.openInfoWindow(_iw);
                                    })
                                    if(!!json.isOpen){
                                        label.hide();
                                        _marker.openInfoWindow(_iw);
                                    }
                                })()
                            }
                        }
                        //创建InfoWindow
                        function createInfoWindow(i){
                            var json = markerArr[i];
                            var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
                            return iw;
                        }
                        //创建一个Icon
                        function createIcon(json){
                            var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
                            return icon;
                        }

                        initMap();//创建和初始化地图
                    </script>
                    

                </div>
            </div>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>