<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Author Payment</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$AuthorPayment['id'])); 
	echo $html->tableCells(array('Author',$Author?$html->link($Author['id'], array('controller' => 'authors', 'action' => 'view', $AuthorPayment['author_id'])):'')); 
	echo $html->tableCells(array('Article',$Article?$html->link($Article['title'], array('controller' => 'articles', 'action' => 'view', $AuthorPayment['article_id'])):'')); 
	echo $html->tableCells(array('total',$AuthorPayment['total'])); 
	echo $html->tableCells(array('created',$AuthorPayment['created'])); 
	echo $html->tableCells(array('modified',$AuthorPayment['modified'])); 
?> 
</table>
