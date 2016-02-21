<?php

use Cake\Core\Configure;

$config['HybridAuth'] = [
'providers' => [
	'OpenID' => [
		'enabled' => true
	]
],
'debug_mode' => Configure::read('debug'),
'debug_file' => LOGS . 'hybridauth.log',
];
