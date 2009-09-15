<?php 
/* SVN FILE: $Id$ */
/* DiscountLevel Fixture generated on: 2009-09-15 12:28:23 : 1253014103*/

class DiscountLevelFixture extends CakeTestFixture {
	var $name = 'DiscountLevel';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'user_type' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'index'),
		'max_articles' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'discount' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '5,2'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'user_type' => array('column' => 'user_type', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'user_type'  => 'Lo',
		'max_articles'  => 1,
		'discount'  => 1
	));
}
?>