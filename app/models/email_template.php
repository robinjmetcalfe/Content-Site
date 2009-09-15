<?php
class EmailTemplate extends AppModel {

	var $name = 'EmailTemplate';
	var $validate = array(
		'slug' => array('notempty'),
		'subject' => array('notempty'),
		'to' => array('notempty')
	);

}
?>