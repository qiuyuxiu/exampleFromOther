<link href="/Style/admin.css" rel="stylesheet" type="text/css">
<P class=caption>推荐产品管理</P>
<form name="form1" method="post" action="">
<table width="80%" align=center border=0>
<tr>
  <td vAlign=top bgColor=#eeeeee><table width="100%" border=0>
	  <tr>
		<th width=45><input name="allbox" type="checkbox" id="allbox" onClick="CA();" value="1"></th>
		<th width=278 height=23>产品类别</th>
		<th width=267>产品名称</th>
		<th width=68>顺序</th>
	  </tr>
	  {*foreach item=uu from=$list[data]*}
	  <tr align=middle>
		<td><input name="SelId" type="checkbox" id="SelId" value="{*$uu[F_ID]*}"></td>
		<td height=30>{*$uu[F_PRODUCT_NAME]*}</td>
		<td height=30>{*$uu[F_CLASS_NAME]*}</td>
		<td height=30>{*$uu[F_RECOMMEND_ORDER]*}</td>
	  </tr>
	  {*/foreach*}
  </table></td>
</tr>
<tr>
  <th><input id=order onClick="window.location='/Product/RecommendOrder'" type=button value=设置排列顺序 name=order>
	  <input id=add onClick="window.location='/Product/AddRecommend'" type=button value=添加推荐产品 name=add>
	  <input type="submit" name="Submit" value="删除推荐产品"></th>
</tr>
</table>
<table width="80%" border="0" align="center">
<tr>
  <td>{*$list[JumpBar]*}</td>
</tr>
</table>
</form>
<script language="javascript">
function CA(){
	for(var i=0;i<document.form1.elements.length;i++){
		var e=document.form1.elements[i];
		if(e.name!='allbox') e.checked=document.form1.allbox.checked;
	}
}
</script>
