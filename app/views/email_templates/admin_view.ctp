<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Email Template</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$EmailTemplate['id'])); 
	echo $html->tableCells(array('slug',$EmailTemplate['slug'])); 
	echo $html->tableCells(array('subject',$EmailTemplate['subject'])); 
	echo $html->tableCells(array('to',$EmailTemplate['to'])); 
	echo $html->tableCells(array('cc',$EmailTemplate['cc'])); 
	echo $html->tableCells(array('bcc',$EmailTemplate['bcc'])); 
	echo $html->tableCells(array('content',$EmailTemplate['content'])); 
?> 
</table>
