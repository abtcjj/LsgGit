<?php /* Smarty version 2.6.20, created on 2015-04-09 19:42:22
         compiled from property.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>产品类型</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../script/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="../script/base.js"></script>
</head>
<body>
<?php if ($_GET['operation'] == 'add' || $_GET['operation'] == 'edit'): ?>
<div class="container">
<form name="property" id="property" action="module.php?m=product&s=property.php" method="post">
<input name="id" type="hidden" id="id" value="<?php echo $this->_tpl_vars['de']['id']; ?>
">

<div class="type clearfix">
	<span class="cur" genre="base">基本属性</span>
	<span genre="property">扩展属性</span>
	<span genre="spec">规格</span>
	<!--<span genre="parameter">详细参数表</span>-->
</div>
<div class="type_list">
    <div id="base">
    <table class="table3 mb0" id="base">
        <tr>
            <td width="70">类型名称</td>
            <td>
            <input name="pname" id="name" type="text" class="w350" value="<?php echo $this->_tpl_vars['de']['name']; ?>
"><span id="form-error" class="form-error"></span>
            </td>
        </tr>
    </table>
    </div>
    <div class="hidden" id="property">
     <table class="table4">
        <thead>
        <tr>
        	<td width="120">属性名</td>
        	<td>前台列表页表现类型</td>
        	<td width="230">选择项可选值</td>
        	<td width="30" class="ac">显示</td>
        	<td width="50" class="ac">排序</td>
        	<td width="60" class="ac">操作</td>
        </tr>
        </thead>
        <tbody>
        
        <?php $_from = $this->_tpl_vars['de']['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num'] => $this->_tpl_vars['list']):
?>
        <tr>
			<td>
            <input type="hidden" name="pid[]" value="<?php echo $this->_tpl_vars['list']['id']; ?>
" />
            <input type="text" name="names[]" value="<?php echo $this->_tpl_vars['list']['field_name']; ?>
" />
            </td>
			<td>
            <select name="selects[]">
                <option value="1" <?php if ($this->_tpl_vars['list']['display_type'] == 3 && $this->_tpl_vars['list']['is_search'] == 0): ?>selected="selected"<?php endif; ?> >下拉不可筛选</option>
                <option value="2" <?php if ($this->_tpl_vars['list']['display_type'] == 3 && $this->_tpl_vars['list']['is_search'] == 1): ?>selected="selected"<?php endif; ?>>下拉可筛选</option>
                <option value="3" <?php if ($this->_tpl_vars['list']['display_type'] == 1): ?>selected="selected"<?php endif; ?> >输入项</option>
            </select>
            </td>
			<td><a href="javascript:void();" values="<?php echo $this->_tpl_vars['num']; ?>
" genre="edit" class="edit">编辑</a><input type="text" class="readonly w150" readonly="readonly" genre="<?php echo $this->_tpl_vars['num']; ?>
" name="items[]" value="<?php echo $this->_tpl_vars['list']['items']; ?>
" /></td>
			<td class="ac"><input type="checkbox" <?php if ($this->_tpl_vars['list']['statu'] == 1): ?>checked="checked"<?php endif; ?> value="1" name="status[]" /></td>
            <td>
            <input type="text" class="w50" maxlength="3" name="displayorders[]" value="<?php echo $this->_tpl_vars['list']['displayorder']; ?>
" />
            </td>
            
			<td class="ac"><div><a href="javascript:;" class="deleterow" onclick="deleterows(this)">删除</a></div></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        
        <tr>
            <td colspan="99">
            <ul class="button">
                <li class="button">
                    <a class="a_button" onClick="addrows(this,2)" href="javascript:void(0);">添加一个扩展属性</a>
                </li>
            </ul>
            </td>
        </tr>
        </tbody>
    </table>
    <input type="hidden" name="old_property" value="<?php echo $this->_tpl_vars['de']['property']; ?>
" />
    </div>
    <div class="hidden" id="spec">
    <table class="table4" width="96%">
        <thead>
        <tr>
        	<td>规格</td>
        	<td width="50" class="ac">操作</td>
        </tr>
        </thead>
        <tbody>
        <?php $_from = $this->_tpl_vars['de']['spec_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num'] => $this->_tpl_vars['list']):
?>
       	<tr>
        	<td><?php echo $this->_tpl_vars['list']['field_name']; ?>
</td>
            <td class="ac"><div><a href="javascript:;" class="deleterow" onClick="deleterow(this,'<?php echo $this->_tpl_vars['list']['id']; ?>
','list_2')">删除</a></div></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr>
            <td colspan="99">
            <ul class="button">
                <li class="button">
                    <a class="a_button"  id="list_2" values="2" genre="add" href="javascript:void();">添加规格</a>
                </li>
            </ul>
            </td>
        </tr>
        </tbody>
    </table>
    <input type="hidden" id="hidden_list_2" name="ids[]" value="0,<?php if ($this->_tpl_vars['de']['spec']): ?><?php echo $this->_tpl_vars['de']['spec']; ?>
,<?php endif; ?>" />
    <input type="hidden" name="old_ids[]" value="<?php echo $this->_tpl_vars['de']['spec']; ?>
" />
    </div>
    <div class="hidden" id="parameter">
   <!-- <table class="table4">
        <thead>
        <tr>
            <td></td>
            <td></td>
        </tr>
        </thead>
        <tbody></tbody>
    </table>-->
    </div>
</div>


<div class="dialog_button">
<input id="property_button" type="button" value="保存">
<input name="act" type="hidden" id="action" value="<?php if (! $_GET['editid']): ?>save<?php else: ?>edit<?php endif; ?>">
</div>
</form>
<span id="error"></span>
<script>
$("[genre='add']").live('click',function(){
								
	var type = $(this).attr('values');
	if(type==2) 
		str="请选择产品规格";

	window.parent.iframe_form("list", str, '<?php echo $this->_tpl_vars['config']['weburl']; ?>
/admin/module.php?m=product&s=list.php&type='+type, 800,600);
	return false;
	
});

$("[genre='edit']").live('click',function(){
	
	var tr=$(this.parentNode.parentNode);
	var val=tr.find("select").val();
	var id = $(this).attr('values');

	if(val=='3')
	{
		error('error','对不起，下拉形式下启用！');
		return false;
	}
	
	window.parent.iframe_form("list", "编辑产品类型扩展属性", '<?php echo $this->_tpl_vars['config']['weburl']; ?>
/admin/module.php?m=product&s=list.php&operation=property&id='+id, 800,600);
	return false;
	
});
$("[genre='binding']").live('click',function(){
	
	var id = $(this).attr('values');
	window.parent.iframe_form("list", "收费服务产品绑定", '<?php echo $this->_tpl_vars['config']['weburl']; ?>
/admin/module.php?m=product&s=list.php&operation=product&id='+id, 800,600);
	return false;
	
});
var rowtypedata = [
	[
		[''], 
		['<div><a href="javascript:;" class="deleterow" onClick="deleterow(this,{1})">删除</a></div>','ac'],
	
	],
	[
		[''],
		['<a href="javascript:void();" values="{n}" genre="binding" class="edit">产品绑定</a><input type="text" class="readonly w150" readonly="readonly" values="{n}" name="product{n}" />'], 
		['<div><a href="javascript:;" class="deleterow" onClick="deleterow(this,{1})">删除</a></div>','ac'],
	
	],
	
	[
		['<input type="text" name="name[]" value="" />'], 
		['<select name="select[]"><option value="1">下拉不可筛选</option><option value="2">下拉可筛选</option><option value="3">输入项</option></select>'],
		['<a href="javascript:void();" values="{n}" genre="edit" class="edit">编辑</a><input type="text" class="readonly w150" readonly="readonly" genre="{n}" name="item[]" />'],
		['<input type="checkbox" checked="checked" value="1" name="statu[]">','ac'],
		['<input type="text" maxlength="3" class="w50" name="displayorder[]" value="255" />'], 
		['<div><a href="javascript:;" class="deleterow" onClick="deleterows(this)">删除</a></div>','ac'],
		
	],
];

var addrowdirects = 0;
var j = 1;
function addrows(obj, type) {

	var table = obj.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
	
	if(!addrowdirects) {
		var row = table.insertRow(obj.parentNode.parentNode.parentNode.parentNode.rowIndex);
	} else {
		var row = table.insertRow(obj.parentNode.parentNode.parentNode.parentNode.rowIndex + addrowdirects);
	}
	
	var typedata = rowtypedata[type];
	
	for(var i = 0; i <= typedata.length - 1; i++) {
		
		var cell = row.insertCell(i);
		if(typedata[i][1]) {
			cell.className = typedata[i][1];
		}
		var tmp = typedata[i][0];
		tmp = tmp.replace(/\{(n)\}/g, function($1) { return j;});
		cell.innerHTML = tmp;
	
	}
	addrowdirects = 0;
	j++;
}
function deleterows(obj) {
	var table = obj.parentNode.parentNode.parentNode.parentNode.parentNode;
	var tr = obj.parentNode.parentNode.parentNode;
	table.deleteRow(tr.rowIndex);
}


var addrowdirect = 0;
var addrowkey = 0;

function addrow(name,num,type) {

	var obj=$('#'+name+'_'+num)[0];	
	var table = obj.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
	
	var iframe=window.parent.document.getElementById("iframe_"+name).contentWindow;
	var ul=iframe.document.getElementById("ul");
	
	var checkbox= $(ul).find("input[type='checkbox']:checked");
	
	var typedata = rowtypedata[type];

	$.each(checkbox,function(i){
	
		var value1=$("#hidden_"+name+"_"+num).val();
		var value2=this.value;
		
		if(value1.indexOf(','+value2+',') <= 0 )
		{
			$("#hidden_"+name+"_"+num).val(value1+value2+',');	
			
			if(!addrowdirect) {
				var row = table.insertRow(obj.parentNode.parentNode.parentNode.parentNode.rowIndex);
			} else {
				var row = table.insertRow(obj.parentNode.parentNode.parentNode.parentNode.rowIndex + 1);
			}
			
			for(var i = 0; i <= typedata.length - 1; i++) {
		
				var cell = row.insertCell(i);
				
				if(typedata[i][1]) {
					cell.className = typedata[i][1];
				}
				
				if(typedata[i][0])
					var tmp = typedata[i][0];
				else
					var tmp = $(this).next().html();
				
				tmp = tmp.replace(/\{(n)\}/g, function($1) { return value2;});
				tmp = tmp.replace(/\{(\d+)\}/g, function($1, $2) { return value2+',\''+name+'_'+num+'\''; });
				cell.innerHTML = tmp;
			}
			addrowkey ++;
			addrowdirect = 0;
		}
	});
}

function deleterow(obj,id,name) {
	var table = obj.parentNode.parentNode.parentNode.parentNode.parentNode;
	var tr = obj.parentNode.parentNode.parentNode;
	var value=$("#hidden_"+name).val();
	var pattern = ','+id+',';
	str = value.replace(new RegExp(pattern), ",");
	$("#hidden_"+name).val(str);
	table.deleteRow(tr.rowIndex);
}


$(".type span").click(function () {
	$(this).addClass("cur").siblings().removeClass("cur");
	var name=$(this).attr('genre');
	$("#"+name).removeClass("hidden").siblings().addClass("hidden");
	
});

$("#property_button").click(function () {
	
	if(!$("#name").val())
	{
		error('error','对不起，类型名称还没有填写');
		return false;
	}
	document.getElementById("property").submit();
	return false;
	
});
</script> 
</div>  
<?php else: ?>
	<div class="container">
        <div class="flow"> 
            <div class="itemtitle">
                <h3>产品类型</h3>
            </div>
        </div>
        <div class="h35"></div> 
        <table class="select_table">
            <tr>    
                <td class="pl0">
				<ul class="button">
                    <li class="button">
                        <a class="a_button" id="del_button" href="javascript:void();">删除</a>
                    </li>
                    <li class="button">
                        <a class="a_button" id="add" href="javascript:void();">添加类型</a>
                    </li>
                </ul>
                </td>
                <td width="400">
                    <a class="refresh fr" href="?m=<?php echo $_GET['m']; ?>
&s=<?php echo $_GET['s']; ?>
"></a>
                	<div class="select_box fr">
                    <form action="" method="get">
                        <input type="hidden" name="m" value="<?php echo $_GET['m']; ?>
">
                        <input type="hidden" name="s" value="property.php">
                        <input placeholder="请输入类型名称..." type="text" name="key" class="txt s w250" value="<?php echo $_GET['key']; ?>
" />
                        <input type="submit" value="搜索" />
                    </form>
                    </div>
               </td>
            </tr>
        </table> 
		<script type="text/javascript">
        $(function(){
            /* 全选 */
             $('.checkall').click(function(){
                var _self = this;
                $('.checkitem').each(function(){
                    if (!this.disabled)
                    {
                        $(this).attr('checked', _self.checked);
                    }
                });
                $('.checkall').attr('checked', this.checked);
            });	 
        });
        </script>
        <form action="" name="form" id="form" method="post">
        <input type="hidden" name="act" value="op" />
        <table class="table">
            <tbody>
                <tr class="header">
                    <th width="30" class="al"><input type="checkbox" class="checkall" id="del"></th>
                    <th width="50" class="al">操作</th>
                    <th class="al">类型名称</th>
                </tr>
                <?php $_from = $this->_tpl_vars['de']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list']):
?>
                <tr>
                    <td class="al"><input type="checkbox" value="<?php echo $this->_tpl_vars['list']['id']; ?>
" class="checkitem" name="chk[]"></td>
                    <td class="al">
                    <a genre="edit" href="javascript:void(0);" data-param="{'id':'<?php echo $this->_tpl_vars['list']['id']; ?>
'}">编辑</a>
					</td>
                    <td class="al"><?php echo $this->_tpl_vars['list']['name']; ?>
</td>
                </tr>
                <?php endforeach; else: ?>
                <tr>
                    <td class="norecord" colspan="99"><i></i><span>暂无符合条件的数据记录</span></td>
                </tr>
                <?php endif; unset($_from); ?>
            </tbody>
            <tfoot>    
                <tr>
                    <td colspan="99">
                    <div class="fl">每页最多显示： 20条</div>
                    <div class="page"><?php echo $this->_tpl_vars['de']['page']; ?>
</div>
                    <div class="fr">共有<?php echo $this->_tpl_vars['count']; ?>
条记录</div>
                    </td>
                </tr>
            </tfoot>
        </table>
        </form>
    </div>
	<script>
    $("#del_button").click(function () {
        $("#form")[0].submit();
        return false;
    });
	
    $("#add").live('click',function(){
		window.parent.iframe_form("property", '添加产品类型', '<?php echo $this->_tpl_vars['config']['weburl']; ?>
/admin/module.php?m=product&s=property.php&operation=add', 800, 600);
        return false;
    });
	
	$("[genre='edit']").live('click',function(){
		var data_str = $(this).attr('data-param');
		eval("data_str = "+data_str);
		window.parent.iframe_form("property", '编辑产品类型', '<?php echo $this->_tpl_vars['config']['weburl']; ?>
/admin/module.php?m=product&s=property.php&operation=edit&editid='+data_str.id, 800, 600);
        return false;
    });
    </script>
</body>
</html>
<?php endif; ?>  