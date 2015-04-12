<?php /* Smarty version 2.6.20, created on 2015-04-09 16:35:35
         compiled from header.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'label', 'header.htm', 31, false),array('modifier', 'truncate', 'header.htm', 46, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "site_nav.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="header">
	<div class="w fn-clear">
        <div class="logo">
        <a title="<?php echo $this->_tpl_vars['config']['company']; ?>
" href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
"><img src="<?php if ($this->_tpl_vars['config']['logo']): ?><?php echo $this->_tpl_vars['config']['logo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['config']['weburl']; ?>
/image/logo.gif<?php endif; ?>" /></a>
        </div>
        
        <?php if ($this->_tpl_vars['domain']): ?>
        <div class="domain">
        	<p class="p"><?php echo $this->_tpl_vars['domain']; ?>
</p>
            <p><a href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/sub_site.php">[城市分站]</a></p>
        </div>
        <?php endif; ?>
        
		<dl class="code">
            <dt>扫一扫</dt>
            <dd><img height="72" src="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/image/phpqrcode.jpg"></dd>
        </dl>
        
        <div class="search">
            <form action="" class="form" method="get">
            <div class="i-search">
                <input type="hidden" value="product" name="m" id="m">
                <input type="hidden" value="list" name="s" id="s">
                <input type="text" class="text" name="key" id="key" value="<?php echo $_GET['key']; ?>
" autocomplete="off">
			</div>
            <input type="submit" value="搜&nbsp;索" class="button">
            </form>
            <div class="hotwords">
                <strong>热门搜索：</strong>
                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'label', 'type' => 'searchword', 'temp' => 'search_word', 'limit' => 12)), $this); ?>

        	</div>
        </div>
    </div>  
</div>
<div class="menu">
    <div class="w">
    <dl class="dl">
        <dt class="dt"><h2><a href="javascript:void(0);">全部商品分类</a></h2></dt>
		<dd class="dd" <?php if ($_GET['m'] == 'product' && $_GET['s'] == 'index'): ?>style="display:block" <?php endif; ?> >
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'label', 'type' => 'cat', 'temp' => 'pro_cat_shop_left')), $this); ?>

            </dd>
        </dl>
        <ul class="menu-items">
            <?php $_from = $this->_tpl_vars['menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['nav'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['num'] => $this->_tpl_vars['list']):
        $this->_foreach['nav']['iteration']++;
?>
            <li <?php if ($this->_tpl_vars['list']['selected_flag'] == $this->_tpl_vars['current']): ?>class="current"<?php endif; ?>> <a href="<?php if (((is_array($_tmp=$this->_tpl_vars['list']['link_addr'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 4, '') : smarty_modifier_truncate($_tmp, 4, '')) == 'http'): ?><?php echo $this->_tpl_vars['list']['link_addr']; ?>
<?php else: ?><?php echo $this->_tpl_vars['config']['weburl']; ?>
/<?php echo $this->_tpl_vars['list']['link_addr']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['list']['menu_name']; ?>
</a>
            </li>
            <?php endforeach; endif; unset($_from); ?>
            <li class="cart">
            <a href="<?php echo $this->_tpl_vars['config']['weburl']; ?>
?m=product&s=cart">
            <b><script src="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/?m=product&s=cart_number"></script></b>
            我的购物车
            </a>
            </li>
        </ul>
    </div>
</div>