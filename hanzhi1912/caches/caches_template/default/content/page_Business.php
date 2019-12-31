<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_page"); ?>
  <style type="text/css">
/* 标签重定义 */
 #title{width:600px;margin:20px auto;text-align:left; font-size:12px;}
/* 定义关键帧 */
@-webkit-keyframes shade{
	from{opacity:1;}
	15%{opacity:0.4;}
	to{opacity:1;}
}
@-moz-keyframes shade{
	from{opacity:1;}
	15%{opacity:0.4;}
	to{opacity:1;}
}
@-ms-keyframes shade{
	from{opacity:1;}
	15%{opacity:0.4;}
	to{opacity:1;}
}
@-o-keyframes shade{
	from{opacity:1;}
	15%{opacity:0.4;}
	to{opacity:1;}
}
@keyframes shade{
	from{opacity:1;}
	15%{opacity:0.4;}
	to{opacity:1;}
}
/* wrap */
#wrap{width:auto;min-height:1300px;margin:0 auto;position:relative;}
#wrap .box{width:280px;height:auto;padding:2px;border:none;float:left;}
#wrap .box .info{width:280px;height:auto;}
#wrap .box .info .pic{width:260px;height:auto;margin:0 auto;padding-top:10px;}
#wrap .box .info .pic:hover{
	-webkit-animation:shade 3s ease-in-out 1;
	-moz-animation:shade 3s ease-in-out 1;
	-ms-animation:shade 3s ease-in-out 1;
	-o-animation:shade 3s ease-in-out 1;
	animation:shade 3s ease-in-out 1;
}
#wrap .box .info .pic img{width:260px;border-radius:3px;}
#wrap .box .info .title{width:260px;height:40px;margin:0 auto;line-height:40px;text-align:left;color:#666;font-size:14px;font-weight:bold;overflow:hidden;}
</style>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.js"></script>
<script type="text/javascript">
window.onload = function(){
	//运行瀑布流主函数
	PBL('wrap','box');
	
	//模拟数据
/*	var data = [{'src':'1.jpg','title':'万科地产'},{'src':'2.jpg','title':'万科地产'},{'src':'3.jpg','title':'万科地产'},{'src':'4.jpg','title':'万科地产'},{'src':'5.jpg','title':'万科地产'},{'src':'6.jpg','title':'万科地产'},{'src':'7.jpg','title':'万科地产'},{'src':'8.jpg','title':'万科地产'},{'src':'9.jpg','title':'万科地产'},{'src':'10.jpg','title':'万科地产'}];
*/	
	
	//设置滚动加载
	window.onscroll = function(){
		//校验数据请求
		if(getCheck()){
			var wrap = document.getElementById('wrap');
			for(i in data){
				//创建box
				var box = document.createElement('div');
				box.className = 'box';
				wrap.appendChild(box);
				//创建info
				var info = document.createElement('div');
				info.className = 'info';
				box.appendChild(info);
				//创建pic
				var pic = document.createElement('div');
				pic.className = 'pic';
				info.appendChild(pic);
				//创建img
				var img = document.createElement('img');
				img.src = 'images/'+data[i].src;
				img.style.height = 'auto';
				pic.appendChild(img);
				//创建title
				var title = document.createElement('div');
				title.className = 'title';
				info.appendChild(title);
				//创建a标记
				var a = document.createElement('a');
				a.innerHTML = data[i].title;
				title.appendChild(a);
			}
			PBL('wrap','box');
		}
	}
}
/**
* 瀑布流主函数
* @param  wrap	[Str] 外层元素的ID
* @param  box 	[Str] 每一个box的类名
*/
function PBL(wrap,box){
	//	1.获得外层以及每一个box
	var wrap = document.getElementById(wrap);
	var boxs  = getClass(wrap,box);
	//	2.获得屏幕可显示的列数
	var boxW = boxs[0].offsetWidth;
	var colsNum = Math.floor(document.documentElement.clientWidth/boxW);
	wrap.style.width = boxW*colsNum+'px';//为外层赋值宽度
	//	3.循环出所有的box并按照瀑布流排列
	var everyH = [];//定义一个数组存储每一列的高度
	for (var i = 0; i < boxs.length; i++) {
		if(i<colsNum){
			everyH[i] = boxs[i].offsetHeight;
		}else{
			var minH = Math.min.apply(null,everyH);//获得最小的列的高度
			var minIndex = getIndex(minH,everyH); //获得最小列的索引
			getStyle(boxs[i],minH,boxs[minIndex].offsetLeft,i);
			everyH[minIndex] += boxs[i].offsetHeight;//更新最小列的高度
		}
	}
}
/**
* 获取类元素
* @param  warp		[Obj] 外层
* @param  className	[Str] 类名
*/
function getClass(wrap,className){
	var obj = wrap.getElementsByTagName('*');
	var arr = [];
	for(var i=0;i<obj.length;i++){
		if(obj[i].className == className){
			arr.push(obj[i]);
		}
	}
	return arr;
}
/**
* 获取最小列的索引
* @param  minH	 [Num] 最小高度
* @param  everyH [Arr] 所有列高度的数组
*/
function getIndex(minH,everyH){
	for(index in everyH){
		if (everyH[index] == minH ) return index;
	}
}
/**
* 数据请求检验
*/
function getCheck(){
	var documentH = document.documentElement.clientHeight;
	var scrollH = document.documentElement.scrollTop || document.body.scrollTop;
	return documentH+scrollH>=getLastH() ?true:false;
}
/**
* 获得最后一个box所在列的高度
*/
function getLastH(){
	var wrap = document.getElementById('wrap');
	var boxs = getClass(wrap,'box');
	return boxs[boxs.length-1].offsetTop+boxs[boxs.length-1].offsetHeight;
}
/**
* 设置加载样式
* @param  box 	[obj] 设置的Box
* @param  top 	[Num] box的top值
* @param  left 	[Num] box的left值
* @param  index [Num] box的第几个
*/
var getStartNum = 0;//设置请求加载的条数的位置
function getStyle(box,top,left,index){
    if (getStartNum>=index) return;
    $(box).css({
    	'position':'absolute',
        'top':top,
        "left":left,
        "opacity":"0"
    });
    $(box).stop().animate({
        "opacity":"1"
    },999);
    getStartNum = index;//更新请求数据的条数位置
}
</script>
<link href="css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="js/home-jquey.js" data-main="indexMain"></script>
<div id="sitecontent"> 
<div class="npagePage pageEditor" id="page_about">
<div id="banner"><div style="background-image:url(uploadfile/server.jpg);"></div>
</div>
<div style="border-bottom:1px solid #2B2B2B; height:60px; background-color:#161616; line-height:60px; text-align:right; padding-right:100px;">
您的位置：<a href="index.html">首页</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a href="<?php echo $CAT['url'];?>">
<?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a href="<?php echo $CAT['url'];?>"><?php echo $CAT['catname'];?></a>
</div>
<div class="content">
<div class="mpageEditor module"><div class="module_container">
<div class="container_header" >
<div  class="biaoti"><?php echo $title;?></div>
</div>
 <div class="container_content"><div class="content_wrapper" style="background:url(uploadfile/bg.gif) no-repeat bottom center;"><div class="postbody">
 
 <table width="600" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center"  height="200" style="background:url(statics/images/img03.gif) no-repeat center center;">

  <?php echo $content;?></td>
</tr>
  <tr>
  <td>
  <div class="container_header wow" ><p class="biaoti">典型客户</p><br /><br />
    <img src="<?php echo IMG_PATH;?>jt.png" width="14" height="7" /></p>
  </div>
  </td>
  </tr>
</table>
<div id="wrap">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6abbb6c94a37b9fa1054f7e479df6338&action=lists&catid=32&num=10&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'32','order'=>'id DESC','limit'=>'10',));}?> 
<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
<DIV class=box><div class="info"><div class="pic"><img src="<?php echo thumb($v['thumb'],500,0);?>"></div><div class="title"><?php echo str_cut($v['title'],46);?></div>
</div>
</div><?php $n++;}unset($n); ?>               
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
</div></div></div></div></div></div></div>
<?php include template("content","footer"); ?>