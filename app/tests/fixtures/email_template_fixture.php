<?php 
/* SVN FILE: $Id$ */
/* EmailTemplate Fixture generated on: 2009-09-15 12:28:24 : 1253014104*/

class EmailTemplateFixture extends CakeTestFixture {
	var $name = 'EmailTemplate';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'slug' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32, 'key' => 'index'),
		'subject' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 128),
		'to' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'cc' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'bcc' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'content' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'slug' => array('column' => 'slug', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'slug'  => 'Lorem ipsum dolor sit amet',
		'subject'  => 'Lorem ipsum dolor sit amet',
		'to'  => 'Lorem ipsum dolor sit amet',
		'cc'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'bcc'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
	));
}
?>