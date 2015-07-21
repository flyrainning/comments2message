<?php
/*
Plugin Name: comments2message
Plugin URI: http://comments2message.fengpiao.xyz
Description: 将评论调整为留言
Version: 0.8
Author: flyrainning
Author URI: http://www.fengpiao.xyz
*/

add_filter('comment_form_defaults', 'subpage_reset_comment',100);
function subpage_reset_comment($com){

	$com['comment_notes_before']='';
	$com['comment_notes_after']='';
	$com['title_reply'] = '我要留言';
	$com['title_reply_to'] ='';
	$com['cancel_reply_link']='';
	$com['label_submit']='提交';
	$com['comment_field']=str_replace('评论','留言',$com['comment_field']);
	$com['fields']['url']='';

	return $com;
}


?>
