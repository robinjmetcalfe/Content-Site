<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Customer Account</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$CustomerAccount['id'])); 
	echo $html->tableCells(array('Customer',$Customer?$html->link($Customer['id'], array('controller' => 'customers', 'action' => 'view', $CustomerAccount['customer_id'])):'')); 
	echo $html->tableCells(array('balance',$CustomerAccount['balance'])); 
	echo $html->tableCells(array('pending',$CustomerAccount['pending'])); 
	echo $html->tableCells(array('created',$CustomerAccount['created'])); 
	echo $html->tableCells(array('modified',$CustomerAccount['modified'])); 
?> 
</table>
