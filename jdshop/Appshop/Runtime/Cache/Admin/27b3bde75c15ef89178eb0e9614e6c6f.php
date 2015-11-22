<?php if (!defined('THINK_PATH')) exit();?><table cellpadding="3" cellspacing="1">
    <tbody>
		<tr>
			<th><input onclick="listTable.selectAll(this, &quot;checkboxes[]&quot;)" type="checkbox">编号 </th>
			<th>属性名称</th>
			<th>商品类型</th>
			<th>属性值的录入方式</th>
			<th>可选值列表</th>
			<th>排序</a></th>
			<th>操作</th>
		</tr>
	<?php foreach($data as $k=>$v):?>
        <tr>
			<td nowrap="true" valign="top"><span><input value="1" name="checkboxes[]" type="checkbox"><?php echo $k+1;?></span></td>
			<td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 1)"><?php echo $v['a_name']?></span></td>
			<td nowrap="true" valign="top"><span><?php echo $v['type_name']?></span></td>
			<td nowrap="true" valign="top"><span><?php echo $v['a_input_type']?></span></td>
			<td valign="top"><span><?php echo $v['a_value']?></span></td>
			<td nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 1)"><?php echo $v['a_sort']?></span></td>
			<td align="center" nowrap="true" valign="top">
				<a href="/index.php/Admin/Attribute/edit/id/<?php echo $v['a_id']?>" title="编辑"><img src="/Public/Admin/images/icon_edit.gif" border="0" height="16" width="16">编辑 </a>
				<a href="/index.php/Admin/Attribute/del/id/<?php echo $v['a_id']?>" onclick="return confirm('真删除？')" title="移除"><img src="/Public/Admin/images/icon_drop.gif" border="0" height="16" width="16">删除 </a>
			</td>
		</tr>
	<?php endforeach;?>

	</tbody>
</table>
<table cellpadding="4" cellspacing="0">
    <tbody><tr>
    <td style="background-color: rgb(255, 255, 255);"><input type="submit" id="btnSubmit" value="删除" class="button" disabled="true"></td>
      <td align="right" style="background-color: rgb(255, 255, 255);">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
      <div id="turn-page">
        <?php echo $page;?>
      </div>
    </td>
    </tr>
  </tbody>
</table>