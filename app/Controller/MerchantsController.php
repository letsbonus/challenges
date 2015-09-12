<?php
App::uses('AppController', 'Controller');
/**
 * Merchants Controller
 *
 * @property Merchant $Merchant
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MerchantsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function beforeFilter() {
		$this->Auth->allow();
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Merchant->recursive = 0;
		$this->set('merchants', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Merchant->exists($id)) {
			throw new NotFoundException(__('Invalid merchant'));
		}
		$options = array('conditions' => array('Merchant.' . $this->Merchant->primaryKey => $id));
		$this->set('merchant', $this->Merchant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Merchant->create();
			if ($this->Merchant->save($this->request->data)) {
				$this->Session->setFlash(__('The merchant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The merchant could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Merchant->exists($id)) {
			throw new NotFoundException(__('Invalid merchant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Merchant->save($this->request->data)) {
				$this->Session->setFlash(__('The merchant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The merchant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Merchant.' . $this->Merchant->primaryKey => $id));
			$this->request->data = $this->Merchant->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Merchant->id = $id;
		if (!$this->Merchant->exists()) {
			throw new NotFoundException(__('Invalid merchant'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Merchant->delete()) {
			$this->Session->setFlash(__('The merchant has been deleted.'));
		} else {
			$this->Session->setFlash(__('The merchant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_list method
 *
 * @return void
 */
	public function admin_list() {
		$this->loadModel('Product');
		$products = $this->Product->find('all');
		//$products = Hash::extract($products,'{n}.Product');
		$merchantIds = array();
		foreach($products as $product) {
			$merchants[$product['Merchant']['name']][] = $product['Product'];
		}
		$this->set('products', $this->Paginator->paginate());
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Merchant->recursive = 0;
		$this->set('merchants', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Merchant->exists($id)) {
			throw new NotFoundException(__('Invalid merchant'));
		}
		$options = array('conditions' => array('Merchant.' . $this->Merchant->primaryKey => $id));
		$this->set('merchant', $this->Merchant->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Merchant->create();
			if ($this->Merchant->save($this->request->data)) {
				$this->Session->setFlash(__('The merchant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The merchant could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Merchant->exists($id)) {
			throw new NotFoundException(__('Invalid merchant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Merchant->save($this->request->data)) {
				$this->Session->setFlash(__('The merchant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The merchant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Merchant.' . $this->Merchant->primaryKey => $id));
			$this->request->data = $this->Merchant->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Merchant->id = $id;
		if (!$this->Merchant->exists()) {
			throw new NotFoundException(__('Invalid merchant'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Merchant->delete()) {
			$this->Session->setFlash(__('The merchant has been deleted.'));
		} else {
			$this->Session->setFlash(__('The merchant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
