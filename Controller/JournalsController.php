<?php
App::uses('AppController', 'Controller');
/**
 * Accounts Controller
 *
 */
class JournalsController extends AppController {
    
    public $uses = array('Transaction');
    
    public $helpers = array('Html', 'Form');
    
    
    public $components = array('Paginator');
    
    public $paginate = array(   
        'Transaction' => array(
            'limit' => 50,
            'order' => array(
                'Transaction.post_date' => 'asc',
            ),
        ),
        'Split' => array(
            'order' => array(
                'Split.value_num' => 'asc'
            )
        )
    );

    function index()
    {
        App::uses('CakeNumber', 'Utility'); 
        CakeNumber::addFormat('BRL', array('before' => 'R$ ', 'thousands' => '.', 'decimals' => ','));
        
        //forces containable recursive level
        $this->Transaction->contain(array('Split' => array('Account')));

        //setup paginate
        $this->Paginator->settings = $this->paginate;
        $data = $this->Paginator->paginate('Transaction');
        
        $this->set('transactions', $data);
    }

}
