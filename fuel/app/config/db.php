<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(

	Fuel::DEVELOPMENT => array(

		'type'	=>	'mysql',
		'connection'	=> array(

			'hostname'	=>	'localhost',
			'database'	=>	'mynote',
			'username'	=>	'root',
			'password'	=>	'binh4830',
			'persistent'	=>	false,

		),

		'table_prefix'	=>	'mynote',
		'charset'	=>	'utf8',
		'caching'	=>	false,
		'profilling'	=>	false,

	),

);
