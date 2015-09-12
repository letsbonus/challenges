<?php
App::uses('AppController', 'Controller');

App::import('Vendor', 'UploadHandler', array('file' => 'file.upload/UploadHandler.php'));
$options = array(
            'upload_dir' => '/files',        
            'accept_file_types' => '/\.(gif|jpe?g|png|doc|docx)$/i'                     
           );

/**
 * Downloads Controller
 *
 * @property Download $Download
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {
		$this->Auth->allow();
	}
	/**
	* admin_upload method
	*
	* @return void
	*/
	public function admin_upload() {
		if ($this->request->is('post')) {
			$files = $this->request->params['form']['fileinput'];
			if ($files['error'] == UPLOAD_ERR_OK) {
				$fp = fopen($files['tmp_name'], 'r');
				$this->loadModel('Merchant');
				$this->loadModel('Product');
				$row_0 = true;
				$errorsOnUpload = false;
				$products = 0;
				while ( !feof($fp) ) {
					$line = fgets($fp, 2048);
					// we skip the first line
					if ($row_0) {
						$row_0 = false;
						continue;
					}
					$data = str_getcsv(utf8_decode($line), "\t");
					if (!empty($data[6])) {
						$this->Merchant->recursive = -1;
						$nameMerchant = utf8_encode($data[6]);
						$aMerchant    = $this->Merchant->find('first', array('conditions' => array('name' => $nameMerchant)));
						if (!empty($aMerchant)) {
							$idMerchant = $aMerchant['Merchant']['id'];
						} else {
							$this->Merchant->create();
							$newMerchant = array();
							$newMerchant['Merchant']['name']    = utf8_encode($data[6]);
							$newMerchant['Merchant']['address'] = utf8_encode($data[5]);
							if ($this->Merchant->save($newMerchant)) {
								$idMerchant = $this->Merchant->getLastInsertID();
							} else {
								echo $this->Merchant->validationErrors;
							}
						}
						$addProduct = array();
						$this->Product->recursive = -1;
						$data[0] = utf8_encode($data[0]);
						$data[1] = utf8_encode($data[1]);
						$aProduct = $this->Product->find('first',array('conditions' => array('title' => $data[0])));
						if (!empty($aProduct)) {
							$addProduct['Product']['id'] = $aProduct['Product']['id'];
						} else {
							$this->Product->create();
						}

						$time1 = new DateTime($data[3]);
						$time2 = new DateTime($data[4]);
						//$sTime1 = date_format(date($time1[0].'-'.$time1[1].'-'.substr($time1[2],0,2).' '.substr($time1[2],3,strlen($time1[2])-9)),'Y-m-d H:i:s');
						//$sTime2 = date_format(date($time2[0].'-'.$time2[1].'-'.substr($time2[2],0,2).' '.substr($time2[2],3,strlen($time2[2])-9)),'Y-m-d H:i:s');
						
						$addProduct['Product']['title']       = $data[0];
						$addProduct['Product']['description'] = $data[1];
						$addProduct['Product']['price']       = $data[2];
						$addProduct['Product']['init_date']   = $time1->format('Y-m-d H:i:s');
						$addProduct['Product']['expiry_date'] = $time2->format('Y-m-d H:i:s');
						$addProduct['Product']['merchant_id'] = $idMerchant;
						$addProduct['Product']['status']      = 1;
						
						if (!$this->Product->save($addProduct)) {
							print_r($this->Product->validationErrors);
							$errorsOnUpload = true;
						} else {
							$products++;
						}
						// We look for the merchant in DB by name
					}
				}
				if (!$errorsOnUpload) {
					$this->Session->setFlash(__('File uploaded successfully. %s products added/edited', array($products)),'flash_message', array('type' => 'success'));
				} else {
					$this->Session->setFlash(__('Error uploading file'),'flash_message', array('type' => 'danger'));
				}
			}
		}
	}

	/**
	 * admin_list method.  segun el tipo de usuario que sea muestra un menu u otro
	 *
	 * @return void
	 */
	public function admin_list() {
		$products = $this->Product->find('all');
		//$products = Hash::extract($products,'{n}.Product');
		$datesString = array();
		$months = $this->_getMonths();

		foreach($products as $product) {
			$aMonth = explode('-',$product['Product']['init_date']);
			$selectedMonth = $months[$aMonth[1]];
			$datesString[$selectedMonth][] = $product['Product'];
		}
		$this->set('products', $datesString);
	}

	private function _getMonths() {
		$months['1'] = 'January';
		$months['2'] = 'February';
		$months['3'] = 'March';
		$months['4'] = 'April';
		$months['5'] = 'May';
		$months['6'] = 'June';
		$months['7'] = 'July';
		$months['8'] = 'August';
		$months['9'] = 'September';
		$months['10'] = 'October';
		$months['11'] = 'November';
		$months['12'] = 'December';
		return $months;
	}

}
