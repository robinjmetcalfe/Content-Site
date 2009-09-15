<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Request</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$Request['id'])); 
	echo $html->tableCells(array('Customer',$Customer?$html->link($Customer['id'], array('controller' => 'customers', 'action' => 'view', $Request['customer_id'])):'')); 
	echo $html->tableCells(array('title',$Request['title'])); 
	echo $html->tableCells(array('description',$Request['description'])); 
	echo $html->tableCells(array('primary_keywords',$Request['primary_keywords'])); 
	echo $html->tableCells(array('secondary_keywords',$Request['secondary_keywords'])); 
	echo $html->tableCells(array('Category',$Category?$html->link($Category['title'], array('controller' => 'categories', 'action' => 'view', $Request['category_id'])):'')); 
	echo $html->tableCells(array('deadline',$Request['deadline'])); 
	echo $html->tableCells(array('min_words',$Request['min_words'])); 
	echo $html->tableCells(array('max_words',$Request['max_words'])); 
	echo $html->tableCells(array('article_count',$Request['article_count'])); 
	echo $html->tableCells(array('articles_written',$Request['articles_written'])); 
	echo $html->tableCells(array('articles_accepted',$Request['articles_accepted'])); 
	echo $html->tableCells(array('articles_refused',$Request['articles_refused'])); 
	echo $html->tableCells(array('articles_in_review',$Request['articles_in_review'])); 
	echo $html->tableCells(array('created',$Request['created'])); 
	echo $html->tableCells(array('modified',$Request['modified'])); 
?> 
</table>
