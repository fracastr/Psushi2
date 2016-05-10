<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=localhost;dbname=grupo314',
	'emulatePrepare' => true,
	//'username' => 'grupo314userdb',
	//'password' => '0303456lalalapwdb',
	'username'=>'root',
	'password'=>'',
	'charset' => 'utf8',

);