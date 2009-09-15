<?php
/**
 * Tree Helper.
 *
 * Used the generate nested representations of hierarchial data
 *
 * PHP versions 4 and 5
 *
 * Copyright (c), Andy Dawson
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright    Copyright (c) 2007, Andy Dawson
 * @version      $Revision: 21 $
 * @created      24/01/2008
 * @modifiedby   $LastChangedBy: andy $
 * @lastmodified $Date: 2008-03-14 00:32:20 +0100 (Fri, 14 Mar 2008) $
 * @license      http://www.opensource.org/licenses/mit-license.php The MIT License
 */

/**
 * Tree helper
 *
 * Helper to generate tree representations of MPTT or recursively nested data
 */
class TreeHelper extends AppHelper {

	var $__settings = array();

	var $helpers = array ('Html');

/**
 * Tree generation method.
 *
 * Accepts the results of 
 * 	find('all', array('fields' => array('lft', 'rght', 'whatever'), 'order' => 'lft ASC'));
 * 	children(); // if you have the tree behavior of course!
 * or 	findAllThreaded(); and generates a tree structure of the data.
 *
 * Settings (2nd parameter):
 *	'model' => name of the model (key) to look for in the data array. defaults to the first model for the current
 * controller.
 *	'alias' => the array key to output for a simple ul (not used if element is specified)
 *	'type' => type of output defaults to ul
 *	'itemType => type of item output default to li
 *	'class' => class for top level 'item'
 *	'element' => path to an element to render to get node contents.
 *
 * @param array $data data to loop on
 * @param array $settings
 * @return string html representation of the passed data
 * @access public
 */
	function generate ($data, $settings = array ()) {
		$this->__settings = array_merge(array(
				'element' => false,
				'class' => false,
				'model' => null,
				'typeAttributes' => '',
				'itemAttributes' => '',
				'alias' => 'name',
				'left' => 'lft',
				'right' => 'rght',
				'type' => 'ul',
				'itemType' => 'li',
				'depth' => 0
			), (array)$settings);
		extract($this->__settings);

		$view =& ClassRegistry:: getObject('view');
		if ($model === null) {
			$model = Inflector::classify($view->params['models'][0]);
		}
		$stack = array();

		$typeAttributes = $this->_attributes($type);
		$return = "\r\n" . '<' . $type .  $typeAttributes . '>';

		foreach ($data as $i => $result) {
			if (!$model) {
				$result[$model] = $result; 
			}
			while ($stack && ($stack[count($stack)-1] < $result[$model][$right])) {
				array_pop($stack);
				$return .= "\r\n" . str_repeat("\t",count($stack) + 1) . '</' . $type . '>';
				$return .= '</' . $itemType . '>';
			}

			// Some useful vars
			$hasChildren = $firstChild = $lastChild = $hasVisibleChildren = false;
			$numberOfDirectChildren = $numberOfTotalChildren = 0;
			if (isset($result['children'])) {
				if ($result['children']) {
					$hasChildren = $hasVisibleChildren = true;
					$numberOfDirectChildren = count($result['children']);
				}
				if (!isset($data[$i - 1])) {
					$firstChild = true;
				}
				if (!isset($data[$i + 1])) {
					$lastChild = true;
				}
			} elseif (isset($result[$model][$left])) {
				if ($result[$model][$left] != ($result[$model][$right] - 1)) {
					$hasChildren = true;
					$numberOfTotalChildren = ($result[$model][$right] - $result[$model][$left] - 1) / 2;
					if (isset($data[$i + 1]) && $data[$i + 1][$model][$right] < $result[$model][$right]) {
						$hasVisibleChildren = true;
					}
				}
				if (!isset($data[$i - 1]) || ($data[$i - 1][$model][$left] == ($result[$model][$right] - 1))) {
					$firstChild = true;
				}
				if ($stack && $stack[count($stack) - 1] == ($result[$model][$right] + 1)) {
					$lastChild = true;
				}
			}
			$elementData = array(
				'data' => $result, 
				'depth' => $depth?$depth:count($stack),
				'hasChildren' => $hasChildren,
				'numberOfDirectChildren' => $numberOfDirectChildren,
				'numberOfTotalChildren' => $numberOfTotalChildren,
				'firstChild' => $firstChild,
				'lastChild' => $lastChild,
				'hasVisibleChildren' => $hasVisibleChildren
			);
			$this->__settings = array_merge($elementData, $this->__settings);
	
			// Prefix
			$itemAttributes = $this->_attributes($itemType, $elementData);
			$return .= "\r\n" . str_repeat("\t",count($stack) + 1) . '<' . $itemType . $itemAttributes . '>';

			// Main Content
			if ($element) {
				$return .= $view->renderElement($element,$elementData);
			} else {
				$return .= $result[$model][$alias];
			}

			// Suffix
			if (!isset($result[$model][$right]) || !isset($result[$model][$left]) || isset($result['children'])) {
				if (isset($result['children'])) {
					unset($settings['class']);
					$settings['depth'] = $depth + 1;
					$return .= $this->generate($result['children'], $settings);
				}
				$return .= '</' . $itemType . '>';
			} elseif ($result[$model][$right] == $result[$model][$left] + 1) { // Has no children
				$return .= '</' . $itemType . '>';
			} else {
				$typeAttributes = $this->_attributes($type, $elementData);
				$return .= '<' . $type . $typeAttributes . '>';
				$stack[] = $result[$model][$right];
			}
		}

		// Cleanup
		while ($stack) {
			array_pop($stack);
			$return .= "\r\n" . str_repeat("\t",count($stack) + 1) . '</' . $type . '>';
			$return .= '</' . $itemType . '>';
		}
		$return .= "\r\n" . '</' . $type . '>' . "\r\n";

		return $return;
	}

/**
 * Stub method.
 *
 * @param string $type
 * @param array $elementData
 * @return string attributes for requested html element
 * @access public
 */
	function _attributes($rType, $elementData = array()) {
		extract($this->__settings);
		if ($depth == 0 && $rType == $type) {
			return ' class="' . $class . '" ';
		}
		return '';
	}
}
?>
