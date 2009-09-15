<?php 
/* SVN FILE: $Id$ */
/* AuthorPayment Fixture generated on: 2009-09-15 12:27:50 : 1253014070*/

class AuthorPaymentFixture extends CakeTestFixture {
	var $name = 'AuthorPayment';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'author_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'article_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'total' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '8,2'),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'author_id' => array('column' => array('author_id', 'article_id'), 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'author_id'  => 1,
		'article_id'  => 1,
		'total'  => 1,
		'created'  => '2009-09-15 12:27:50',
		'modified'  => '2009-09-15 12:27:50'
	));
}
?>