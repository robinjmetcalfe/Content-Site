<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Content Sites', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'customer_id', 
	'title', 
	'site_type', 
	'auth_key', 
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
	$paginator->sort('title'), 
	$paginator->sort('site_type'), 
	$paginator->sort('auth_key'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $ContentSite['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $ContentSite['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $ContentSite['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($ContentSite['id'], array('action' => 'view', $ContentSite['id'])), 
		$Customer?$html->link($Customer['id'], am($pass, array('page' => 1, 'customer_id' => $ContentSite['customer_id']))):'', 
		$html->link($ContentSite['title'], array('action' => 'view', $ContentSite['id'])), 
		$html->link($ContentSite['site_type'], am($pass, array('page' => 1, 'site_type' => $ContentSite['site_type']))), 
		$html->link($ContentSite['auth_key'], am($pass, array('page' => 1, 'auth_key' => $ContentSite['auth_key']))), 
		$html->link($ContentSite['created'], am($pass, array('page' => 1, 'created' => $ContentSite['created']))), 
		$html->link($ContentSite['modified'], am($pass, array('page' => 1, 'modified' => $ContentSite['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>