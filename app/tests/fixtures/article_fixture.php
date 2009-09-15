<?php 
/* SVN FILE: $Id$ */
/* Article Fixture generated on: 2009-09-15 12:27:01 : 1253014021*/

class ArticleFixture extends CakeTestFixture {
	var $name = 'Article';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'author_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'customer_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'request_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'title' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'body' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'word_count' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'deadline' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'accepted_status' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'review_feedback' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'primary_keyword_density' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '4,1'),
		'secondary_keyword_density' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => '4,1'),
		'primary_keywords' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'secondary_keywords' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'author_id' => array('column' => array('author_id', 'request_id'), 'unique' => 0), 'customer_id' => array('column' => 'customer_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'author_id'  => 1,
		'customer_id'  => 1,
		'request_id'  => 1,
		'title'  => 'Lorem ipsum dolor sit amet',
		'body'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'word_count'  => 1,
		'deadline'  => '2009-09-15 12:27:01',
		'accepted_status'  => 1,
		'review_feedback'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'primary_keyword_density'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'secondary_keyword_density'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'primary_keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'secondary_keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'created'  => '2009-09-15 12:27:01',
		'modified'  => '2009-09-15 12:27:01'
	));
}
?>