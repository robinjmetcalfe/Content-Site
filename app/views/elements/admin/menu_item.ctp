<?php /* SVN FILE: $Id: menu_item.ctp 18 2008-03-07 12:56:09Z andy $ */ ?>
<?php
$title = $url = 'missing';
$htmlAttributes = array();
$confirmMessage = false;
$escapeTitle = true;
extract($data);
if ($url) {
	echo $html->link($title, $url, $htmlAttributes, $confirmMessage, $escapeTitle);
} else {
	echo $title;
}
?>
