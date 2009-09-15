<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Customers', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'user_id', 
	'real_name', 
	'address_1', 
	'address_2', 
	'address_3', 
	'state', 
	'postcode', 
	'telephone', 
	'mobile', 
	'created', 
	'modified', 
); 
echo $this->renderElement('filter', compact('filters')); 
?> 
<table>
<?php 
$th = array( 
	$paginator->sort('id'), 
	$paginator->sort('User', 'User.id'), 
	$paginator->sort('real_name'), 
	$paginator->sort('address_1'), 
	$paginator->sort('address_2'), 
	$paginator->sort('address_3'), 
	$paginator->sort('state'), 
	$paginator->sort('postcode'), 
	$paginator->sort('telephone'), 
	$paginator->sort('mobile'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $Customer['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $Customer['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $Customer['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($Customer['id'], array('action' => 'view', $Customer['id'])), 
		$User?$html->link($User['id'], am($pass, array('page' => 1, 'user_id' => $Customer['user_id']))):'', 
		$html->link($Customer['real_name'], am($pass, array('page' => 1, 'real_name' => $Customer['real_name']))), 
		$html->link($Customer['address_1'], am($pass, array('page' => 1, 'address_1' => $Customer['address_1']))), 
		$html->link($Customer['address_2'], am($pass, array('page' => 1, 'address_2' => $Customer['address_2']))), 
		$html->link($Customer['address_3'], am($pass, array('page' => 1, 'address_3' => $Customer['address_3']))), 
		$html->link($Customer['state'], am($pass, array('page' => 1, 'state' => $Customer['state']))), 
		$html->link($Customer['postcode'], am($pass, array('page' => 1, 'postcode' => $Customer['postcode']))), 
		$html->link($Customer['telephone'], am($pass, array('page' => 1, 'telephone' => $Customer['telephone']))), 
		$html->link($Customer['mobile'], am($pass, array('page' => 1, 'mobile' => $Customer['mobile']))), 
		$html->link($Customer['created'], am($pass, array('page' => 1, 'created' => $Customer['created']))), 
		$html->link($Customer['modified'], am($pass, array('page' => 1, 'modified' => $Customer['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>