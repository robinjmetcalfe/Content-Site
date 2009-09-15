<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Customer</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$Customer['id'])); 
	echo $html->tableCells(array('User',$User?$html->link($User['id'], array('controller' => 'users', 'action' => 'view', $Customer['user_id'])):'')); 
	echo $html->tableCells(array('real_name',$Customer['real_name'])); 
	echo $html->tableCells(array('address_1',$Customer['address_1'])); 
	echo $html->tableCells(array('address_2',$Customer['address_2'])); 
	echo $html->tableCells(array('address_3',$Customer['address_3'])); 
	echo $html->tableCells(array('state',$Customer['state'])); 
	echo $html->tableCells(array('postcode',$Customer['postcode'])); 
	echo $html->tableCells(array('telephone',$Customer['telephone'])); 
	echo $html->tableCells(array('mobile',$Customer['mobile'])); 
	echo $html->tableCells(array('created',$Customer['created'])); 
	echo $html->tableCells(array('modified',$Customer['modified'])); 
?> 
</table>
