<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow();
    $this->group_id = $this->Session->read('User.group_id');
    // For CakePHP 2.1 and up
}

public $group_id   = null;

public function beforeRender() {
	$this->set('group',$this->group_id);
	
}

public function initDB() {
    $group = $this->User->Group;
    // Allow admins to everything
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');

    // allow managers to posts and widgets
    $group->id = 2;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Products');
    $this->Acl->allow($group, 'controllers/Merchants');

    // allow users to only add and edit on posts and widgets
    $group->id = 3;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Products/admin_view');
    $this->Acl->allow($group, 'controllers/Merchants/admin_view');

    // allow basic users to log out
    $this->Acl->allow($group,'controllers/Users/logout');

    // we add an exit to avoid an ugly "missing views" error message
    echo "all done";
    exit;
}

public function admin_login() {
    $this->login();
}

public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect('/admin/Users/index');
            //$this->redirect('/Users/aindex');
        }
        $this->Session->setFlash(__('Username not valid'),'flash_message', array('type' => 'danger'));
    }
}

public function logout() {
    $this->Session->setFlash(__('User logout successfully'),'flash_message', array('type' => 'success'));
	$this->Auth->logout();
	//$this->redirect();
}

public function admin_logout() {
    $this->logout();
    $this->redirect('/');
}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Usuari correctament guardat'),'flash_message', array('type' => 'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Usuari no guardat'),'flash_message', array('type' => 'danger'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Usuari correctament editat'),'flash_message', array('type' => 'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Usuari no guardat'),'flash_message', array('type' => 'danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('Usuari eliminat'),'flash_message', array('type' => 'success'));
		} else {
			$this->Session->setFlash(__('Usuari no eliminat'),'flash_message', array('type' => 'danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
