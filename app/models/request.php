<?php
class Request extends AppModel {

	var $name = 'Request';
	var $validate = array(
		'customer_id' => array('numeric'),
		'title' => array('notempty'),
		'category_id' => array('numeric'),
		'deadline' => array('date'),
		'min_words' => array('numeric'),
		'max_words' => array('numeric'),
		'article_count' => array('numeric'),
		'articles_written' => array('numeric'),
		'articles_accepted' => array('numeric'),
		'articles_refused' => array('numeric'),
		'articles_in_review' => array('numeric')
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
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Article' => array(
			'className' => 'Article',
			'foreignKey' => 'request_id',
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