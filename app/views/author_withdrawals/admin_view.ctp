<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Author Withdrawal</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$AuthorWithdrawal['id'])); 
	echo $html->tableCells(array('Author',$Author?$html->link($Author['id'], array('controller' => 'authors', 'action' => 'view', $AuthorWithdrawal['author_id'])):'')); 
	echo $html->tableCells(array('payout_date',$AuthorWithdrawal['payout_date'])); 
	echo $html->tableCells(array('paid',$AuthorWithdrawal['paid'])); 
	echo $html->tableCells(array('transaction_details',$AuthorWithdrawal['transaction_details'])); 
	echo $html->tableCells(array('transaction_status',$AuthorWithdrawal['transaction_status'])); 
	echo $html->tableCells(array('created',$AuthorWithdrawal['created'])); 
	echo $html->tableCells(array('modified',$AuthorWithdrawal['modified'])); 
?> 
</table>
