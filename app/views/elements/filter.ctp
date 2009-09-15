<?php /* SVN FILE: $Id: filter.ctp 23 2008-03-24 20:07:46Z andy $ */ ?>
<?php
$javascript->cacheEvents();
$javascript->codeBlock(null, array('inline' => false, 'safe' => false));
?>
$(function() {
	$('a#toggleFilter').text('Show Filter');
	$('div#resultFilter').hide();
	$('a#toggleFilter').click(function(){
  		$('div#resultFilter').slideToggle('slow');
		$('a#toggleFilter').text('Hide Filter');
		return false;
	});
});
<?php $javascript->blockEnd(); ?>
<p>
<?php
echo $html->link('Toggle Filter', '#', array('id' => 'toggleFilter'));
$currentFilter = $session->read($modelClass . '.filter');
if ($currentFilter) {
	$out = ' - currently filtering for :';
	foreach ($currentFilter as $field => $filter) {
		$currentFilters[] = $field . ' ' . $filter;
	}
	echo $out . implode(', ', $currentFilters);
}
?>
</p>
<div id="resultFilter">
<?php
$_data = $form->data;
$form->data = $session->read($modelClass . '.filterForm');
echo $form->create(null, array('url' => '/' . $this->params['url']['url']));
foreach ($filters as $filter => $options) {
	if (!is_array($options)) {
		$filter = $options;
		$options = $filterOptions;
	}
	$selectOptions = array('div' => false, 'label' => $filter, 'options' => $options);
	$select = $form->input($filter . '_type', $selectOptions);
	$inputOptions = array('div' => false, 'label' => false, 'empty' => true);
	if ($filter == 'id') {
		$inputOptions['type'] = 'text';
	}
	$input = $form->input($filter, $inputOptions);
	$out = $select . $input;
	echo $html->div('input', $out);
}
echo $form->end('apply filter');
$form->data = $_data;
?>
</div>
