<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Author Payments', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'author_id', 
	'article_id', 
	'total', 
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
	$paginator->sort('Article', 'Article.title'), 
	$paginator->sort('total'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $AuthorPayment['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $AuthorPayment['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $AuthorPayment['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($AuthorPayment['id'], array('action' => 'view', $AuthorPayment['id'])), 
		$Author?$html->link($Author['id'], am($pass, array('page' => 1, 'author_id' => $AuthorPayment['author_id']))):'', 
		$Article?$html->link($Article['title'], am($pass, array('page' => 1, 'article_id' => $AuthorPayment['article_id']))):'', 
		$html->link($AuthorPayment['total'], am($pass, array('page' => 1, 'total' => $AuthorPayment['total']))), 
		$html->link($AuthorPayment['created'], am($pass, array('page' => 1, 'created' => $AuthorPayment['created']))), 
		$html->link($AuthorPayment['modified'], am($pass, array('page' => 1, 'modified' => $AuthorPayment['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>