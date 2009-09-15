<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Author</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$Author['id'])); 
	echo $html->tableCells(array('User',$User?$html->link($User['id'], array('controller' => 'users', 'action' => 'view', $Author['user_id'])):'')); 
	echo $html->tableCells(array('full_name',$Author['full_name'])); 
	echo $html->tableCells(array('address_1',$Author['address_1'])); 
	echo $html->tableCells(array('address_2',$Author['address_2'])); 
	echo $html->tableCells(array('address_3',$Author['address_3'])); 
	echo $html->tableCells(array('state',$Author['state'])); 
	echo $html->tableCells(array('postcode',$Author['postcode'])); 
	echo $html->tableCells(array('telephone',$Author['telephone'])); 
	echo $html->tableCells(array('mobile',$Author['mobile'])); 
	echo $html->tableCells(array('test_text',$Author['test_text'])); 
	echo $html->tableCells(array('test_text_feedback',$Author['test_text_feedback'])); 
	echo $html->tableCells(array('validated',$Author['validated'])); 
	echo $html->tableCells(array('created',$Author['created'])); 
	echo $html->tableCells(array('modified',$Author['modified'])); 
?> 
</table>
