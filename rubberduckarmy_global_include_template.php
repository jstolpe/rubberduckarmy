<?php
	/**
	 * THIS FILE SHOULD BE MOVED OUTSIDE OF THE
	 * REPOSITORY AND REQUIRED IN THE INDEX FILE.
	 * 
	 * CREDS SHOULD NEVER BE IN THE GIT REPO!!
	 */

	// environment type development or production
	define( 'ENVIRONMENT', 'development' );

	// dir name
	define( 'SITE_FOLDER_NAME', 'rubberduckarmy' );

	// site display name
	define( 'SITE_DISPLAY_NAME', 'Rubber Duck Army' );

	// get protocol
	define( 'PROTOCOL', isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://' );

	// host path
	define( 'PATH_TO_HOST', PROTOCOL . $_SERVER['HTTP_HOST'] . '/' );

	// url path to root
	define( 'BASE_URL', PATH_TO_HOST . SITE_FOLDER_NAME . '/' );

	// url path to asssets like js/css/files
	define( 'BASE_URL_ASSETS', BASE_URL . 'app/assets/' );
	define( 'BASE_URL_ASSETS_IMAGES', BASE_URL_ASSETS . 'images/' );

	// files outside repo
	define( 'EXT_PATH_TO_FILES', PATH_TO_HOST . 'files/' . SITE_FOLDER_NAME . '/' );
	define( 'EXT_PATH_TO_IMAGES', EXT_PATH_TO_FILES . 'images/' );

	define( 'EXT_REL_PATH_TO_FILES', '../files/' . SITE_FOLDER_NAME . '/' );
	define( 'EXT_REL_PATH_TO_IMAGES', EXT_REL_PATH_TO_FILES . 'images/' );

	// boolean for using database or not
	define( 'USE_DATABASE', true );

	// boolean for using session or not
	define( 'USE_SESSION', true );

	// href base url
	define( 'HREF_BASE_URL', BASE_URL );

	$database = array( // database info
		'load' => USE_DATABASE, // should we load the database
		'creds' => array( // database creds
			'hostname' => 'localhost', // host name for database
			'username' => 'root', // db username
			'password' => '', // db password
			'database' => 'rubberduckarmy' // db name
		)
	);

	$session = array( // session info
		'load' => USE_SESSION, // load session
		'sess_name' => SITE_FOLDER_NAME, // name of the session
		'sess_id_time_to_regen' => 300, // number of seconds before a new session id should be regenerated
		'secs_till_expire' => 86400 * 60, // number of seconds user needs to be inactive expiration
		'database_table_name' => 'sessions' // table name in the database
	);