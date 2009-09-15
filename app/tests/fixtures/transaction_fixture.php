<?php 
/* SVN FILE: $Id$ */
/* Transaction Fixture generated on: 2009-09-15 12:28:30 : 1253014110*/

class TransactionFixture extends CakeTestFixture {
	var $name = 'Transaction';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'payment_method' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 16),
		'amount' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '10,2'),
		'details' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'user_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'direction' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'user_id' => array('column' => 'user_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'payment_method'  => 'Lorem ipsum do',
		'amount'  => 'Lorem ipsum do',
		'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'user_id'  => 1,
		'direction'  => 1,
		'created'  => '2009-09-15 12:28:30',
		'modified'  => '2009-09-15 12:28:30'
	));
}
?>