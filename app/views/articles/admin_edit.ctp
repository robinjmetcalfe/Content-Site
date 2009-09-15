<?php /* SVN FILE: $Id: form.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<?php 
$action = in_array($this->action, array('add', 'admin_add'))?'Add':'Edit'; 
$action = Inflector::humanize($action); 
echo $form->create(); 
echo $form->inputs(array( 
	'legend' => $action . ' Article', 
	'id',
	'author_id' => array('empty' => true),
	'customer_id' => array('empty' => true),
	'request_id' => array('empty' => true),
	'title',
	'body',
	'word_count',
	'deadline',
	'accepted_status',
	'review_feedback',
	'primary_keyword_density',
	'secondary_keyword_density',
	'primary_keywords',
	'secondary_keywords',
	'ContentSite',
)); 
echo $form->end('Submit'); 
?>