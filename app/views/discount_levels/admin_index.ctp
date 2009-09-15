<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Discount Levels', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'user_type', 
	'max_articles', 
	'discount', 
); 
echo $this->renderElement('filter', compact('filters')); 
?> 
<table>
<?php 
$th = array( 
	$paginator->sort('id'), 
	$paginator->sort('user_type'), 
	$paginator->sort('max_articles'), 
	$paginator->sort('discount'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $DiscountLevel['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $DiscountLevel['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $DiscountLevel['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($DiscountLevel['id'], array('action' => 'view', $DiscountLevel['id'])), 
		$html->link($DiscountLevel['user_type'], am($pass, array('page' => 1, 'user_type' => $DiscountLevel['user_type']))), 
		$html->link($DiscountLevel['max_articles'], am($pass, array('page' => 1, 'max_articles' => $DiscountLevel['max_articles']))), 
		$html->link($DiscountLevel['discount'], am($pass, array('page' => 1, 'discount' => $DiscountLevel['discount']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>