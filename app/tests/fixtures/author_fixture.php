<?php 
/* SVN FILE: $Id$ */
/* Author Fixture generated on: 2009-09-15 12:27:53 : 1253014073*/

class AuthorFixture extends CakeTestFixture {
	var $name = 'Author';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'user_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'full_name' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'address_1' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'address_2' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'address_3' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'state' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'postcode' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 16),
		'telephone' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'mobile' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'test_text' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'test_text_feedback' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'validated' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 4),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'user_id' => array('column' => 'user_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'user_id'  => 1,
		'full_name'  => 'Lorem ipsum dolor sit amet',
		'address_1'  => 'Lorem ipsum dolor sit amet',
		'address_2'  => 'Lorem ipsum dolor sit amet',
		'address_3'  => 'Lorem ipsum dolor sit amet',
		'state'  => 'Lorem ipsum dolor sit amet',
		'postcode'  => 'Lorem ipsum do',
		'telephone'  => 'Lorem ipsum dolor sit amet',
		'mobile'  => 'Lorem ipsum dolor sit amet',
		'test_text'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'test_text_feedback'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'validated'  => 1,
		'created'  => '2009-09-15 12:27:53',
		'modified'  => '2009-09-15 12:27:53'
	));
}
?>