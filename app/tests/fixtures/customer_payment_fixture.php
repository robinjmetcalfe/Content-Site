<?php 
/* SVN FILE: $Id$ */
/* CustomerPayment Fixture generated on: 2009-09-15 12:28:21 : 1253014101*/

class CustomerPaymentFixture extends CakeTestFixture {
	var $name = 'CustomerPayment';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'customer_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'transaction_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'cash' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '9,2'),
		'credits' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'conversion_rate' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '5,2'),
		'customer_discount' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '5,2'),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'customer_id' => array('column' => array('customer_id', 'transaction_id'), 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'customer_id'  => 1,
		'transaction_id'  => 1,
		'cash'  => 1,
		'credits'  => 1,
		'conversion_rate'  => 1,
		'customer_discount'  => 1,
		'created'  => '2009-09-15 12:28:21',
		'modified'  => '2009-09-15 12:28:21'
	));
}
?>