<?php /* Smarty version 2.6.20, created on 2015-04-09 16:35:35
         compiled from product_index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getNotice', 'product_index.htm', 20, false),array('insert', 'label', 'product_index.htm', 44, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/script/jquery.flexslider-min.js"></script>
<link href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/script/jcarousel/skins/tango/skin.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/templates/<?php echo $this->_tpl_vars['config']['temp']; ?>
/css/product.css" rel="stylesheet" type="text/css" />
<div class="w fn-clear">
	<div class="adv">
    	<div class="adv787X327">
        	<!--<a href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
"><img src="image/new/adv/ad4.png" /></a>-->
			<script src='<?php echo $this->_tpl_vars['config']['weburl']; ?>
/api/ad.php?id=1&catid=<?php echo $_GET['id']; ?>
&name=<?php echo $_GET['key']; ?>
'></script>
        </div>
        <div class="adv787X161">
        	<!--<a href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
"><img src="image/new/adv/ad5.png" /></a>
        	<a href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
"><img src="image/new/adv/ad6.png" /></a>
        	<a href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
"><img src="image/new/adv/ad7.png" /></a>-->
        	<script src='<?php echo $this->_tpl_vars['config']['weburl']; ?>
/api/ad.php?id=2'></script>
        </div>
    </div>
    <div class="right_side">
		<dl class="notice">
            <dt>公告</dt>
            <dd class="fore1"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getNotice', 'limit' => 4)), $this); ?>
</dd>
            <dd class="fore2">
                <a class="login" href="login.php"></a>
                <a class="register" href="<?php echo $this->_tpl_vars['config']['regname']; ?>
"></a>
            </dd>
        </dl>
        <dl class="buying">
            <dt>即时抢购</dt>
            <dd class="adv196X110">
            <!--<a href=""><img src="image/new/adv/ad8.png" /></a>-->
            <script src='<?php echo $this->_tpl_vars['config']['weburl']; ?>
/api/ad.php?id=3'></script>
            </dd>
        </dl>
	</div>
</div>

<div class="w mt20 fn-clear">
    <dl class="hot">
        <dt class="dt">
        	<span class="current">疯狂抢购</span>
        	<span>热卖产品</span>
        	<span>新品上架</span>
        </dt>    
        <dd>
            <div class="i-mc fn-clear"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'label', 'type' => 'product', 'proid' => $this->_tpl_vars['config']['newpro'], 'temp' => 'product_list_li_1', 'limit' => 3)), $this); ?>
</div>
            <div class="i-mc fn-clear fn-hide"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'label', 'type' => 'product', 'proid' => $this->_tpl_vars['config']['hotpro'], 'temp' => 'product_list_li_1', 'limit' => 3)), $this); ?>
</div>
            <div class="i-mc fn-clear fn-hide"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'label', 'type' => 'product', 'temp' => 'product_list_li_1', 'limit' => 3)), $this); ?>
</div>
        </dd>
    </dl>
    <div class="right_side h470">
    	<div class="adv226X470">
        <!--<a href=""><img src="image/new/adv/ad9.png" /></a>-->
    	<script src='<?php echo $this->_tpl_vars['config']['weburl']; ?>
/api/ad.php?id=4'></script>
        </div>
    </div>
</div>

<div class="w adv1200X119">
	<!--<a href=""><img src="image/new/adv/ad10.png" /></a>-->
    <script src='<?php echo $this->_tpl_vars['config']['weburl']; ?>
/api/ad.php?id=5'></script>
</div>

<div class="w mt20 fn-clear">
	<div class="left fn-clear">
    <?php $_from = $this->_tpl_vars['categorys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['slist']):
?>
    <dl>
    	<div class="i-m">
            <dt style="border-left-color:<?php echo $this->_tpl_vars['slist']['color']; ?>
"><?php echo $this->_tpl_vars['slist']['name']; ?>
</dt>
            <dd class="fn-clear">
                <ul class="fn-clear"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'label', 'catid' => $this->_tpl_vars['slist']['catid'], 'type' => 'product', 'temp' => 'product_list_li_2', 'limit' => 3)), $this); ?>
</ul>
                <ul class="cat fn-clear">
                <?php $_from = $this->_tpl_vars['slist']['scat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num'] => $this->_tpl_vars['cat']):
?>
                		<li><a href="?m=product&s=list&id=<?php echo $this->_tpl_vars['cat']['catid']; ?>
"><?php echo $this->_tpl_vars['cat']['cat']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
                </ul>        
            </dd>
		</div>
    </dl>
    <?php endforeach; endif; unset($_from); ?>
	</div>
    <div class="right">
    	<dl class="sns">
        	<dt class="fn-clear">
            	<a target="_blank" href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/?m=sns">去广场看看</a>
            	<h2>广场动态</h2>
            </dt>
            <dd><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'label', 'type' => 'sns', 'temp' => 'sns_list_1', 'limit' => 7)), $this); ?>
</dd>
        </dl>
    	<!--<div class="news">
        	<dl>
            	<dt>精选信息</dt>
                <dd class="fore1">
                	<div class="mod-a">
                    	<div><a href=""><img src="http://gtms01.alicdn.com/tps/i1/T1PAtXFPxdXXcv.kZy-220-221.jpg" /></a></div>
                        <div>
                        <a href=""><img src="http://gtms02.alicdn.com/tps/i2/T1c0JXFH8dXXXEG.Zr-110-110.jpg" /></a>
                        <a href=""><img src="http://gtms01.alicdn.com/tps/i1/T1LHBbFGFaXXXEG.Zr-110-110.jpg" /></a>
                        </div>
                    </div>
                	<div class="mod-b"></div>
                </dd>
                <dd class="fore2"></dd>
                <dd class="fore3"></dd>
                <dd class="fore4"></dd>
            </dl>
        </div>-->
    </div>
</div>
<script>
$(".dt span").click(function(){
	var index=$(this).index();
	$(this).addClass("current").siblings().removeClass("current");
	$(this).parent().parent().find(".i-mc").eq(index).show().siblings(".i-mc").hide();
});
</script>