<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Categories', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'title', 
	'parent_id', 
	'lft', 
	'rght', 
); 
echo $this->renderElement('filter', compact('filters')); 
?> 
<table>
<?php 
$th = array( 
	$paginator->sort('id'), 
	$paginator->sort('title'), 
	$paginator->sort('parent_id'), 
	$paginator->sort('lft'), 
	$paginator->sort('rght'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $Category['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $Category['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $Category['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($Category['id'], array('action' => 'view', $Category['id'])), 
		$html->link($Category['title'], array('action' => 'view', $Category['id'])), 
		$html->link($Category['parent_id'], am($pass, array('page' => 1, 'parent_id' => $Category['parent_id']))), 
		$html->link($Category['lft'], am($pass, array('page' => 1, 'lft' => $Category['lft']))), 
		$html->link($Category['rght'], am($pass, array('page' => 1, 'rght' => $Category['rght']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>