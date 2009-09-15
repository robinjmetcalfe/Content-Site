<?php 
/* SVN FILE: $Id$ */
/* CustomerAccount Fixture generated on: 2009-09-15 12:28:20 : 1253014100*/

class CustomerAccountFixture extends CakeTestFixture {
	var $name = 'CustomerAccount';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'customer_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'balance' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'pending' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'customer_id' => array('column' => 'customer_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'customer_id'  => 1,
		'balance'  => 1,
		'pending'  => 1,
		'created'  => '2009-09-15 12:28:20',
		'modified'  => '2009-09-15 12:28:20'
	));
}
?>