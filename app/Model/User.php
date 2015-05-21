<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

	var $validate = array(
	        'Length' => array(
	                'numeric' => array(
	                        'rule' => array('numeric'),
	                        'allowEmpty' => false,
                                'message' => 'You have not entered numeric length',
	                )
	        ),
                'Breadth' => array(
                        'numeric' => array(
	                        'rule' => array('numeric'),
	                        'allowEmpty' => false,
                                'message' => 'You have not entered numeric length',
	                )
	        ),
                'Diameter' => array(
	                'numeric' => array(
	                        'rule' => array('numeric'),
	                        'allowEmpty' => false,
                                'message' => 'You have not entered numeric length',
	                )
	        ),
	         'Side' => array(
	                'numeric' => array(
	                        'rule' => array('numeric'),
	                        'allowEmpty' => false,
                                'message' => 'You have not entered numeric length',
	                )
	        ),
	         'a Axis' => array(
	                'numeric' => array(
	                        'rule' => array('numeric'),
	                        'allowEmpty' => false,
                                'message' => 'You have not entered numeric length',
	                )
	        ),
	         'b Axis' => array(
	                'numeric' => array(
	                        'rule' => array('numeric'),
	                        'allowEmpty' => false,
                                'message' => 'You have not entered numeric length',
	                )
	        )
	);

}
