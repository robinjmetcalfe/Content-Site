<?php
class Author extends AppModel {

	var $name = 'Author';
	var $validate = array(
		'user_id' => array('numeric'),
		'full_name' => array('notempty'),
		'address_1' => array('notempty'),
		'address_2' => array('notempty'),
		'address_3' => array('notempty'),
		'state' => array('notempty'),
		'postcode' => array('notempty'),
		'telephone' => array('notempty'),
		'mobile' => array('notempty'),
		'validated' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Article' => array(
			'className' => 'Article',
			'foreignKey' => 'author_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'AuthorAccount' => array(
			'className' => 'AuthorAccount',
			'foreignKey' => 'author_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'AuthorPayment' => array(
			'className' => 'AuthorPayment',
			'foreignKey' => 'author_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'AuthorWithdrawal' => array(
			'className' => 'AuthorWithdrawal',
			'foreignKey' => 'author_id',
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