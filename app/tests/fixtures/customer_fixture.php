<?php 
/* SVN FILE: $Id$ */
/* Customer Fixture generated on: 2009-09-15 12:28:22 : 1253014102*/

class CustomerFixture extends CakeTestFixture {
	var $name = 'Customer';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'real_name' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'address_1' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'address_2' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'address_3' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'state' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'postcode' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 16),
		'telephone' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'mobile' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'user_id' => array('column' => 'user_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'user_id'  => 1,
		'real_name'  => 'Lorem ipsum dolor sit amet',
		'address_1'  => 'Lorem ipsum dolor sit amet',
		'address_2'  => 'Lorem ipsum dolor sit amet',
		'address_3'  => 'Lorem ipsum dolor sit amet',
		'state'  => 'Lorem ipsum dolor sit amet',
		'postcode'  => 'Lorem ipsum do',
		'telephone'  => 'Lorem ipsum dolor sit amet',
		'mobile'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2009-09-15 12:28:22',
		'modified'  => '2009-09-15 12:28:22'
	));
}
?>