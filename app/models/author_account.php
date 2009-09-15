<?php
class AuthorAccount extends AppModel {

	var $name = 'AuthorAccount';
	var $validate = array(
		'author_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Author' => array(
			'className' => 'Author',
			'foreignKey' => 'author_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>