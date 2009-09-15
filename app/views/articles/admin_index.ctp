<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Articles', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'author_id', 
	'customer_id', 
	'request_id', 
	'title', 
	'body', 
	'word_count', 
	'deadline', 
	'accepted_status', 
	'review_feedback', 
	'primary_keyword_density', 
	'secondary_keyword_density', 
	'primary_keywords', 
	'secondary_keywords', 
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
	$paginator->sort('Customer', 'Customer.id'), 
	$paginator->sort('Request', 'Request.title'), 
	$paginator->sort('title'), 
	$paginator->sort('word_count'), 
	$paginator->sort('deadline'), 
	$paginator->sort('accepted_status'), 
	$paginator->sort('primary_keyword_density'), 
	$paginator->sort('secondary_keyword_density'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $Article['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $Article['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $Article['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($Article['id'], array('action' => 'view', $Article['id'])), 
		$Author?$html->link($Author['id'], am($pass, array('page' => 1, 'author_id' => $Article['author_id']))):'', 
		$Customer?$html->link($Customer['id'], am($pass, array('page' => 1, 'customer_id' => $Article['customer_id']))):'', 
		$Request?$html->link($Request['title'], am($pass, array('page' => 1, 'request_id' => $Article['request_id']))):'', 
		$html->link($Article['title'], array('action' => 'view', $Article['id'])), 
		$html->link($Article['word_count'], am($pass, array('page' => 1, 'word_count' => $Article['word_count']))), 
		$html->link($Article['deadline'], am($pass, array('page' => 1, 'deadline' => $Article['deadline']))), 
		$html->link($Article['accepted_status'], am($pass, array('page' => 1, 'accepted_status' => $Article['accepted_status']))), 
		$html->link($Article['primary_keyword_density'], am($pass, array('page' => 1, 'primary_keyword_density' => $Article['primary_keyword_density']))), 
		$html->link($Article['secondary_keyword_density'], am($pass, array('page' => 1, 'secondary_keyword_density' => $Article['secondary_keyword_density']))), 
		$html->link($Article['created'], am($pass, array('page' => 1, 'created' => $Article['created']))), 
		$html->link($Article['modified'], am($pass, array('page' => 1, 'modified' => $Article['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>