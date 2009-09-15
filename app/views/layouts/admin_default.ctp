<?php echo $html->docType('xhtml-trans'); ?>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
<?php echo $html->charset('UTF-8'); ?>
<title><?php echo htmlentities($title_for_layout); ?></title>
<?php
echo $html->css('jquery.thickbox.css', 'stylesheet', array ('media' => 'screen'));
echo $html->css('admin', 'stylesheet', array ('title' => 'Standard', 'media' => 'screen'));
if (isset ($javascript)) {
	echo $javascript->link('jquery/jquery');
	if (isset ($javascripts)) {
		foreach ($javascripts as $scriptfile) {
			echo $javascript->link($scriptfile);
		}
	}
}
echo $scripts_for_layout;
?>
</head>
<body>
<?php echo $this->renderElement('admin/header'); ?>
<div id='container'>
<div id='content'>
<?php if ($session->check('Message.flash')):
	$session->flash();
endif;
echo $content_for_layout; ?>
</div>
</div>
<?php echo $cakeDebug; ?>
</body>
</html>
