<?php
/**
 * SplitFixture
 *
 */
class SplitFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'guid' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tx_guid' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'account_guid' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'memo' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'action' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reconcile_state' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reconcile_date' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'value_num' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'value_denom' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'quantity_num' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'quantity_denom' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'lot_guid' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'guid', 'unique' => 1, 'length' => array('guid' => '50')),
			'splits_tx_guid_index' => array('column' => 'tx_guid', 'unique' => 0, 'length' => array('tx_guid' => '32')),
			'splits_account_guid_index' => array('column' => 'account_guid', 'unique' => 0, 'length' => array('account_guid' => '32'))
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'guid' => 'Lorem ipsum dolor sit amet',
			'tx_guid' => 'Lorem ipsum dolor sit amet',
			'account_guid' => 'Lorem ipsum dolor sit amet',
			'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'action' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'reconcile_state' => 'Lorem ipsum dolor sit amet',
			'reconcile_date' => 'Lorem ipsum dolor sit amet',
			'value_num' => '',
			'value_denom' => '',
			'quantity_num' => '',
			'quantity_denom' => '',
			'lot_guid' => 'Lorem ipsum dolor sit amet'
		),
	);

}
