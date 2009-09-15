<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Category</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$Category['id'])); 
	echo $html->tableCells(array('title',$Category['title'])); 
	echo $html->tableCells(array('parent_id',$Category['parent_id'])); 
	echo $html->tableCells(array('lft',$Category['lft'])); 
	echo $html->tableCells(array('rght',$Category['rght'])); 
?> 
</table>
