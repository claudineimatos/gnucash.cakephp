<?php
App::uses('AppModel', 'Model');
/**
 * Split Model
 *
 * @property Transaction $Transaction
 */
class Split extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'guid';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'guid';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Transaction' => array(
			'className' => 'Transaction',
			'foreignKey' => 'tx_guid',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Account' => array(
			'className' => 'Account',
			'foreignKey' => 'account_guid',
			'conditions' => '',
			'fields' => '',
			'order' => ''
                )
	);
}
