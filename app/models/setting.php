<?php
class Setting extends AppModel {

	var $name = 'Setting';
	var $validate = array(
		'key' => array('notempty')
	);

}
?>