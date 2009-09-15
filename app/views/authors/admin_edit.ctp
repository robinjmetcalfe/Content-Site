<?php /* SVN FILE: $Id: form.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<?php 
$action = in_array($this->action, array('add', 'admin_add'))?'Add':'Edit'; 
$action = Inflector::humanize($action); 
echo $form->create(); 
echo $form->inputs(array( 
	'legend' => $action . ' Author', 
	'id',
	'user_id' => array('empty' => true),
	'full_name',
	'address_1',
	'address_2',
	'address_3',
	'state',
	'postcode',
	'telephone',
	'mobile',
	'test_text',
	'test_text_feedback',
	'validated',
)); 
echo $form->end('Submit'); 
?>