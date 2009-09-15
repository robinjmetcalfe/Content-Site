<?php 
/* SVN FILE: $Id$ */
/* AuthorWithdrawal Fixture generated on: 2009-09-15 12:27:53 : 1253014073*/

class AuthorWithdrawalFixture extends CakeTestFixture {
	var $name = 'AuthorWithdrawal';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'author_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'payout_date' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'paid' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'transaction_details' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'transaction_status' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'author_id' => array('column' => 'author_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'author_id'  => 1,
		'payout_date'  => '2009-09-15 12:27:53',
		'paid'  => 1,
		'transaction_details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'transaction_status'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2009-09-15 12:27:53',
		'modified'  => '2009-09-15 12:27:53'
	));
}
?>