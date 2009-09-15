<?php 
/* SVN FILE: $Id$ */
/* Category Fixture generated on: 2009-09-15 12:29:13 : 1253014153*/

class CategoryFixture extends CakeTestFixture {
	var $name = 'Category';
	var $table = 'categories';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'title' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'parent_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'lft' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'rght' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'title'  => 'Lorem ipsum dolor sit amet',
		'parent_id'  => 1,
		'lft'  => 1,
		'rght'  => 1
	));
}
?>