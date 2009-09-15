<?php
class DiscountLevel extends AppModel {

	var $name = 'DiscountLevel';
	var $validate = array(
		'user_type' => array('notempty'),
		'max_articles' => array('numeric')
	);

}
?>