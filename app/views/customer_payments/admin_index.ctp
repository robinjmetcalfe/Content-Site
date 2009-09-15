<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Customer Payments', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'customer_id', 
	'transaction_id', 
	'cash', 
	'credits', 
	'conversion_rate', 
	'customer_discount', 
	'created', 
	'modified', 
); 
echo $this->renderElement('filter', compact('filters')); 
?> 
<table>
<?php 
$th = array( 
	$paginator->sort('id'), 
	$paginator->sort('Customer', 'Customer.id'), 
	$paginator->sort('Transaction', 'Transaction.id'), 
	$paginator->sort('cash'), 
	$paginator->sort('credits'), 
	$paginator->sort('conversion_rate'), 
	$paginator->sort('customer_discount'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $CustomerPayment['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $CustomerPayment['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $CustomerPayment['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($CustomerPayment['id'], array('action' => 'view', $CustomerPayment['id'])), 
		$Customer?$html->link($Customer['id'], am($pass, array('page' => 1, 'customer_id' => $CustomerPayment['customer_id']))):'', 
		$Transaction?$html->link($Transaction['id'], am($pass, array('page' => 1, 'transaction_id' => $CustomerPayment['transaction_id']))):'', 
		$html->link($CustomerPayment['cash'], am($pass, array('page' => 1, 'cash' => $CustomerPayment['cash']))), 
		$html->link($CustomerPayment['credits'], am($pass, array('page' => 1, 'credits' => $CustomerPayment['credits']))), 
		$html->link($CustomerPayment['conversion_rate'], am($pass, array('page' => 1, 'conversion_rate' => $CustomerPayment['conversion_rate']))), 
		$html->link($CustomerPayment['customer_discount'], am($pass, array('page' => 1, 'customer_discount' => $CustomerPayment['customer_discount']))), 
		$html->link($CustomerPayment['created'], am($pass, array('page' => 1, 'created' => $CustomerPayment['created']))), 
		$html->link($CustomerPayment['modified'], am($pass, array('page' => 1, 'modified' => $CustomerPayment['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>