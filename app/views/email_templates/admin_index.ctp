<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Email Templates', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'slug', 
	'subject', 
	'to', 
	'cc', 
	'bcc', 
	'content', 
); 
echo $this->renderElement('filter', compact('filters')); 
?> 
<table>
<?php 
$th = array( 
	$paginator->sort('id'), 
	$paginator->sort('slug'), 
	$paginator->sort('subject'), 
	$paginator->sort('to'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $EmailTemplate['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $EmailTemplate['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $EmailTemplate['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($EmailTemplate['id'], array('action' => 'view', $EmailTemplate['id'])), 
		$html->link($EmailTemplate['slug'], am($pass, array('page' => 1, 'slug' => $EmailTemplate['slug']))), 
		$html->link($EmailTemplate['subject'], am($pass, array('page' => 1, 'subject' => $EmailTemplate['subject']))), 
		$html->link($EmailTemplate['to'], am($pass, array('page' => 1, 'to' => $EmailTemplate['to']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>