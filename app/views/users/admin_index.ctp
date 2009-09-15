<?php /* SVN FILE: $Id: index.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php 
$pass = $this->passedArgs; 
$pass['action'] = str_replace(Configure::read('Routing.admin') . '_', '', $this->action); // temp 
$paginator->options(array('url' => $pass)); 
?> 
<h2><?php echo $html->link('Users', array(null));?></h2>
<?php 
$filters = array( 
	'id', 
	'username', 
	'passwd', 
	'email', 
	'is_customer', 
	'is_author', 
	'created', 
	'modified', 
); 
echo $this->renderElement('filter', compact('filters')); 
?> 
<table>
<?php 
$th = array( 
	$paginator->sort('id'), 
	$paginator->sort('username'), 
	$paginator->sort('passwd'), 
	$paginator->sort('email'), 
	$paginator->sort('is_customer'), 
	$paginator->sort('is_author'), 
	$paginator->sort('created'), 
	$paginator->sort('modified'), 
	'actions' 
); 
echo $html->tableHeaders($th); 
foreach ($data as $row) { 
	extract($row); 
	$actions = array(); 
	$actions[] = $html->link('V', array('action' => 'view', $User['id']), array('title' => 'view')); 
	$actions[] = $html->link('E', array('action' => 'edit', $User['id']), array('title' => 'edit')); 
	$actions[] = $html->link('X', array('action' => 'delete', $User['id']), array('title' => 'delete')); 
	$actions = implode(' - ', $actions); 
	$tr = array( 
		$html->link($User['id'], array('action' => 'view', $User['id'])), 
		$html->link($User['username'], am($pass, array('page' => 1, 'username' => $User['username']))), 
		$html->link($User['passwd'], am($pass, array('page' => 1, 'passwd' => $User['passwd']))), 
		$html->link($User['email'], am($pass, array('page' => 1, 'email' => $User['email']))), 
		$html->link($User['is_customer'], am($pass, array('page' => 1, 'is_customer' => $User['is_customer']))), 
		$html->link($User['is_author'], am($pass, array('page' => 1, 'is_author' => $User['is_author']))), 
		$html->link($User['created'], am($pass, array('page' => 1, 'created' => $User['created']))), 
		$html->link($User['modified'], am($pass, array('page' => 1, 'modified' => $User['modified']))), 
		$actions 
	); 
	echo $html->tableCells($tr, array('class' => 'odd'), array('class' => 'even')); 
} 
echo $html->tableCells(array($html->link('Add', array('action' => 'add')))); 
?> 
</table>
<?php echo $this->renderElement('paging'); ?>