<?php
/* SVN FILE: $Id: app_controller.php 23 2008-03-24 20:07:46Z andy $ */
/**
 * Generic App Controller
 *
 * Prepopulated app controller with basic admin functions.
 *
 * PHP versions 4 and 5
 *
 * www.ad7six.com
 *
 * @filesource
 * @author 		Andy Dawson (AD7six)
 * @version		$Revision: 23 $
 * @modifiedby		$LastChangedBy: andy $
 * @lastmodified	$Date: 2008-03-24 21:07:46 +0100 (Mon, 24 Mar 2008) $
 * @license		http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class AppController extends Controller {

	var $view = 'Theme';

	//var $theme = 'csszengarden205';

	var $components = array('RequestHandler', 'Auth');

	var $helpers= array('Javascript', 'Form', 'Time', 'Text', 'Tree');

	var $namedParams = true;

	function beforeFilter() {
	   
        //permit certain views for non-logged in users
        $this->Auth->allow('index', 'view', 'display');
        
        // if admin pages are being requested
        if(isset($this->params['admin'])) {
            // check the admin is logged in
            // this method is in the app_controller.php file
            $this->checkAdminSession();
        }
	   
		// Store where they came from
		$realReferer = $this->referer();
		$sessionReferer = $this->Session->read('referer');
		if ($this->name == 'App') {
			$this->log($this->here);
			$this->log($this->referer());
		} else {
			if (!isset($_SESSION['history']) || end($_SESSION['history']) != $this->params['url']['url']) {
				if ($this->params['url']['url'] == '/') {
					$_SESSION['history'][] = $this->params['url']['url'];
				} else {
					$_SESSION['history'][] = '/' . $this->params['url']['url'];
				}
			}
			if (empty ($this->data)) {
				if ($realReferer) {
					if ((!$sessionReferer) || ($realReferer != '/' . $this->params['url']['url'])) {
						$this->Session->write('referer', $realReferer);
					}
				} elseif (!$sessionReferer) {
					$this->Session->write('referer', $this->referer(array('action' => 'index')));
				}
			} elseif (!$sessionReferer) {
				$this->Session->write('referer', $this->referer(array('action' => 'index')));
			}
		}
		$admin = Configure::read('Routing.admin');
		if ($admin && isset($this->params[$admin])) {
			$this->layout = 'admin_default';
			$this->helpers[] = 'Tree';
		}
		// Handle url-only methods
		if (isset($this->Security)) {
			$this->Security->blackHoleCallback = '_confirmAction';
			call_user_func_array(array(&$this->Security, 'requirePost'), $this->postActions);
		}
	}

	function beforeRender() {
		if (isset($this->params['url']['cssfile'])) {
			$this->layout = 'zen';
			if (file_exists(VIEWS . 'themed' . DS . 'csszengarden' . $this->params['url']['cssfile'])) {
				$this->theme = 'csszengarden' . $this->params['url']['cssfile'];
			} else {
				$this->theme = 'csszengarden';
			}
		}

		// Always use and set $data with primary view data
		if (!isset ($this->viewVars['data'])) {
			$this->set('data', $this->data);
		}
		// Pass the model class to the view for dynamic views
		if (!isset ($this->viewVars['modelClass'])) {
			$this->set('modelClass', $this->modelClass);
		}

		// Set admin layout for all admin functions
		if (isset ($this->params['admin'])) {
			// Pass status enum 
			if (isset($this->{$this->modelClass}) && isset($this->{$this->modelClass}->statusEnum)) {
				$this->set('statusEnum', $this->{$this->modelClass}->statusEnum);
			}
		}

		if (($this->RequestHandler->isAjax() || isset ($this->params['requested'])) && Configure::read()) {
			Configure::write('debug', 1);
		}
	}

	function redirect($url, $status= null, $exit= true) {
		if ($this->RequestHandler->isAjax() || isset ($this->params['requested'])) {
			$this->plugin= null;
			$this->viewPath = '_generic';
			if (is_string($url) && strpos($url, 'http://') === 0) {
				$this->set('url', $url);
				$this->render('force_redirect');
				die;
			}
			$data= $this->requestAction($url, array ('return'));
			$this->set('data', $data);
			$this->render('ajax_redirect');
			die;
		} else {
			return parent::redirect($url, $status,$exit);
		}
		return false;
	}
	
    function login() {
        
    }
    
    function logout() {
        $this->redirect($this->Auth->logout());
    }

	// Generic admin functions
	function admin_add () {
		if (!empty ($this->data)) {
			if ($this->{$this->modelClass}->save($this->data)) {
				$this->Session->setFlash($this->{$this->modelClass}->name . ' added');
				$this->redirect($this->Session->read('referer'), null, true);
			} else {
				$this->Session->setFlash('Please correct the errors below.');
			}
		}
		$this->_setSelects();
		$this->render('admin_edit');
	}

	function admin_delete($id) {
		if ($this->{$this->modelClass}->del($id)) {
			$this->Session->setFlash($this->modelClass . ' with id ' . $id . ' deleted');
		} else {
			$this->Session->setFlash('Can\'t delete ' . $this->modelClass . ' with id ' . $id);
		}
		$this->redirect($this->Session->read('referer'), null, true);
	}

	function admin_edit($id) {
		if (!empty ($this->data)) {
			if ($this->{$this->modelClass}->save($this->data)) {
				$this->Session->setFlash($this->{$this->modelClass}->alias . ' updated');
				$this->redirect($this->Session->read('referer'), null, true);
			} else {
				$this->Session->setFlash('Please correct the errors below.');
			}
		} else {
			$this->data = $this->{$this->modelClass}->read(null, $id);
		}
		$this->_setSelects();
	}
	
	function admin_view ($id) {
		$this->data = $this->{$this->modelClass}->read(null, $id);
		if(!$this->data) {
			$this->Session->setFlash('Invalid ' . $this->modelClass);
			return $this->redirect($this->Session->read('referer'), null, true);
		}
	}

	function admin_index( $extra = array() ) {
		$filter = $this->_parseFilter();
		$this->{$this->modelClass}->recursive = 1;
		$conditions = am($filter, $this->params['named']);
		$conditions = am($conditions, $extra);
		unset($conditions['limit']);
		unset($conditions['show']);
		unset($conditions['sort']);
		unset($conditions['page']);
		unset($conditions['direction']);
		unset($conditions['step']);
		foreach ($conditions as $key => $condition) {
			if (!strpos($key, '.')) {
				unset($conditions[$key]);
				$conditions[$this->modelClass . '.' . $key] =  $condition;
			}
		}
		$this->data = $this->paginate($conditions);
		$this->render('admin_index');
	}

	function _parseFilter() {
		$operators = array('equal' => '= ', 'notEqual' => '!= ', 'null' => 'NULL', 'greatherThan' => '> ', 'lessThan' => '< ', 'like' => 'LIKE ', 'between' => 'BETWEEN ');
		$this->set('filterOptions', $operators);

		$filter = $filterForm = array();
		if ($this->data) {
			$operator = false;
			foreach ($this->data as $alias => $fields) {
				if (isset($this->$alias)) {
					$inst = $this->$alias;
				} elseif(isset($inst->{$this->modelClass}->$alias)) {
					$inst = $inst->{$this->modelClass}->$alias;
				} else {
					$inst = ClassRegistry::init($alias);
				}
				$i = 0;
				foreach ($fields as $field => $value) {
					$i++;
					if ($i % 2) {
						$filterForm[$alias][$field] = $value;
						$operator = $operators[$value];
						if ($value == 'null') {
							$field = str_replace('_type', '', $field);
							$filter[$alias . '.' . $field] = null;
						}
					} elseif ($value !== null && $value !== '') {
						if (is_array($value)) {
							$value = $inst->deconstruct($field, $value);
							if ($value) {
								$filter[$alias . '.' . $field] = $operator . $value;
							}
						} else {
							$filter[$alias . '.' . $field] = $operator . $value;
						}
					}
				}
			}
			$this->Session->write($this->modelClass . '.filter', $filter);
			$this->Session->write($this->modelClass . '.filterForm', $this->data);
		} elseif ($this->Session->check($this->modelClass . '.filter')) {
			$filter = $this->Session->read($this->modelClass . '.filter');
		}
		return $filter;
	}

	function _setSelects() {
		// Populate select list vars
		foreach (array('hasOne', 'belongsTo', 'hasAndBelongsToMany') as $type) {
			foreach (array_keys($this->{$this->modelClass}->$type) as $model) {
				if (isset($this->{$this->modelClass}->$model->actsAs['Tree'])) {
					$items = $this->{$this->modelClass}->$model->generateTreeList();
				} else {
					if (is_array($this->{$this->modelClass}->$model->displayField)) {
						$order = implode($this->{$this->modelClass}->$model->displayField , ', ');
					} else {
						$order = $this->{$this->modelClass}->$model->alias . '.' . $this->{$this->modelClass}->$model->displayField;
					}
					$items = $this->{$this->modelClass}->$model->find('list', compact('order'));
				}
				$key = $this->{$this->modelClass}->{$type}[$model]['foreignKey'];
				$this->set(Inflector::variable(Inflector::pluralize(preg_replace('/_id$/', '', $key))), $items);
			}
		}
	}

	function _confirmAction ($reason = null) {
		$this->log($reason);
		if ($reason == 'post') {
			$this->Security->__generateToken($this);
			$this->set('referer', $this->referer(Router::url(array('action' => 'index'))));
			$this->set('modelClass', $this->modelClass);
			$this->data = array($this->modelClass => array('id' => $this->params['pass'][0]));
			$this->viewPath = '_generic';
			$this->render('confirm_action');
			die;
		}
		if ($reason == 'auth' && $this->data) {
			$this->Session->setFlash('Ooops! El formulario ya era procesado.');
			$this->redirect($this->here, null, true);
		}
		$code = 404;
		if ($reason == 'login') {
			$code = 401;
		} else {
			$this->Session->setFlash('Permiso desnagado');
		}
		$this->redirect(null, $code, true);
	}
}
?>
