<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Transactions', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'payment_method', 
	'amount', 
	'details', 
	'user_id', 
	'direction', 
	'created', 
	'modified', 
); 
echo $this->renderElement('filter', compact('filters')); 
?> 
<table>
<?php 
$th = array( 
	$paginator->sort('id'), 
	$paginator->sort('payment_method'), 
	$paginator->sort('amount'), 
	$paginator->sort('User', 'User.id'), 
	$paginator->sort('direction'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $Transaction['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $Transaction['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $Transaction['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($Transaction['id'], array('action' => 'view', $Transaction['id'])), 
		$html->link($Transaction['payment_method'], am($pass, array('page' => 1, 'payment_method' => $Transaction['payment_method']))), 
		$html->link($Transaction['amount'], am($pass, array('page' => 1, 'amount' => $Transaction['amount']))), 
		$User?$html->link($User['id'], am($pass, array('page' => 1, 'user_id' => $Transaction['user_id']))):'', 
		$html->link($Transaction['direction'], am($pass, array('page' => 1, 'direction' => $Transaction['direction']))), 
		$html->link($Transaction['created'], am($pass, array('page' => 1, 'created' => $Transaction['created']))), 
		$html->link($Transaction['modified'], am($pass, array('page' => 1, 'modified' => $Transaction['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>