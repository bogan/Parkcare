<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>jQuery EasyUI CRUD Demo</title>
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			color:#666;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
	</style>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	<script type="text/javascript">
		var url;
		

		function newSpecie(){
			$('#dlg').dialog('open').dialog('setTitle','New Specie');
			$('#fm').form('clear');
			url = 'specie_save.php';
		}
	
		function editSpecie(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Edit Specie');
				$('#fm').form('load',row);
				url = 'specie_update.php?idspecies='+row.idspecies;
			}
		}
		
		function saveSpecie(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the specie data
					} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}
		
		function removeSpecie(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to remove this specie?',function(r){
					if (r){
						$.post('specie_remove.php',{idspecies:row.idspecies},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the specie data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.msg
								});
							}
						},'json');
					}
				});
			}
		}
		
		function editDescription(){
			var row = $('#dg').datagrid('getSelected');
			
			if (row){
				$('#dlg1').dialog('open').dialog('setTitle','Edit Description');
				$('#fm1').form('load',row);
				url = 'specie_update_description.php?idspecies='+row.idspecies;
			}			
		}
		
		function saveDescription(){
			$('#fm1').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#dlg1').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the specie data
					} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});

		}
	</script>
</head>
<body>
	<h2>Species</h2>
	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>
	</div>
	
	<table id="dg" title="Species" class="easyui-datagrid" style="width:700px;height:250px"
			url="species_get.php"
			toolbar="#toolbar" pagination="true" idField="idspecies"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="idgenus" width="50">Genus ID</th>
				<th field="genusName" width="50">Genus Name</th>
				<th field="idspecies" width="50">Species ID</th>
				<th field="speciesName" width="50">Species Name</th>
				<th field="commonName" width="50">Common Name</th>
				<th field="exotic" width="50">Exotic</th>
				<th field="habitat" width="50">Habitat</th>
				<!--<th field="description" width="50">Description</th>
-->			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newSpecie()">New Specie</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editSpecie()">Edit Specie</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="removeSpecie()">Remove Specie</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="editDescription()">Edit Description</a>
	</div>
	
	<div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Specie Information</div>
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>Genus ID:</label>
				<input name="idgenus" class="easyui-validatebox" required="true">
			</div>
			<div class="fitem">
				<label>Genus Name:</label>
				<input name="genusName" class="easyui-validatebox" required="true">
			</div>

			<div class="fitem">
				<label>Species Name:</label>
				<input name="speciesName" class="easyui-validatebox" required="true">
			</div>
			<div class="fitem">
				<label>Common Name:</label>
				<input name="commonName" class="easyui-validatebox" required="true">
			</div>
			<div class="fitem">
				<label>Exotic:</label>
				<input name="exotic">
			</div>
			<div class="fitem">
				<label>Habitat:</label>
				<input name="habitat" class="easyui-validatebox">
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveSpecie()">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	
	
	
	<div id="dlg1" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons1">
		<div class="ftitle">Specie Description</div>
		<form id="fm1" method="post" novalidate>
			<div class="fitem">
				<label>Description:</label>
				<textarea name="description" cols="80" rows="10">Goat</textarea>
			</div>
			
		</form>
	</div>
	<div id="dlg-buttons1">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveDescription()">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg1').dialog('close')">Cancel</a>
	</div>

</body>
</html>