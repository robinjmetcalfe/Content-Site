<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Article</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$Article['id'])); 
	echo $html->tableCells(array('Author',$Author?$html->link($Author['id'], array('controller' => 'authors', 'action' => 'view', $Article['author_id'])):'')); 
	echo $html->tableCells(array('Customer',$Customer?$html->link($Customer['id'], array('controller' => 'customers', 'action' => 'view', $Article['customer_id'])):'')); 
	echo $html->tableCells(array('Request',$Request?$html->link($Request['title'], array('controller' => 'requests', 'action' => 'view', $Article['request_id'])):'')); 
	echo $html->tableCells(array('title',$Article['title'])); 
	echo $html->tableCells(array('body',$Article['body'])); 
	echo $html->tableCells(array('word_count',$Article['word_count'])); 
	echo $html->tableCells(array('deadline',$Article['deadline'])); 
	echo $html->tableCells(array('accepted_status',$Article['accepted_status'])); 
	echo $html->tableCells(array('review_feedback',$Article['review_feedback'])); 
	echo $html->tableCells(array('primary_keyword_density',$Article['primary_keyword_density'])); 
	echo $html->tableCells(array('secondary_keyword_density',$Article['secondary_keyword_density'])); 
	echo $html->tableCells(array('primary_keywords',$Article['primary_keywords'])); 
	echo $html->tableCells(array('secondary_keywords',$Article['secondary_keywords'])); 
	echo $html->tableCells(array('created',$Article['created'])); 
	echo $html->tableCells(array('modified',$Article['modified'])); 
?> 
</table>
