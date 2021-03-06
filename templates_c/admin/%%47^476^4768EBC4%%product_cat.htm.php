<?php /* Smarty version 2.6.20, created on 2015-04-09 19:42:27
         compiled from product_cat.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'in_array', 'product_cat.htm', 76, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>产品分类</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../script/jquery-1.4.4.min.js"></script>
<script src="../script/my_lightbox.js" language="javascript"></script>
</head>
<body>
	<div class="container">
        <div class="flow">
            <div class="itemtitle">
                <h3>产品分类</h3>
                <ul>
                    <li <?php if ($_GET['operation'] == ''): ?>class="current"<?php endif; ?>><a href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
"><span>管理</span></a></li>
                   	<li <?php if ($_GET['operation'] == 'add'): ?>class="current"<?php endif; ?>><a href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
&operation=add"><span>添加</span></a></li>
                    <?php if ($_GET['operation'] == 'edit'): ?>
                    <li class="current"><a href="#"><span>修改</span></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="h35"></div>
        <form action="" method="post">
        <?php if ($_GET['operation'] == 'add' || $_GET['operation'] == 'edit'): ?>
            <form name="form" id="form" method="post">
            <input name="id" type="hidden" id="id" value="<?php echo $this->_tpl_vars['re']['catid']; ?>
">
            <table class="table table1">
                <thead>
                    <tr>
                        <th class="partition" colspan="99">产品分类</th>
                    </tr>
                </thead>
                <tbody>
                
                <tr>
                    <td width="100">分类</td>
                    <td>
                    <select class="ws350" name='pid' >
                    	<option value='0'>顶级类别</option>
                        <?php $_from = $this->_tpl_vars['de']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
                        
             			<option <?php if ($this->_tpl_vars['re']['cid'] == $this->_tpl_vars['list']['catid'] || $_GET['catid'] == $this->_tpl_vars['list']['catid']): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['list']['catid']; ?>
"><?php echo $this->_tpl_vars['list']['cat']; ?>
</option>
                           
                            <?php $_from = $this->_tpl_vars['list']['scat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['slist']):
?>
                            <option <?php if ($this->_tpl_vars['re']['cid'] == $this->_tpl_vars['slist']['catid'] || $_GET['catid'] == $this->_tpl_vars['slist']['catid']): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['slist']['catid']; ?>
">|__<?php echo $this->_tpl_vars['slist']['cat']; ?>
</option>
                            	    
                                    <?php $_from = $this->_tpl_vars['slist']['scat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lists']):
?>
                                    <option <?php if ($this->_tpl_vars['re']['cid'] == $this->_tpl_vars['lists']['catid'] || $_GET['catid'] == $this->_tpl_vars['lists']['catid']): ?> selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['lists']['catid']; ?>
">|____<?php echo $this->_tpl_vars['lists']['cat']; ?>
</option>
                            		<?php endforeach; endif; unset($_from); ?> 
                                    
                            <?php endforeach; endif; unset($_from); ?> 
                            
                        <?php endforeach; endif; unset($_from); ?> 
            		</select>
                    <div id="form-error" class="form-error"></div>
                    </td>
                </tr>
               
                <tr>
                    <td>分类名</td>
                    <td>
                    <?php if ($_GET['operation'] == 'edit'): ?>
                    <input name="cat" type="text" id="cat" class="w350" value="<?php echo $this->_tpl_vars['re']['cat']; ?>
"/>
                    <?php else: ?>
                    <textarea name="cat" id="cat" class="w350" rows="10"></textarea>
                    <?php endif; ?>
                    <div id="form-error" class="form-error"></div>
                    </td>
                </tr>
                <tr>
                	<td>不显示月份</td>
                	<td>
       				<?php unset($this->_sections['name']);
$this->_sections['name']['name'] = 'name';
$this->_sections['name']['loop'] = is_array($_loop=12) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['name']['show'] = true;
$this->_sections['name']['max'] = $this->_sections['name']['loop'];
$this->_sections['name']['step'] = 1;
$this->_sections['name']['start'] = $this->_sections['name']['step'] > 0 ? 0 : $this->_sections['name']['loop']-1;
if ($this->_sections['name']['show']) {
    $this->_sections['name']['total'] = $this->_sections['name']['loop'];
    if ($this->_sections['name']['total'] == 0)
        $this->_sections['name']['show'] = false;
} else
    $this->_sections['name']['total'] = 0;
if ($this->_sections['name']['show']):

            for ($this->_sections['name']['index'] = $this->_sections['name']['start'], $this->_sections['name']['iteration'] = 1;
                 $this->_sections['name']['iteration'] <= $this->_sections['name']['total'];
                 $this->_sections['name']['index'] += $this->_sections['name']['step'], $this->_sections['name']['iteration']++):
$this->_sections['name']['rownum'] = $this->_sections['name']['iteration'];
$this->_sections['name']['index_prev'] = $this->_sections['name']['index'] - $this->_sections['name']['step'];
$this->_sections['name']['index_next'] = $this->_sections['name']['index'] + $this->_sections['name']['step'];
$this->_sections['name']['first']      = ($this->_sections['name']['iteration'] == 1);
$this->_sections['name']['last']       = ($this->_sections['name']['iteration'] == $this->_sections['name']['total']);
?>
                    <label><input type="checkbox" name="month[]" <?php if ($this->_tpl_vars['re']['cat']): ?><?php if (@ ((is_array($_tmp=$this->_sections['name']['index']+1)) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['re']['month']) : in_array($_tmp, $this->_tpl_vars['re']['month']))): ?>checked="checked"<?php endif; ?><?php endif; ?> value="<?php echo $this->_sections['name']['index']+1; ?>
" /><?php echo $this->_sections['name']['index']+1; ?>
月</label>
                    <?php endfor; endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>佣金提成</td>
                    <td>
                    <input name="commission" type="text" id="commission" class="w350" value="<?php echo $this->_tpl_vars['re']['commission']; ?>
"/>
                    </td>
                </tr>
                
                <tr>
                    <td>关连属性集</td>
                    <td>
                    <select class="ws350" name="ext_field_cat" >
              		<option value="">不关连属性集</option>
                    <?php $_from = $this->_tpl_vars['property']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
                    <option <?php if ($this->_tpl_vars['re']['ext_field_cat'] == $this->_tpl_vars['list']['id']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['list']['id']; ?>
"><?php echo $this->_tpl_vars['list']['name']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                    </td>
                </tr>
                
                <tr>
                    <td>推荐显示</td>
                    <td>
                    <input type="checkbox" value="1" id="isindex" name="isindex"  <?php if ($this->_tpl_vars['re']['isindex']): ?> checked="checked" <?php endif; ?> >
                    </td>
                </tr>
                
                <tr>
                    <td>是否支持购买</td>
                    <td>
                    <input type="checkbox" value="1" id="isbuy" name="isbuy"  <?php if ($this->_tpl_vars['re']['isbuy']): ?> checked="checked" <?php endif; ?> >
                    </td>
                </tr>
                
                <tr>
                    <td>LOGO</td>
                    <td>
                    <input name="pic" class="w350" type="text" id="pic" value="<?php echo $this->_tpl_vars['re']['pic']; ?>
" />
                    <input name="oldpic" type="hidden" value="<?php echo $this->_tpl_vars['de']['pic']; ?>
" />
                    [<a href="javascript:uploadfile('上传LOGO','pic',40,30,'cat')">上传</a>] 
                    [<a href="javascript:preview('pic');">预览</a>]
                    [<a onclick="javascript:$('#pic').val('');" href="#">删除</a>] <span class="bz"></span>
                    </td>
                </tr>
                
                <tr>
                    <td>选中标志</td>
                    <td>
                    <input type="text" id="current" name="current"  value="<?php echo $this->_tpl_vars['re']['current']; ?>
" >
                    </td>
                </tr>
                
                <tr>
                    <td>模版</td>
                    <td>
                    <input type="text" id="templates" name="templates"  value="<?php echo $this->_tpl_vars['re']['templates']; ?>
" >
                    </td>
                </tr>
                
                <tr>
                    <td>关联品牌</td>
                    <td>
                    <?php $_from = $this->_tpl_vars['brand']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
					<?php if ($this->_tpl_vars['list']['brand']): ?>
                        <dl class="brand">
                            <dt><?php echo $this->_tpl_vars['list']['catname']; ?>
</dt>
                            <dl>
                                <?php $_from = $this->_tpl_vars['list']['brand']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['slist']):
?>
                                <label>
                                <input <?php if (@ ((is_array($_tmp=$this->_tpl_vars['slist']['id'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['re']['brands']) : in_array($_tmp, $this->_tpl_vars['re']['brands']))): ?>checked="checked"<?php endif; ?> name="brand[]" type="checkbox" value="<?php echo $this->_tpl_vars['slist']['id']; ?>
">
                                <?php echo $this->_tpl_vars['slist']['name']; ?>

                                </label>
                                <?php endforeach; endif; unset($_from); ?>
                            </dl>
                        </dl>
					<?php endif; ?> 
                    <?php endforeach; endif; unset($_from); ?>
                    </td>
                </tr>
                
                
                <tr>
                    <td>&nbsp;</td>
                    <td>
                    <input class="submit" type="submit" value="提交">
                    <input name="act" type="hidden" id="action" value="<?php if (! $_GET['editid']): ?>save<?php else: ?>edit<?php endif; ?>">
                   
                    </td>
                </tr>
                </tbody>
            </table>
            </form>
        <?php else: ?>
        <table class="table">
            <tbody>
                <tr class="header partition">
                    <th width="30"></th>
                    <th width="70">显示顺序</th>
                    <th class="al">分类名称</th>
                    <th>关联属性</th>
                    <th>显示</th>
                    <th width="70"></th>
                </tr>
            </tbody>  
            <?php $_from = $this->_tpl_vars['de']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
            <tbody>
                <tr>
                	<?php if ($this->_tpl_vars['list']['scat']): ?>
                	<td onclick="toggle_group('group_<?php echo $this->_tpl_vars['list']['catid']; ?>
')">
                    <a id="a_group_<?php echo $this->_tpl_vars['list']['catid']; ?>
" href="javascript:void(0)">[-]</a>
                    </td>
                    <?php else: ?><td></td><?php endif; ?>
                    <td class="al"><input type="text" class="w50" maxlength="3" name="displayorder[<?php echo $this->_tpl_vars['list']['catid']; ?>
]" value="<?php echo $this->_tpl_vars['list']['nums']; ?>
" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" onkeyup="value=value.replace(/[^\d]/g,'')" /></td>
                    <td class="al">
                        <input type="text" class="w150" name="name[<?php echo $this->_tpl_vars['list']['catid']; ?>
]" value="<?php echo $this->_tpl_vars['list']['cat']; ?>
" />
                        <a class="addchildboard" href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
&operation=add&catid=<?php echo $this->_tpl_vars['list']['catid']; ?>
">添加子分类</a>
                    </td>
                    <td><?php if ($this->_tpl_vars['list']['property']): ?><?php echo $this->_tpl_vars['list']['property']; ?>
<?php else: ?>通用<?php endif; ?></td>
                    <td><?php if ($this->_tpl_vars['list']['isindex'] == 1): ?>显示<?php else: ?>不显示<?php endif; ?></td>
                    <td>
					<a href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
&operation=edit&editid=<?php echo $this->_tpl_vars['list']['catid']; ?>
"><?php echo $this->_tpl_vars['editimg']; ?>
</a>
                    <a onclick="return confirm('确定删除吗');" href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
&delid=<?php echo $this->_tpl_vars['list']['catid']; ?>
"><?php echo $this->_tpl_vars['delimg']; ?>
</a>
                  
                   </td>
                </tr>
            </tbody>
            
            <?php if ($this->_tpl_vars['list']['scat']): ?>
            <tbody id="group_<?php echo $this->_tpl_vars['list']['catid']; ?>
">
            <?php $_from = $this->_tpl_vars['list']['scat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['slist']):
?>
                <tr>
                	<td></td>
                	<td class="al"><input type="text" class="w50" maxlength="3" name="displayorder[<?php echo $this->_tpl_vars['slist']['catid']; ?>
]" value="<?php echo $this->_tpl_vars['slist']['nums']; ?>
" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" onkeyup="value=value.replace(/[^\d]/g,'')" /></td>
                    <td  class="al"><div class="board"><input type="text" class="w150" name="name[<?php echo $this->_tpl_vars['slist']['catid']; ?>
]" value="<?php echo $this->_tpl_vars['slist']['cat']; ?>
" /><a class="addchildboard" href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
&operation=add&catid=<?php echo $this->_tpl_vars['slist']['catid']; ?>
">添加子分类</a></div></td>
                    <td><?php if ($this->_tpl_vars['slist']['property']): ?><?php echo $this->_tpl_vars['slist']['property']; ?>
<?php else: ?>通用<?php endif; ?></td>
                    <td><?php if ($this->_tpl_vars['slist']['isindex'] == 1): ?>显示<?php else: ?>不显示<?php endif; ?></td>
                    <td>
					<a href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
&operation=edit&editid=<?php echo $this->_tpl_vars['slist']['catid']; ?>
"><?php echo $this->_tpl_vars['editimg']; ?>
</a>
                    <a onclick="return confirm('确定删除吗');" href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
&delid=<?php echo $this->_tpl_vars['slist']['catid']; ?>
"><?php echo $this->_tpl_vars['delimg']; ?>
</a>
                   </td>
                </tr>
            
			<?php $_from = $this->_tpl_vars['slist']['scat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['clist']):
?>
				<tr>
                	<td></td>
                	<td class="al"><input type="text" class="w50" maxlength="3" name="displayorder[<?php echo $this->_tpl_vars['clist']['catid']; ?>
]" value="<?php echo $this->_tpl_vars['clist']['nums']; ?>
" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" onkeyup="value=value.replace(/[^\d]/g,'')" /></td>
                    <td class="al"><div class="childboard"><input type="text" class="w150" name="name[<?php echo $this->_tpl_vars['clist']['catid']; ?>
]" value="<?php echo $this->_tpl_vars['clist']['cat']; ?>
" /><a class="addchildboard" href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
&operation=add&catid=<?php echo $this->_tpl_vars['clist']['catid']; ?>
">添加子分类</a></div></td>
                    <td><?php if ($this->_tpl_vars['clist']['property']): ?><?php echo $this->_tpl_vars['clist']['property']; ?>
<?php else: ?>通用<?php endif; ?></td>
                    <td><?php if ($this->_tpl_vars['clist']['isindex'] == 1): ?>显示<?php else: ?>不显示<?php endif; ?></td>
                    <td>
					<a href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
&operation=edit&editid=<?php echo $this->_tpl_vars['clist']['catid']; ?>
"><?php echo $this->_tpl_vars['editimg']; ?>
</a>
                    <a onclick="return confirm('确定删除吗');" href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
&delid=<?php echo $this->_tpl_vars['clist']['catid']; ?>
"><?php echo $this->_tpl_vars['delimg']; ?>
</a>
                   </td>
                </tr>
             <?php $_from = $this->_tpl_vars['clist']['scat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lists']):
?>
				<tr>
                	<td></td>
                	<td class="al"><input type="text" class="w50" maxlength="3" name="displayorder[<?php echo $this->_tpl_vars['lists']['catid']; ?>
]" value="<?php echo $this->_tpl_vars['lists']['nums']; ?>
" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" onkeyup="value=value.replace(/[^\d]/g,'')" /></td>
                    <td class="al"><div class="childsboard"><input type="text" class="w150" name="name[<?php echo $this->_tpl_vars['lists']['catid']; ?>
]" value="<?php echo $this->_tpl_vars['lists']['cat']; ?>
" /></div></td>
                    <td><?php if ($this->_tpl_vars['lists']['property']): ?><?php echo $this->_tpl_vars['lists']['property']; ?>
<?php else: ?>通用<?php endif; ?></td>
                    <td><?php if ($this->_tpl_vars['lists']['isindex'] == 1): ?>显示<?php else: ?>不显示<?php endif; ?></td>
                    <td>
					<a href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
&operation=edit&editid=<?php echo $this->_tpl_vars['lists']['catid']; ?>
"><?php echo $this->_tpl_vars['editimg']; ?>
</a>
                    <a onclick="return confirm('确定删除吗');" href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
&delid=<?php echo $this->_tpl_vars['lists']['catid']; ?>
"><?php echo $this->_tpl_vars['delimg']; ?>
</a>
                   </td>
                </tr>
            <?php endforeach; else: ?>
            <?php endif; unset($_from); ?>   
            <?php endforeach; else: ?>
            <?php endif; unset($_from); ?>
            <?php endforeach; else: ?>
            <?php endif; unset($_from); ?>
            </tbody>
            <?php endif; ?>
            <?php endforeach; else: ?>
            <tr>
                <td class="norecord" colspan="99"><i></i><span>暂无符合条件的数据记录</span></td>
            </tr>
            <?php endif; unset($_from); ?>
            <tfoot>
                <tr>
                	<td></td>
                	<td colspan="2">
                        <input type="hidden" name="act" value="op" />
                        <input type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
                    </td>
                </tr>
            </tfoot>
        </table>
        </form>
        <?php endif; ?>
    </div>
</body>
<script>
function toggle_group(oid, conf) {
	obj = $('#a_'+oid)[0];
	if(!conf) {
		var conf = {'show':'[-]','hide':'[+]'};
	}
	var obody = $('#'+oid)[0];
	if(obody.style.display == 'none') {
		obody.style.display = '';
		obj.innerHTML = conf.show;
	} else {
		obody.style.display = 'none';
		obj.innerHTML = conf.hide;
	}
}
</script>
</html>