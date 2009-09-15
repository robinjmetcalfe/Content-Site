<?php
class Category extends AppModel {

	var $name = 'Category';
	var $validate = array(
		'title' => array('notempty'),
		'parent_id' => array('numeric'),
		'lft' => array('numeric'),
		'rght' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Request' => array(
			'className' => 'Request',
			'foreignKey' => 'category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>