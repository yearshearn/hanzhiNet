<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_page"); ?>
<div id="sitecontent"> 
<div class="npagePage pageEditor" id="page_about">
<div id="banner"><div style="background-image:url(uploadfile/1.jpg);"></div>
</div>
<div style="border-bottom:1px solid #2B2B2B; height:60px; background-color:#161616; line-height:60px; text-align:right; padding-right:100px;">
您的位置：<a href="index.html">首页</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a>走进汉智</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a href="<?php echo $CAT['url'];?>"><?php echo $CAT['catname'];?></a>
</div>
<div class="content">
<div class="mpageEditor module"><div class="module_container">
<div class="container_header" >
<div  class="biaoti"><?php echo $title;?></div>
</div>
<div class="container_content"><div class="content_wrapper" style="background:url(uploadfile/bg.gif) no-repeat bottom center;"><div class="postbody">
<table border="0" align="center"  style="width:1000px;margin:10px auto; ">
<tr>
<td width="52%">
<div class="i_zxme">
<div class="i_zxmel">
<div class="i_zxmelc">
<div class="i_zxmelc1">
<ul>
<li id="two1" onmouseover="setContentTab('two',1,9)" class="hover"><a href="#">营业执照</a></li>
<li id="two2" onmouseover="setContentTab('two',2,9)"><a href="#">资质证书</a></li>
<li id="two3" onmouseover="setContentTab('two',3,9)"><a href="#">荣誉证书</a></li>
</ul>
</div><!--i_zxmelc1-->
<div class="i_zxmelc3">
<div id="con_two_1" style="display: block;">
<div class="i_zxmelc2" style=" background:#1C1C1C;">
<div align="center">
<!--滚动图片 start-->
<DIV class=rollphotos>
<DIV class=blk_29>
<DIV class=LeftBotton id=LeftArr></DIV>
<DIV class=Cont id=ISL_Cont_1 style="margin-top:50px;"><!-- 图片列表 begin -->

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=af0818162bf9c65c0c12aadcdfb2a350&action=lists&catid=29&num=10&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'29','order'=>'id DESC','limit'=>'10',));}?> 
<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
<DIV class=box>
<a href="<?php echo $v['url'];?>" class=imgBorder ><img src="<?php echo thumb($v['thumb'],400,0);?>" alt="<?php echo $v['title'];?>" style="width:160px; height:240px" onMouseOver="toolTip('<img src=<?php echo thumb($v['thumb'],400,0);?>>')" onMouseOut="toolTip()"/></a><?php echo str_cut($v['title'],46);?></div>
<?php $n++;}unset($n); ?>               
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</DIV>
<DIV class=RightBotton id=RightArr></DIV></DIV>
</DIV>
<!--滚动图片 end-->
</div>					
</div>
</div><!--con_one5_1-->
<div id="con_two_2" style="display: none;">
<div class="i_zxmelc2" style="background-color:#1C1C1C;">
<div align="center">
<!--滚动图片 start-->
<DIV class=rollphotos>
<DIV class=blk_29>
<DIV class=LeftBotton id=LeftArr1></DIV>
<DIV class=Cont id=ISL_Cont_11 style="margin-top:50px;"><!-- 图片列表 begin -->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ceb62de287f0cc74a255791ff445be9f&action=lists&catid=31&num=10&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'31','order'=>'id DESC','limit'=>'10',));}?> 
<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
<DIV class=box>
<a href="<?php echo $v['url'];?>" class=imgBorder ><img src="<?php echo thumb($v['thumb'],400,0);?>" alt="<?php echo $v['title'];?>" style="width:160px; height:240px" onMouseOver="toolTip('<img src=<?php echo thumb($v['thumb'],400,0);?>>')" onMouseOut="toolTip()"/></a><?php echo str_cut($v['title'],46);?></div>
<?php $n++;}unset($n); ?>               
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</DIV>
<DIV class=RightBotton id=RightArr1></DIV></DIV>
</DIV>
<!--滚动图片 end-->
</div>			
</div>
</div><!--con_one5_2-->
<div id="con_two_3" style="display: none;">
<div class="i_zxmelc2" style="background-color:#1C1C1C;">
<div align="center">
<!--滚动图片 start-->
<DIV class=rollphotos>
<DIV class=blk_29>
<DIV class=LeftBotton id=LeftArr2></DIV>
<DIV class=Cont id=ISL_Cont_12 style="margin-top:50px;"><!-- 图片列表 begin -->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0e97fe02c42e803bd62b7b386bdf4add&action=lists&catid=30&num=10&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'30','order'=>'id DESC','limit'=>'10',));}?> 
<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
<DIV class=box>
<a href="<?php echo $v['url'];?>" class=imgBorder ><img src="<?php echo thumb($v['thumb'],400,0);?>" alt="<?php echo $v['title'];?>" style="width:160px; height:240px" onMouseOver="toolTip('<img src=<?php echo thumb($v['thumb'],400,0);?>>')" onMouseOut="toolTip()"/></a><?php echo str_cut($v['title'],46);?></div>
<?php $n++;}unset($n); ?>               
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</DIV>
<DIV class=RightBotton id=RightArr2></DIV></DIV>
</DIV>
<!--滚动图片 end-->
</div>					
</div>
</div><!--con_one5_3-->
</div>   <!--i_zxmelc3d--> 
</div><!--con_one5_9-->
</div><!--i_zxmelc3-->
</div><!--i_zxmelc-->                  
</td>
</tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>   
</div>		 
</div>
</div></div></div></div></div></div></div>
<script language="javascript" src="<?php echo JS_PATH;?>ToolTip.js"></script>
<SCRIPT language=javascript type=text/javascript>
<!--//--><![CDATA[//><!--
var scrollPic_02 = new ScrollPic();
scrollPic_02.scrollContId   = "ISL_Cont_1"; //内容容器ID
scrollPic_02.arrLeftId      = "LeftArr";//左箭头ID
scrollPic_02.arrRightId     = "RightArr"; //右箭头ID
scrollPic_02.frameWidth     = 950;//显示框宽度
scrollPic_02.pageWidth      = 190; //翻页宽度
scrollPic_02.speed          = 10; //移动速度(单位毫秒，越小越快)
scrollPic_02.space          = 10; //每次移动像素(单位px，越大越快)
scrollPic_02.autoPlay       = false; //自动播放
scrollPic_02.autoPlayTime   = 3; //自动播放间隔时间(秒)
scrollPic_02.initialize(); //初始化
//--><!]]>

<!--//--><![CDATA[//><!--
var scrollPic_02 = new ScrollPic();
scrollPic_02.scrollContId   = "ISL_Cont_11"; //内容容器ID
scrollPic_02.arrLeftId      = "LeftArr1";//左箭头ID
scrollPic_02.arrRightId     = "RightArr1"; //右箭头ID
scrollPic_02.frameWidth     = 950;//显示框宽度
scrollPic_02.pageWidth      = 190; //翻页宽度
scrollPic_02.speed          = 10; //移动速度(单位毫秒，越小越快)
scrollPic_02.space          = 10; //每次移动像素(单位px，越大越快)
scrollPic_02.autoPlay       = false; //自动播放
scrollPic_02.autoPlayTime   = 3; //自动播放间隔时间(秒)
scrollPic_02.initialize(); //初始化

//--><!]]>
<!--//--><![CDATA[//><!--
var scrollPic_02 = new ScrollPic();
scrollPic_02.scrollContId   = "ISL_Cont_12"; //内容容器ID
scrollPic_02.arrLeftId      = "LeftArr2";//左箭头ID
scrollPic_02.arrRightId     = "RightArr2"; //右箭头ID
scrollPic_02.frameWidth     = 950;//显示框宽度
scrollPic_02.pageWidth      = 190; //翻页宽度
scrollPic_02.speed          = 10; //移动速度(单位毫秒，越小越快)
scrollPic_02.space          = 10; //每次移动像素(单位px，越大越快)
scrollPic_02.autoPlay       = false; //自动播放
scrollPic_02.autoPlayTime   = 3; //自动播放间隔时间(秒)
scrollPic_02.initialize(); //初始化
//--><!]]>
</SCRIPT>
<?php include template("content","footer"); ?>