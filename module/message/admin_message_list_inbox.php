<?php
include_once("$config[webroot]/includes/page_utf_class.php");
include_once("$config[webroot]/module/message/includes/plugin_msg_class.php");
//=============================================
$msg=new msg();
if(isset($_GET['did']))
{
	$pid=explode(',',$_GET['did']);
	foreach($pid as $val)
	{
		$msg->remove_mail($val);
	}
	die;
}
$type='inbox';
$tpl->assign("re",$msg ->mail_list($type));
//============================================
$tpl->assign("config",$config);
$tpl->assign("lang",$lang);
$output=tplfetch("admin_message_list.htm");
?>