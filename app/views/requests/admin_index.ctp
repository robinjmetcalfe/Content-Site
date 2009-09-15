<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Requests', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'customer_id', 
	'title', 
	'description', 
	'primary_keywords', 
	'secondary_keywords', 
	'category_id', 
	'deadline', 
	'min_words', 
	'max_words', 
	'article_count', 
	'articles_written', 
	'articles_accepted', 
	'articles_refused', 
	'articles_in_review', 
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
	$paginator->sort('Category', 'Category.title'), 
	$paginator->sort('deadline'), 
	$paginator->sort('min_words'), 
	$paginator->sort('max_words'), 
	$paginator->sort('article_count'), 
	$paginator->sort('articles_written'), 
	$paginator->sort('articles_accepted'), 
	$paginator->sort('articles_refused'), 
	$paginator->sort('articles_in_review'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $Request['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $Request['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $Request['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($Request['id'], array('action' => 'view', $Request['id'])), 
		$Customer?$html->link($Customer['id'], am($pass, array('page' => 1, 'customer_id' => $Request['customer_id']))):'', 
		$html->link($Request['title'], array('action' => 'view', $Request['id'])), 
		$Category?$html->link($Category['title'], am($pass, array('page' => 1, 'category_id' => $Request['category_id']))):'', 
		$html->link($Request['deadline'], am($pass, array('page' => 1, 'deadline' => $Request['deadline']))), 
		$html->link($Request['min_words'], am($pass, array('page' => 1, 'min_words' => $Request['min_words']))), 
		$html->link($Request['max_words'], am($pass, array('page' => 1, 'max_words' => $Request['max_words']))), 
		$html->link($Request['article_count'], am($pass, array('page' => 1, 'article_count' => $Request['article_count']))), 
		$html->link($Request['articles_written'], am($pass, array('page' => 1, 'articles_written' => $Request['articles_written']))), 
		$html->link($Request['articles_accepted'], am($pass, array('page' => 1, 'articles_accepted' => $Request['articles_accepted']))), 
		$html->link($Request['articles_refused'], am($pass, array('page' => 1, 'articles_refused' => $Request['articles_refused']))), 
		$html->link($Request['articles_in_review'], am($pass, array('page' => 1, 'articles_in_review' => $Request['articles_in_review']))), 
		$html->link($Request['created'], am($pass, array('page' => 1, 'created' => $Request['created']))), 
		$html->link($Request['modified'], am($pass, array('page' => 1, 'modified' => $Request['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>