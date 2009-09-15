<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Customer Accounts', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'customer_id', 
	'balance', 
	'pending', 
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
	$paginator->sort('balance'), 
	$paginator->sort('pending'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $CustomerAccount['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $CustomerAccount['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $CustomerAccount['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($CustomerAccount['id'], array('action' => 'view', $CustomerAccount['id'])), 
		$Customer?$html->link($Customer['id'], am($pass, array('page' => 1, 'customer_id' => $CustomerAccount['customer_id']))):'', 
		$html->link($CustomerAccount['balance'], am($pass, array('page' => 1, 'balance' => $CustomerAccount['balance']))), 
		$html->link($CustomerAccount['pending'], am($pass, array('page' => 1, 'pending' => $CustomerAccount['pending']))), 
		$html->link($CustomerAccount['created'], am($pass, array('page' => 1, 'created' => $CustomerAccount['created']))), 
		$html->link($CustomerAccount['modified'], am($pass, array('page' => 1, 'modified' => $CustomerAccount['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>