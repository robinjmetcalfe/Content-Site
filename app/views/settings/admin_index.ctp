<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Settings', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'key', 
	'pair', 
	'description', 
	'created', 
	'modified', 
); 
echo $this->renderElement('filter', compact('filters')); 
?> 
<table>
<?php 
$th = array( 
	$paginator->sort('id'), 
	$paginator->sort('key'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $Setting['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $Setting['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $Setting['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($Setting['id'], array('action' => 'view', $Setting['id'])), 
		$html->link($Setting['key'], am($pass, array('page' => 1, 'key' => $Setting['key']))), 
		$html->link($Setting['created'], am($pass, array('page' => 1, 'created' => $Setting['created']))), 
		$html->link($Setting['modified'], am($pass, array('page' => 1, 'modified' => $Setting['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>