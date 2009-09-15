<?php
class CustomerAccount extends AppModel {

	var $name = 'CustomerAccount';
	var $validate = array(
		'customer_id' => array('numeric'),
		'balance' => array('numeric'),
		'pending' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>