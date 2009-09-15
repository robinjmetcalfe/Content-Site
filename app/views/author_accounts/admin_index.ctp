<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Author Accounts', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'author_id', 
	'balance', 
	'created', 
	'modified', 
); 
echo $this->renderElement('filter', compact('filters')); 
?> 
<table>
<?php 
$th = array( 
	$paginator->sort('id'), 
	$paginator->sort('Author', 'Author.id'), 
	$paginator->sort('balance'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $AuthorAccount['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $AuthorAccount['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $AuthorAccount['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($AuthorAccount['id'], array('action' => 'view', $AuthorAccount['id'])), 
		$Author?$html->link($Author['id'], am($pass, array('page' => 1, 'author_id' => $AuthorAccount['author_id']))):'', 
		$html->link($AuthorAccount['balance'], am($pass, array('page' => 1, 'balance' => $AuthorAccount['balance']))), 
		$html->link($AuthorAccount['created'], am($pass, array('page' => 1, 'created' => $AuthorAccount['created']))), 
		$html->link($AuthorAccount['modified'], am($pass, array('page' => 1, 'modified' => $AuthorAccount['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>