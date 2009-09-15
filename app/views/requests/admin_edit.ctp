<?php /* SVN FILE: $Id: form.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<?php 
$action = in_array($this->action, array('add', 'admin_add'))?'Add':'Edit'; 
$action = Inflector::humanize($action); 
echo $form->create(); 
echo $form->inputs(array( 
	'legend' => $action . ' Request', 
	'id',
	'customer_id' => array('empty' => true),
	'title',
	'description',
	'primary_keywords',
	'secondary_keywords',
	'category_id' => array('empty' => true),
	'deadline',
	'min_words',
	'max_words',
	'article_count',
	'articles_written',
	'articles_accepted',
	'articles_refused',
	'articles_in_review',
)); 
echo $form->end('Submit'); 
?>