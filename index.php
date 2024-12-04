<?php
	if ( 'rubberduckarmy.com' == $_SERVER['HTTP_HOST'] ) { // we are on our server
		if ( str_contains( $_SERVER['PHP_SELF'], '/dev/' ) ) { // dev server
			// require global includes and creds that should NOT BE IN the repo
			require_once __DIR__ . '/../../../../includes/rubberduckarmy_global_include_dev.php';
		} else {
			// require global includes and creds that should NOT BE IN the repo
			require_once __DIR__ . '/../../../includes/rubberduckarmy_global_include_prod.php';
		}
	} else { // localhost
		// require global includes and creds that should NOT BE IN the repo
		require_once __DIR__ . '/../../includes/rubberduckarmy_global_include.php';
	}

	if ( ENVIRONMENT == 'development' ) { // development env specific things
		// display all errors
		error_reporting( -1 );
		ini_set( 'display_errors', 1 );
	} else { // production env specific things
		// hide all errors
		error_reporting( 0 );
		ini_set( 'display_errors', 0 );
	}

	// require autoloader
	require_once 'core/Autoloader.php';

	$autoloaderParmas = array( // autoloader parmas
		'database' => $database,
		'session' => $session
	);

	// run the autoloader so our files get loaded
	$autoloader = new Autoloader( $autoloaderParmas );

	$routerParams = array( // params for rounter instantiation
		'default_controller' => 'Home',
		'default_method' => 'index'
	);

	// calculate route based on the query string
	$router = new Router( $routerParams );

	// load the calculated route
	$router->go( $autoloader );
?>