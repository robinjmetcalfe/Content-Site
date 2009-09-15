<?php
class CustomerPayment extends AppModel {

	var $name = 'CustomerPayment';
	var $validate = array(
		'customer_id' => array('numeric'),
		'transaction_id' => array('numeric'),
		'credits' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Transaction' => array(
			'className' => 'Transaction',
			'foreignKey' => 'transaction_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>