<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Author Account</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$AuthorAccount['id'])); 
	echo $html->tableCells(array('Author',$Author?$html->link($Author['id'], array('controller' => 'authors', 'action' => 'view', $AuthorAccount['author_id'])):'')); 
	echo $html->tableCells(array('balance',$AuthorAccount['balance'])); 
	echo $html->tableCells(array('created',$AuthorAccount['created'])); 
	echo $html->tableCells(array('modified',$AuthorAccount['modified'])); 
?> 
</table>
