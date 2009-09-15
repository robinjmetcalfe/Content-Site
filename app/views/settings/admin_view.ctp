<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Setting</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$Setting['id'])); 
	echo $html->tableCells(array('key',$Setting['key'])); 
	echo $html->tableCells(array('pair',$Setting['pair'])); 
	echo $html->tableCells(array('description',$Setting['description'])); 
	echo $html->tableCells(array('created',$Setting['created'])); 
	echo $html->tableCells(array('modified',$Setting['modified'])); 
?> 
</table>
