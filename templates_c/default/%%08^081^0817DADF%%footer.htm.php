<?php /* Smarty version 2.6.20, created on 2015-04-09 16:35:35
         compiled from footer.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'label', 'footer.htm', 6, false),)), $this); ?>
<script src="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/script/kissy.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['weburl']; ?>
/script/kissy.menu.js" type="text/javascript"></script>
<div class="fn-clear"></div>
<div class="footer fn-clear">
    <div class="w">
        <div class="helps fn-clear"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'label', 'type' => 'ftlink', 'temp' => 'ftlink_list')), $this); ?>
</div>
        <dl class="link fn-clear">
        	<dt>合作伙伴</dt>
            <dd><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'label', 'type' => 'friendlink', 'limit' => 20, 'temp' => 'friendlink')), $this); ?>
</dd>
        </dl>
        <div class="links"><?php echo $this->_tpl_vars['web_con']; ?>
</div>
        <div class="copyright"><?php echo $this->_tpl_vars['bt']; ?>
</div>
    </div>
</div>
</body>
</html>