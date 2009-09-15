<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Author Withdrawals', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'author_id', 
	'payout_date', 
	'paid', 
	'transaction_details', 
	'transaction_status', 
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
	$paginator->sort('payout_date'), 
	$paginator->sort('paid'), 
	$paginator->sort('transaction_status'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $AuthorWithdrawal['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $AuthorWithdrawal['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $AuthorWithdrawal['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($AuthorWithdrawal['id'], array('action' => 'view', $AuthorWithdrawal['id'])), 
		$Author?$html->link($Author['id'], am($pass, array('page' => 1, 'author_id' => $AuthorWithdrawal['author_id']))):'', 
		$html->link($AuthorWithdrawal['payout_date'], am($pass, array('page' => 1, 'payout_date' => $AuthorWithdrawal['payout_date']))), 
		$html->link($AuthorWithdrawal['paid'], am($pass, array('page' => 1, 'paid' => $AuthorWithdrawal['paid']))), 
		$html->link($AuthorWithdrawal['transaction_status'], am($pass, array('page' => 1, 'transaction_status' => $AuthorWithdrawal['transaction_status']))), 
		$html->link($AuthorWithdrawal['created'], am($pass, array('page' => 1, 'created' => $AuthorWithdrawal['created']))), 
		$html->link($AuthorWithdrawal['modified'], am($pass, array('page' => 1, 'modified' => $AuthorWithdrawal['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>