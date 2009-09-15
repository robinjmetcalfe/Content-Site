<?php /* SVN FILE: $Id: header.ctp 18 2008-03-07 12:56:09Z andy $ */ ?>
<div id='header'>
<?php
$links = array();
if (($this->name == 'Xyz') && ($this->action == 'Xyz')) {
	$links[] = array(
		'title' => 'Home',
		'url' => '/'
	);
} else {
	$links[] = array(
		'title' => 'Admin',
		'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'Xyz', 'action' => 'Xyz')
	);
}

$links[] = array(
	'title' => 'Users',
	'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'index'),
	'children' => array(
		array(
			'title' => 'Authors',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'show_authors')
    	),
		array(
			'title' => 'Customers',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'show_customers')
		),
		array(
			'title' => 'Add a new Author',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'add_author')
		),
		array(
			'title' => 'Add a new Customer',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'add_customer')
		)
	)
);
$links[] = array(
	'title' => 'Articles',
	'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'articles', 'action' => 'index'),
	'children' => array(
		array(
			'title' => 'All articles',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'products', 'action' => 'example')
		)
	)
);
$links[] = array(
	'title' => 'Poly',
	'children' => array(
		array(
			'title' => 'Images',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'images', 'action' => 'index')
		),
		array(
			'title' => 'Attachments',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'attachments', 'action' => 'index'),
			'htmlAttributes' => array('title' => 'Same data as Images, but a lower level means of editing data')
		),
		array(
			'title' => 'Notes',
			'url' => array('admin' => true, 'prefix' => false, 'plugin' => null, 'controller' => 'attachments', 'action' => 'index'),
			'htmlAttributes' => array('title' => 'Make a note about anything')
		)
	)
);
$links[] = array(
	'title' => 'Logout',
	'url' => array('admin' => false, 'prefix' => null, 'plugin' => null, 'controller' => 'users', 'action' => 'logout')
);
echo $tree->generate($links, array ('element' => 'admin/menu_item', 'class' => 'nav'));
?>
</div>
