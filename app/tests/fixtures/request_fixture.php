<?php 
/* SVN FILE: $Id$ */
/* Request Fixture generated on: 2009-09-15 12:28:25 : 1253014105*/

class RequestFixture extends CakeTestFixture {
	var $name = 'Request';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'customer_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'title' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'description' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'primary_keywords' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'secondary_keywords' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'category_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'deadline' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'min_words' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'max_words' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'article_count' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'articles_written' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'articles_accepted' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'articles_refused' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'articles_in_review' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'customer_id' => array('column' => array('customer_id', 'category_id'), 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'customer_id'  => 1,
		'title'  => 'Lorem ipsum dolor sit amet',
		'description'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'primary_keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'secondary_keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'category_id'  => 1,
		'deadline'  => '2009-09-15 12:28:25',
		'min_words'  => 1,
		'max_words'  => 1,
		'article_count'  => 1,
		'articles_written'  => 1,
		'articles_accepted'  => 1,
		'articles_refused'  => 1,
		'articles_in_review'  => 1,
		'created'  => '2009-09-15 12:28:25',
		'modified'  => '2009-09-15 12:28:25'
	));
}
?>