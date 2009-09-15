<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Transaction</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$Transaction['id'])); 
	echo $html->tableCells(array('payment_method',$Transaction['payment_method'])); 
	echo $html->tableCells(array('amount',$Transaction['amount'])); 
	echo $html->tableCells(array('details',$Transaction['details'])); 
	echo $html->tableCells(array('User',$User?$html->link($User['id'], array('controller' => 'users', 'action' => 'view', $Transaction['user_id'])):'')); 
	echo $html->tableCells(array('direction',$Transaction['direction'])); 
	echo $html->tableCells(array('created',$Transaction['created'])); 
	echo $html->tableCells(array('modified',$Transaction['modified'])); 
?> 
</table>
