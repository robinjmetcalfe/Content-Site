<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Customer Payment</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$CustomerPayment['id'])); 
	echo $html->tableCells(array('Customer',$Customer?$html->link($Customer['id'], array('controller' => 'customers', 'action' => 'view', $CustomerPayment['customer_id'])):'')); 
	echo $html->tableCells(array('Transaction',$Transaction?$html->link($Transaction['id'], array('controller' => 'transactions', 'action' => 'view', $CustomerPayment['transaction_id'])):'')); 
	echo $html->tableCells(array('cash',$CustomerPayment['cash'])); 
	echo $html->tableCells(array('credits',$CustomerPayment['credits'])); 
	echo $html->tableCells(array('conversion_rate',$CustomerPayment['conversion_rate'])); 
	echo $html->tableCells(array('customer_discount',$CustomerPayment['customer_discount'])); 
	echo $html->tableCells(array('created',$CustomerPayment['created'])); 
	echo $html->tableCells(array('modified',$CustomerPayment['modified'])); 
?> 
</table>
