<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="agent-pc theme-bwhite">
<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--首页banne-->
<link href="<?php echo CSS_PATH;?>lrzk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>lrzk.js"></script>
<!--[if lte IE 6]>
<script type="text/javascript" src="<?php echo JS_PATH;?>belatedPNG.js"></script>
<script type="text/javascript">
var __IE6=true;
DD_belatedPNG.fix('.logo img,.prev img,.next img,img');
</script>
<![endif]-->

<!--合作伙伴-->
<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet" type="text/css">
<SCRIPT src="<?php echo JS_PATH;?>ScrollPic.js" type=text/javascript></SCRIPT>

<!--弹出/数字字体大小-->
<style type="text/css">
.ie{width:490px;  padding:20px; overflow:hidden; display:none}
#wizard {font-size:12px;height:433px;margin:20px auto;width:490px;overflow:hidden;position:relative;}
#wizard .items{width:20000px; clear:both; position:absolute;}
#wizard .right{float:left; margin-top:300px; margin-left:100px;}
#wizard #status{height:35px;background:#123;padding-left:25px !important;}
#status li{float:left;color:#fff;padding:10px 30px; }
#status li.active{background-color:#369;font-weight:normal;}
.input{width:240px; height:18px; margin:10px auto; line-height:20px; border:1px solid #d3d3d3; padding:2px}
.page{padding:20px 30px;width:500px;float:left;}
.page h3{height:42px; font-size:16px; border-bottom:1px dotted #ccc; margin-bottom:20px; padding-bottom:5px}
.page h3 em{font-size:12px; font-weight:500; font-style:normal}
.page p{line-height:24px;}
.page p label{font-size:14px; display:block;}
.btn_nav{height:36px; line-height:36px; margin:20px auto;}
.prevv,.nextt{ line-height:32px;  cursor:pointer}

.animate {
font-size:50px;
color: #B59A43;
font-family: Helvetica;
}
</style>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min1.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>scrollable.js"></script>
<script language="JavaScript" type="text/javascript">  
var EV_MsgBox_ID=""; 
function 
EV_modeAlert(msgID)
{  
var bgObj=document.createElement("div");  
bgObj.setAttribute('id','EV_bgModeAlertDiv');  
document.body.appendChild(bgObj);  
EV_Show_bgDiv();  
EV_MsgBox_ID=msgID;  
EV_Show_msgDiv();  
}    
function EV_closeAlert(){  
var msgObj=document.getElementById(EV_MsgBox_ID);  
var bgObj=document.getElementById("EV_bgModeAlertDiv");  
msgObj.style.display="none";  
document.body.removeChild(bgObj);  
EV_MsgBox_ID="";  
}  
window.onresize=function(){  
if (EV_MsgBox_ID.length>0){  
EV_Show_bgDiv();  
EV_Show_msgDiv();  
}  
}  
window.onscroll=function(){  
if (EV_MsgBox_ID.length>0){  
EV_Show_bgDiv();  
EV_Show_msgDiv();  
}  
}  
function EV_Show_msgDiv(){  
var msgObj   = document.getElementById(EV_MsgBox_ID);  
msgObj.style.display  = "block";  
var msgWidth = msgObj.scrollWidth;  
var msgHeight= msgObj.scrollHeight;  
var bgTop=EV_myScrollTop();  
var bgLeft=EV_myScrollLeft();  
var bgWidth=EV_myClientWidth();  
var bgHeight=EV_myClientHeight();  
var msgTop=bgTop+Math.round((bgHeight-msgHeight)/2);  
var msgLeft=bgLeft+Math.round((bgWidth-msgWidth)/2);  
msgObj.style.position = "absolute";  
msgObj.style.top      = msgTop+"px";  
msgObj.style.left     = msgLeft+"px";  
msgObj.style.zIndex   = "10001";  

}  
function EV_Show_bgDiv(){  
var bgObj=document.getElementById("EV_bgModeAlertDiv");  
var bgWidth=EV_myClientWidth();  
var bgHeight=EV_myClientHeight();  
var bgTop=EV_myScrollTop();  
var bgLeft=EV_myScrollLeft();  
bgObj.style.position   = "absolute";  
bgObj.style.top        = bgTop+"px";  
bgObj.style.left       = bgLeft+"px";  
bgObj.style.width      = bgWidth + "px";  
bgObj.style.height     = bgHeight + "px";  
bgObj.style.zIndex     = "10000";  
bgObj.style.background = "#000";  
bgObj.style.filter     = "progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=60,finishOpacity=60);";  
bgObj.style.opacity    = "0.8";  
}  
function EV_myScrollTop(){  
var n=window.pageYOffset   
|| document.documentElement.scrollTop   
|| document.body.scrollTop || 0;  
return n;  
}  
function EV_myScrollLeft(){  
var n=window.pageXOffset   
|| document.documentElement.scrollLeft   
|| document.body.scrollLeft || 0;  
return n;  
}  
function EV_myClientWidth(){  
var n=document.documentElement.clientWidth   
|| document.body.clientWidth || 0;  
return n;  
}  
function EV_myClientHeight(){  
var n=document.documentElement.clientHeight   
|| document.body.clientHeight || 0;  
return n;  
}
window.onload = function(){
EV_modeAlert('envon');
}
</script>  

<!--公共-->
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>style.css">
<link href="<?php echo CSS_PATH;?>font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo JS_PATH;?>home-jquey.js" data-main="indexMain"></script>

<!--业务领域-->
<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>home_ywlr.css">
<script src="<?php echo JS_PATH;?>slides-1.1.1-min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
$('#sildes').olvSlides(
{
thumb:true,
thumbPage:true,
thumbDirection:"Y",
effect:'fade'

}
);
})
</script>

<title>上海汉智工程建设集团有限公司</title>
</head>
<body class="gh0">

<div id="header" style=" background:url(<?php echo IMG_PATH;?>bg.png) repeat-x ;">
<div class="wrapper">
<div class="content">
<div id="headTop">
<a href="index.html" id="logo">
<img src="<?php echo IMG_PATH;?>logoo.png" height="44" /></a>
<div id="openBtn" class="fl btn"><div class="lcbody">
<div class="lcitem top"><div class="rect top"></div></div>
<div class="lcitem bottom"><div class="rect bottom"></div>
</div></div>
</div></div>

<div id="navWrapper"><div class="content">
<p class="search_but" style="display:none">
<i class="fa fa-search" aria-hidden="true"></i></p>



<!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
        	<ul class="nav-site">
			<li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li class="line">|</li>
			<li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
			<?php $n++;}unset($n); ?>
            </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
	
	
		
<ul class="nav movedx" data-movedx-mid="1">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
 

<li class="navitem"><a class="active" href="<?php echo siteurl($siteid);?>" target="_self"><span data-title="首页">首页</span></a></li>

<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><!--  一级栏目循环开始  -->
<li class="navitem">
<a  href="<?php echo $r['url'];?>">
<span data-title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></span><i class="fa fa-angle-down"></i>
</a>
<?php if($r[arrchildid]) { ?> <!--是否有子栏目-->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=562eba0525a72e8a95a03bd7c7d4da01&action=category&catid=%24r%5Bcatid%5D&num=15&siteid=%24siteid&order=listorder+ASC&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data2 = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
<ul class="subnav">  <?php $n=1;if(is_array($data2)) foreach($data2 AS $v) { ?><!--子栏目循环开始-->
<li><a href="<?php echo $v['url'];?>" target="_self"><?php echo $v['catname'];?></a></li> <?php $n++;}unset($n); ?><!--子栏目循环结束-->
</ul>
</li>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php } ?>
<?php $n++;}unset($n); ?><!--  一级栏目循环结束-->
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	

</ul>
</div></div>
</div></div></div>

<div id="indexPage" data-scroll-ease="" data-scroll-speed="1" data-control="0" data-control-wheel="0" data-singlescreen="0">




<!-- 代码 开始 -->
<div class="slide-main" id="touchMain">
<a class="prev" href="javascript:;" stat="prev1001"><img src="<?php echo IMG_PATH;?>l-btn.png" /></a>
<div class="slide-box" id="slideContent">

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d77e4f80f9487b054dd9af72dc12e98f&action=lists&catid=15&num=10&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'id DESC','limit'=>'10',));}?> 
<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>


<div class="slide" id="bgstylec" style="background:url(<?php echo thumb($v['thumb'],1980,0);?>) repeat center center;">
<a stat="sslink-1" href="#" target="_blank">
</a>
</div>

 <?php $n++;}unset($n); ?>               
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>



 

</div>
<a class="next" href="javascript:;" stat="next1002"><img src="<?php echo IMG_PATH;?>r-btn.png" /></a>
<div class="item">
<a class="cur" stat="item1001" href="javascript:;"></a><a href="javascript:;" stat="item1002"></a><a href="javascript:;" stat="item1003"></a><a href="javascript:;" stat="item1004"></a><a href="javascript:;" stat="item1005"></a>
</div>
</div>
<!-- 代码 结束 -->

<div class="mcounter module bgShow" style=" background-image:url(<?php echo IMG_PATH;?>1490594674542.jpg); border-bottom:1px #4c4534 solid !important;">
<div class="bgmask"></div><div id="counterBgdx" style="position:absolute; width:100%; height:100%;"></div><div class="module_container"><div class="container_content"><ul class="content_list">
<li><div><p class="number"><span class="animate" data-value="268" data-type="number" data-option="int"></span><span class="unit">+</span></p><p class="title">项目</p></div></li>
<li><div><p class="number"><span class="animate" data-value="1043" data-type="number" data-option="int"></span><span class="unit">+</span></p><p class="title">客户</p></div></li>
<li><div><p class="number"><span class="animate" data-value="75" data-type="number" data-option="int"></span><span class="unit">+</span></p><p class="title">行业</p></div></li>
<li><div><p class="number"><span class="animate" data-value="22" data-type="number" data-option="int"></span><span class="unit">+</span></p><p class="title">奖项</p></div></li>
</ul><div class="clear"></div></div></div></div>
<script>
$(document).ready(function(){

$(".animate").flash();
})
</script>
<div class="mcustomize module bgShow bgParallax horizontal tril" style=" background-image:url(<?php echo IMG_PATH;?>1491447597226.jpg);"><div class="bgmask"></div><div class="module_container"><div class="container_content">
<div class="contentbody"><div class="wrapper"><div class="header wow"><span class="title">关于我们</span><span class="subtitle"> / ABOUT US</span></div>
<div class="description wow" style="width:600px;">上海汉智工程建设集团有限公司<p>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2f58b9ef8319b6745d7904b88b08725e&sql=SELECT+%2A+FROM+v9_page+where+catid%3D11\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=11 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
<?php echo str_cut(strip_tags($val[content]),400,"");?>...
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


</p><p><a href="http://www.hecg-sh.com/index.php?m=content&c=index&a=lists&catid=11" target="_self" style="border:#B49942 1px solid;"></a></p></div></div></div>
<div class="mediabody wow" style="width:365px;"><a target="_blank" href="http://www.hecg-sh.com/index.php?m=content&c=index&a=lists&catid=11"><div class="image" style="background-image:url(<?php echo IMG_PATH;?>img06.png);width:365px;  "></div>
<div class="mask"></div>
</a></div>
<div class="clear"></div></div></div></div>

<div class="mlist ad01 module bgShow" style=" background-image:url(<?php echo IMG_PATH;?>1490668241696.png);">
<div class="bgmask"></div>
</div> 
<div class="mlist team_tabs module" style="">
<div class="bgmask"></div><div class="module_container">
<div class="container_header wow"><p class="title">业务领域</p><p class="zi"> / PROFESSIONAL SECTOR </p></div>
<div class="container_category wow movedx" data-movedx-mid="2" data-movedx-distance="15">
<a href="#" class="active"><span>全部</span></a><a href="#"><span>业务领域</span></a></div>
<div class="container_content"><div class="content_wrapper">
<div class="wrap">
<div id="sildes">
<div class="control">
<ul class="change">
</ul>
</div>
<div class="thumbWrap">
<div class="thumbCont">
<ul>
<!-- img属性, url=url, text=描述, bigimg=大图, alt=标题  -->
<li>
<div><img src="<?php echo IMG_PATH;?>a.png" url="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=23" text="Interior design<br /><br />为各大医院、养老院、卫生机构提供专业化、纵深化的项目服务，涵盖项目的前期咨询、评估立项，功能策划与定位..." bigImg="<?php echo IMG_PATH;?>index2.jpg" alt="医疗养老事业部">医疗养老事业部<br />Interior design </div>
</li>
<li>
<div><img src="<?php echo IMG_PATH;?>a.png" url="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=24" text="Graphic design<br /><br />为医药、保健食品、精细化工行业提供专业化、深层次的项目服务，涵盖项目的前期可研，环境评价，职业卫生评价，GMP方案设计..." bigImg="<?php echo IMG_PATH;?>index3.jpg" alt="医药工业事业部">医药工业事业部<br />Graphic design</div>
</li>
<li>
<div><img src="<?php echo IMG_PATH;?>a.png" url="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=25" text="Architecture<br><br>房屋建筑项目及市政公用项目的可行性研究、方案设计、施工图设计、施工监理、造价咨询、土建施工、装饰装修、机电专项承包等...<br /><br /><br /><br /><br /><br />" bigImg="<?php echo IMG_PATH;?>index01.jpg"  alt="房建市政事业部">房建市政事业部<br />Architecture</div>
</li>
<li>
<div><img src="<?php echo IMG_PATH;?>a.png" url="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=26" text="Space Design<br /><br />住建部编制的建筑业“十二五”规划明确提出要推进BIM协同工作等技术应用，普及可视化、参数化、三维模型设计，以提高设计水平，降低工程投资...." bigImg="<?php echo IMG_PATH;?>index4.jpg" alt="BIM建筑信息技术中心">BIM建筑信息<br />技术中心<br />Space Design</div>
</li>         
</ul>
</div>
</div>
</div>
</div> 
</div></div><div class="clear"></div></div></div>
<div class="mlist imagelink module" style="">
<div class="bgmask"></div><div class="module_container"><div class="container_header wow"><p class="title">合作伙伴</p><p class="subtitle"> / PARTNER</p></div><div class="container_category wow movedx one" data-movedx-mid="2" data-movedx-distance="15"><a href="#" class="active"><span>全部</span></a></div>
<div class="container_content">
<!--滚动图片 start-->
<DIV class=rollphotos>
<DIV class=blk_29>
<DIV class=LeftBotton id=LeftArr></DIV>
<DIV class=Cont id=ISL_Cont_1><!-- 图片列表 begin -->
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo01.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo02.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo03.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo04.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo05.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo06.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo07.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo08.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo09.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo10.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo11.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo12.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo13.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo14.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo15.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo16.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo17.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo18.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo19.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo20.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo21.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo22.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo23.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo24.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo25.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo26.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo27.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo28.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo29.jpg" width=124 border=0></A> </DIV>
<DIV class=box><A class=imgBorder href="http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=20" target=_blank><IMG height=84  src="<?php echo IMG_PATH;?>logo30.jpg" width=124 border=0></A> </DIV>

<!-- 图片列表 end --></DIV>

<DIV class=RightBotton id=RightArr></DIV></DIV>
<SCRIPT language=javascript type=text/javascript>
<!--//--><![CDATA[//><!--
var scrollPic_02 = new ScrollPic();
scrollPic_02.scrollContId   = "ISL_Cont_1"; //内容容器ID
scrollPic_02.arrLeftId      = "LeftArr";//左箭头ID
scrollPic_02.arrRightId     = "RightArr"; //右箭头ID

scrollPic_02.frameWidth     = 1108;//显示框宽度
scrollPic_02.pageWidth      = 138; //翻页宽度

scrollPic_02.speed          = 10; //移动速度(单位毫秒，越小越快)
scrollPic_02.space          = 10; //每次移动像素(单位px，越大越快)
scrollPic_02.autoPlay       = true; //自动播放
scrollPic_02.autoPlayTime   = 3; //自动播放间隔时间(秒)

scrollPic_02.initialize(); //初始化
            
//--><!]]>
</SCRIPT>
</DIV>
<!--滚动图片 end-->
</div>
<div class="clear"></div></div></div>
<div id="mcontact" class="module" style="background:url(<?php echo IMG_PATH;?>bg1.gif) no-repeat center bottom;">

<table width="1100" border="0" cellspacing="0" cellpadding="0"  style="margin:auto;" height="240">
  <tr>
    <td height="90"><p class="zi5" style="width:380px;">联系我们<span class="zi6"> / CONTACT US</span></p></td>
  </tr>
  <tr>
    <td height="105" valign="top" class="zi3"><p class="ellipsis">地址：上海浦东杨新路88号2号楼 电话：021-68759736-820 业务邮箱：hu.xintian@hecg-sh.com </p>
    沪ICP备05100895号 版权所有 | 上海汉智工程建设集团有限公司 <a href="http://www.hecg-sh.com/index.php?m=admin&c=index&pc_hash=LfwAWh">管理</a></td>
  </tr>
  
</table>
</div>
<div id="shares"><a href="#" id="gotop"><i class="fa fa-angle-up"></i></a></div>
<div id="envon" class="ie">  
<div style="text-align:right;position:relative; left:-5px; top:45px; z-index:100"><a href="javascript:EV_closeAlert()"><img src="<?php echo IMG_PATH;?>close.png"  style=" width:30px !important;" height="30" alt="&lt;" /></a></div>  
<div>
<div id="wizard">
<div class="items">
<div class="page" style="background:url(<?php echo IMG_PATH;?>001.png) no-repeat; height:400px;">
<div style="margin-top:200px; margin-left:-110px; text-align:center; color:#C5AC66; font-size:16px; line-height:26px; font-family:'微软雅黑'"><p style="font-size:26px;">hi，终于等到你</p><br />
这里是汉智，我们是一个科技创新的公司，<br />
下面用一分钟快速了解我们吧！<br /><br />
<input type="image" src="<?php echo IMG_PATH;?>bt.png" onclick="javascript:document.forms['Form_2'].reset(); return false;" class="nextt  " style="margin-left:300px; margin-top:20px;"  /> 
</div>
</div>
<div class="page" style="background:url(<?php echo IMG_PATH;?>002.png) no-repeat; height:400px;">
<div style="margin-top:200px; margin-left:-10px; text-align:center; color:#C5AC66; font-size:16px; line-height:26px; font-family:'微软雅黑'">
<table width="399" border="0" cellpadding="0" cellspacing="0">
<tr><td width="100" rowspan="2" align="center"><p style="font-size:26px; line-height:30px;">我<br />们<br />是<br />谁<br />？</p></td>
<td height="148"  align="left" valign="top"> 上海汉智工程建设集团有限公司（以下简称汉智集团）于2010年正式注册成立，法定代表人：产正平。汉智集团旗下拥有5家子公司。集团总部设于上海浦东，在北京、杭州、沈阳、合肥、南通、昆明等地均设有分公司及办事处。</td></tr>
<tr><td height="52" align="right" valign="top">
<input type="image" src="<?php echo IMG_PATH;?>bt.png" onclick="javascript:document.forms['Form_2'].reset(); return false;" class="nextt  "  /> 
</td></tr>
</table>
<br />
</div>
</div>
<div class="page" style="background:url(<?php echo IMG_PATH;?>003.png) no-repeat; height:400px;">
<div style="margin-top:200px; margin-left:-10px; text-align:center; color:#C5AC66; font-size:16px; line-height:26px; font-family:'微软雅黑'">
<table width="399" border="0" cellpadding="0" cellspacing="0" height="200">
<tr>
<td width="100" rowspan="2" align="center"><p style="font-size:26px; line-height:30px;">我<br />们<br />的<br />能<br />力<br />？</p></td>
<td height="148"  align="left" valign="top" >
我们的专业团队包括注册建筑师、规划师、造价咨询师、室内设计师、景观设计师、注册建造师、注册监理师、注册投资咨询师、注册招标师以及在绿色建筑技术、BIM及数字化模拟等领域的中外专家。团队多次荣获工程大奖，积累了丰富的经验。
</td></tr>
<tr><td height="52" align="right" valign="top">
<input type="image" src="<?php echo IMG_PATH;?>bt.png" onclick="javascript:document.forms['Form_2'].reset(); return false;" class="nextt  "  /> 
</td>
</tr>
</table>
</div>
</div>
<div class="page" style="background:url(<?php echo IMG_PATH;?>004.png) no-repeat; height:400px;">
<div style="margin-top:200px; margin-left:-10px; text-align:center; color:#C5AC66; font-size:16px; line-height:26px; font-family:'微软雅黑'">
<table width="399" border="0" cellpadding="0" cellspacing="0" height="200">
<tr>
<td width="100" rowspan="2" align="center"><span style="font-size:26px; line-height:30px;">能<br />做<br />什<br />么<br />？</span></td>
<td   align="left" valign="top"  height="148" >
汉智集团是建设工程行业综合服务供应商，能为业主提供项目的全过程服务。同时具备城乡规划、工程测绘、风景园林、招投标代理、政府采购代理、房建总承包、市政总承包、装饰专项承包、机电安装专项承包、地基与基础专项承包、智能化设计施工一体化等专项资质。
</td></tr>
<tr>
<td height="52" align="right" valign="top"><input type="image" src="<?php echo IMG_PATH;?>bt.png" onclick="javascript:location='http://hecg-sh.com/index.php?m=content&c=index&a=lists&catid=26'"  value="跳转"  class="nextt  "  /> 
</td></tr>
</table>

</div>
</div>
</div>
</div>
</div> 




<script type="text/javascript">
$(function(){
$("#wizard").scrollable({
onSeek: function(event,i){
$("#status li").removeClass("active").eq(i).addClass("active");
},
onBeforeSeek:function(event,i){
if(i==1){
var user = $("#user").val();
if(user==""){
alert("！");
return false;
}
var pass = $("#pass").val();
var pass1 = $("#pass1").val();
if(pass==""){
alert("！");
return false;
}
if(pass1 != pass){
alert("！");
return false;
}
}
}
});

$("#sub").click(function(){
var data = $("form").serialize();
alert(data);
});

});
</script>
</body></html>