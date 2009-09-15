<?php 
/* SVN FILE: $Id$ */
/* User Fixture generated on: 2009-09-15 12:22:43 : 1253013763*/

class UserFixture extends CakeTestFixture {
	var $name = 'User';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'username' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32, 'key' => 'index'),
		'passwd' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 40),
		'email' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'is_customer' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'is_author' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'username' => array('column' => 'username', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'username'  => 'Lorem ipsum dolor sit amet',
		'passwd'  => 'Lorem ipsum dolor sit amet',
		'email'  => 'Lorem ipsum dolor sit amet',
		'is_customer'  => 1,
		'is_author'  => 1,
		'created'  => '2009-09-15 12:22:43',
		'modified'  => '2009-09-15 12:22:43'
	));
}
?>