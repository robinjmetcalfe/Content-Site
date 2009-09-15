<?php
class User extends AppModel {

	var $name = 'User';
	var $displayField = "username";
	var $validate = array(
		'username' => array('notempty'),
		'passwd' => array('notempty'),
		'email' => array('email'),
		'is_customer' => array('numeric'),
		'is_author' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'AuthorProfile' => array(
			'className' => 'Author',
			'foreignKey' => 'user_id',
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
		'CustomerProfile' => array(
			'className' => 'Customer',
			'foreignKey' => 'user_id',
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
		'Transaction' => array(
			'className' => 'Transaction',
			'foreignKey' => 'user_id',
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
	
    function validateLogin($data) 
    { 
        $user = $this->find(array('username' => $data['username'], 'passwd' => md5($data['password'])), array('id', 'username')); 
        if(empty($user) == false) 
            return $user['User']; 
        return false; 
    } 	

}
?>