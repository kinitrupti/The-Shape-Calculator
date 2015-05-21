<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	/**
	 * use beforeRender to send session parameters to the layout view
	 */
	  
	public function beforeRender() {
		parent::beforeRender();
		$params = $this->Session->read('form.params');
		$this->set('params', $params);
	}

	/**
	 * delete session values when going back to index
	 * you may want to keep the session alive instead
	 */
	public function sc_index() {
		$this->Session->delete('form');
	}

	/**
	 * this method is executed before starting the form and retrieves one important parameter:
	 * the form steps number
	 * you can hardcode it, but in this example we are getting it by counting the number of files that start with sc_step_
	 */
	public function sc_setup() {
		App::uses('Folder', 'Utility');
		$usersViewFolder = new Folder(APP.'View'.DS.'Users');
		$steps = count($usersViewFolder->find('sc_step_.*\.ctp'));
		$this->Session->write('form.params.steps', $steps);
		$this->Session->write('form.params.maxProgress', 0);
		$this->redirect(array('action' => 'sc_step', 1));
	}

	/**
	 * this is the core step handling method
	 * it gets passed the desired step number, performs some checks to prevent smart users skipping steps
	 * checks fields validation, and when succeding, it saves the array in a session, merging with previous results
	 * if we are at last step, data is saved
	 * when no form data is submitted (not a POST request) it sets this->request->data to the values stored in session
	 */
	public function sc_step($stepNumber) {

		/**
		 * check if a view file for this step exists, otherwise redirect to index
		 */
		if (!file_exists(APP.'View'.DS.'Users'.DS.'sc_step_'.$stepNumber.'.ctp')) {
			$this->redirect('/users/sc_index');
		}

		/**
		 * determines the max allowed step (the last completed + 1)
		 * if choosen step is not allowed (URL manually changed) the user gets redirected
		 * otherwise we store the current step value in the session
		 */
		

		/**
		 * check if some data has been submitted via POST
		 * if not, sets the current data to the session data, to automatically populate previously saved fields
		 */
		if ($this->request->is('post')) {

			/**
			 * set passed data to the model, so we can validate against it without saving
			 */
			$this->User->set($this->request->data);

			/**
			 * if data validates we merge previous session data with submitted data, using CakePHP powerful Hash class (previously called Set)
			 */
			if ($this->User->validates()) {
				$prevSessionData = $this->Session->read('form.data');
				$currentSessionData = Hash::merge( (array) $prevSessionData, $this->request->data);

				/**
				 * if this is not the last step we replace session data with the new merged array
				 * update the max progress value and redirect to the next step
				 */
				 
				if ($stepNumber == 0 ) {
				
				if ($_POST['data']['User']['Select the shape']=='1')
				{
				        $this->Session->write('form.data', $currentSessionData);
					$this->Session->write('form.params.maxProgress', $stepNumber);
					$this->redirect(array('action' => 'sc_step/1'));
					
				}
				else if($_POST['data']['User']['Select the shape']=='2')
				{
				        $this->Session->write('form.data', $currentSessionData);
					$this->Session->write('form.params.maxProgress', $stepNumber);
					$this->redirect(array('action' => 'sc_step/2'));
				}
				elseif($_POST['data']['User']['Select the shape']=='3')
				{
				        $this->Session->write('form.data', $currentSessionData);
					$this->Session->write('form.params.maxProgress', $stepNumber);
					$this->redirect(array('action' => 'sc_step/3'));
				}
				elseif($_POST['data']['User']['Select the shape']=='4')
				{
				        $this->Session->write('form.data', $currentSessionData);
					$this->Session->write('form.params.maxProgress', $stepNumber);
					$this->redirect(array('action' => 'sc_step/4'));
				}
				}
				
			}
			if ($stepNumber == '1'){
			        $length = $_POST['data']['User']['Length'];
			        $breadth = $_POST['data']['User']['Breadth'];
			        $area = $length * $breadth;
//$this->redirect('/users/sc_step/5/'.$stepNumber.'/'.$_POST['data']['User']['Length'].'/'.$_POST['data']['User']['Breadth']);
                                $this->redirect('/users/sc_step/5/?arear='.$area);
			} elseif ($stepNumber == '2'){
	        		$radius = $_POST['data']['User']['Diameter']/2;
	        		$area = 3.14*$radius*$radius;
//$this->redirect('/users/sc_step/5/'.$stepNumber.'/'.$_POST['data']['User']['Diameter']);
                                $this->redirect('/users/sc_step/5/?areac='.$area);
			} elseif ($stepNumber == '3'){
			        $side = $_POST['data']['User']['Side'];
			        $area = $side * $side;
//$this->redirect('/users/sc_step/5/'.$stepNumber.'/'.$_POST['data']['User']['Side']);
                                $this->redirect('/users/sc_step/5/?areas='.$area);
			}elseif ($stepNumber =='4') {
			        $aaxis = $_POST['data']['User']['a Axis'];
			        $baxis = $_POST['data']['User']['b Axis'];
			        $area = 3.14*$aaxis*$baxis;
//$this->redirect('/users/sc_step/5/'.$stepNumber.'/'.$_POST['data']['User']['a Axis'].'/'.$_POST['data']['User']['b Axis']);
                                $this->redirect('/users/sc_step/5/?areae='.$area);
                        }
		} else {
			$this->request->data = $this->Session->read('form.data');
		}

		/**
		 * here we load the proper view file, depending on the stepNumber variable passed via GET
		 */
		$this->render('sc_step_'.$stepNumber);
	}
	
	public function sc_step_5() {
	$this->User->set($this->request->data);
		$this->redirect('/users/sc_step/5','2');
	    }
/**
 * index method
 *
 * @return void
 */
	/*public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}*/

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	/*public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}*/

/**
 * add method
 *
 * @return void
 */
	/*public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}*/

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	/*public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}*/

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	/*public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}*/
}
