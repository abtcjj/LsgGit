<?php /* Smarty version 2.6.20, created on 2015-04-09 16:35:35
         compiled from site_nav.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if ($this->_tpl_vars['title']): ?><?php echo $this->_tpl_vars['title']; ?>
,<?php echo $this->_tpl_vars['config']['company']; ?>
<?php else: ?><?php echo $this->_tpl_vars['config']['title']; ?>
,<?php echo $this->_tpl_vars['config']['company']; ?>
<?php endif; ?></title>
<meta name="description" content="<?php echo $this->_tpl_vars['config']['description']; ?>
" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['config']['keyword']; ?>
" />
<script src="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/script/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/script/base.js" type="text/javascript"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/templates/<?php echo $this->_tpl_vars['config']['temp']; ?>
/css/page.css" rel="stylesheet" type="text/css" />
</head>
<body <?php if ($this->_tpl_vars['current'] == 'index'): ?>class="gray"<?php endif; ?>>
<div class="shortcut">
    <div class="w fn-clear">
		<ul class="fn-right">
			<li><script src="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/login_statu.php"></script></li>
            <li><s></s><a href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/main.php?cg_u_type=1">我的商城</a></li>
            <li><s></s><a href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/main.php?cg_u_type=2">卖家中心</a></li>
            <li><s></s><a href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/main.php?m=sns&s=admin_share_product">我的收藏</a></li>
            <li><s></s><a href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/main.php?m=message&s=admin_message_list_inbox">站内消息</a></li>
		</ul>
        <ul class="fn-left">
            <li class="index"><b></b><a href="javascript:addToFavorite('<?php echo $this->_tpl_vars['config']['weburl']; ?>
','<?php echo $this->_tpl_vars['config']['company']; ?>
')"> 收藏首页</a></li>
            <li class="mobile"><b></b><a href="wap.php">手机版</a></li>
			<?php if ($this->_tpl_vars['config']['domaincity'] && $this->_tpl_vars['config']['baseurl']): ?>
			<li><a href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/sub_site.php">城市分站</a></li>
            <?php endif; ?>
        </ul>
	</div>
</div>