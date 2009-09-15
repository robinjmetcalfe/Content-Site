<?php
class Article extends AppModel {

	var $name = 'Article';
	var $validate = array(
		'author_id' => array('numeric'),
		'customer_id' => array('numeric'),
		'request_id' => array('numeric'),
		'title' => array('notempty'),
		'word_count' => array('numeric'),
		'deadline' => array('date'),
		'accepted_status' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Author' => array(
			'className' => 'Author',
			'foreignKey' => 'author_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Request' => array(
			'className' => 'Request',
			'foreignKey' => 'request_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'AuthorPayment' => array(
			'className' => 'AuthorPayment',
			'foreignKey' => 'article_id',
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

	var $hasAndBelongsToMany = array(
		'ContentSite' => array(
			'className' => 'ContentSite',
			'joinTable' => 'articles_content_sites',
			'foreignKey' => 'article_id',
			'associationForeignKey' => 'content_site_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>