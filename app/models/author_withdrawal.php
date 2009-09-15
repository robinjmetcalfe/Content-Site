<?php
class AuthorWithdrawal extends AppModel {

	var $name = 'AuthorWithdrawal';
	var $validate = array(
		'author_id' => array('numeric'),
		'payout_date' => array('date'),
		'paid' => array('numeric'),
		'transaction_status' => array('notempty')
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