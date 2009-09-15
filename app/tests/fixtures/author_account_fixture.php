<?php 
/* SVN FILE: $Id$ */
/* AuthorAccount Fixture generated on: 2009-09-15 12:27:48 : 1253014068*/

class AuthorAccountFixture extends CakeTestFixture {
	var $name = 'AuthorAccount';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'author_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'balance' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '9,2'),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'author_id' => array('column' => 'author_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'author_id'  => 1,
		'balance'  => 1,
		'created'  => '2009-09-15 12:27:48',
		'modified'  => '2009-09-15 12:27:48'
	));
}
?>