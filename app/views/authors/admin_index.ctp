<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Authors', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'user_id', 
	'full_name', 
	'address_1', 
	'address_2', 
	'address_3', 
	'state', 
	'postcode', 
	'telephone', 
	'mobile', 
	'test_text', 
	'test_text_feedback', 
	'validated', 
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
	$paginator->sort('full_name'), 
	$paginator->sort('address_1'), 
	$paginator->sort('address_2'), 
	$paginator->sort('address_3'), 
	$paginator->sort('state'), 
	$paginator->sort('postcode'), 
	$paginator->sort('telephone'), 
	$paginator->sort('mobile'), 
	$paginator->sort('validated'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $Author['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $Author['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $Author['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($Author['id'], array('action' => 'view', $Author['id'])), 
		$User?$html->link($User['id'], am($pass, array('page' => 1, 'user_id' => $Author['user_id']))):'', 
		$html->link($Author['full_name'], am($pass, array('page' => 1, 'full_name' => $Author['full_name']))), 
		$html->link($Author['address_1'], am($pass, array('page' => 1, 'address_1' => $Author['address_1']))), 
		$html->link($Author['address_2'], am($pass, array('page' => 1, 'address_2' => $Author['address_2']))), 
		$html->link($Author['address_3'], am($pass, array('page' => 1, 'address_3' => $Author['address_3']))), 
		$html->link($Author['state'], am($pass, array('page' => 1, 'state' => $Author['state']))), 
		$html->link($Author['postcode'], am($pass, array('page' => 1, 'postcode' => $Author['postcode']))), 
		$html->link($Author['telephone'], am($pass, array('page' => 1, 'telephone' => $Author['telephone']))), 
		$html->link($Author['mobile'], am($pass, array('page' => 1, 'mobile' => $Author['mobile']))), 
		$html->link($Author['validated'], am($pass, array('page' => 1, 'validated' => $Author['validated']))), 
		$html->link($Author['created'], am($pass, array('page' => 1, 'created' => $Author['created']))), 
		$html->link($Author['modified'], am($pass, array('page' => 1, 'modified' => $Author['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>