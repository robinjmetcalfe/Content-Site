<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>User</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$User['id'])); 
	echo $html->tableCells(array('username',$User['username'])); 
	echo $html->tableCells(array('passwd',$User['passwd'])); 
	echo $html->tableCells(array('email',$User['email'])); 
	echo $html->tableCells(array('is_customer',$User['is_customer'])); 
	echo $html->tableCells(array('is_author',$User['is_author'])); 
	echo $html->tableCells(array('created',$User['created'])); 
	echo $html->tableCells(array('modified',$User['modified'])); 
?> 
</table>
