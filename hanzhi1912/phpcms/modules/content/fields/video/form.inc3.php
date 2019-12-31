
	function video($field, $value, $fieldinfo) {
		$value_data = '';
		//获取flash上传属性
		pc_base::load_app_class('ku6api', 'video', 0);
		$setting = getcache('video', 'video');
		if(empty($setting)) return L('please_input_video_setting');
		$ku6api = new ku6api($setting['sn'], $setting['skey']);
		$flash_info = $ku6api->flashuploadparam();
		
		//获取上传的视频
		$key = 0;
		$list_str = "<div style='padding:1px'><ul class=\"tbsa\" id=\"video_{$field}_list\">";
		if($value) {
			$video_content_db = pc_base::load_model('video_content_model');
			$video_store_db = pc_base::load_model('video_store_model');
			$videos = $video_content_db->select(array('contentid'=>$this->id), 'videoid, listorder', '', '`listorder` ASC', '', 'videoid');
			if (!empty($videos)) {
				$videoids = '';
				foreach ($videos as $v) {
					$videoids .= $v['videoid'].',';
				}
				$videoids = substr($videoids, 0, -1);
				$result = $video_store_db->select("`videoid` IN($videoids)", '`videoid`, `title`, `picpath`', '', '', '', 'videoid');
				if (is_array($result)) {
					//首先对$result按照$videos的videoid排序
					foreach ($videos as $_vid => $v) {
						$new_result[] = $result[$_vid];
					}
					unset($result, $_vid, $v);
					foreach ($new_result as $_k => $r) {
						$key = $_k+1;
						$picpath = $r['picpath'] ? $r['picpath'] : IMG_PATH.'nopic.gif';
						$list_str .= "<li class=\"ac\" id=\"video_{$field}_{$key}\"><div class=\"r1\"><img src=\"{$r['picpath']}\" onerror=\"".IMG_PATH."nopic.jpg\" width=\"132\" height=\"75\"><input type='text' name='{$field}_video[{$key}][title]' value='".$r['title']."' class=\"input-text ipt_box\"><input type='hidden' name='{$field}_video[{$key}][videoid]' value='{$r[videoid]}'><div class=\"r2\"><span class=\"l\"><label>".L('listorder')."</label><input type='text' name='{$field}_video[$key][listorder]' value='".$videos[$r['videoid']]['listorder']."' class=\"input-text\"></span><span class=\"r\"> <a href=\"javascript:remove_div('video_{$field}_{$key}')\">".L('delete')."</a></span></li>";
					}
				}
			}
		}
		$list_str .= "</ul></div>";
		$data = '';
		if (!defined('SWFOBJECT_INIT')) {
			$data .= '<script type="text/javascript" src="'.JS_PATH.'video/swfobject2.js"></script>';
			$data .= '<script type="text/javascript" src="'.JS_PATH.'video/vod2ckedit.js"></script>';
			define('SWFOBJECT_INIT', 1);
			$data .= '<SCRIPT LANGUAGE="JavaScript">

<!--

var js4swf = {

    onInit: function(list)

    {

        // 初始化时调用, 若 list.length > 0 代表有可续传文件

        // [{file}, {file}]

if(list.length > 0) {

    var length = list.length-1;

$("#list_name").html("'.L('file', '', 'video').'"+list[length].name+"'.L('failed_uplaod_choose_again', '', 'video').'");

}

        this.showMessage("init", list);

    },

    onSelect: function(files)

    {
