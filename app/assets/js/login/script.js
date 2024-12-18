document.addEventListener( 'DOMContentLoaded', function() { // document ready
	logInForm = new formHelper( { // create new form helper for login
		formClassPrefix: 'login'
	} );

	// get log up button
	var logInButtonElement = document.getElementsByClassName( 'button-login' )[0];

	logInButtonElement.addEventListener( 'click', function( event ) { // on click for button
		serverLogIn( logInForm );
	} );
} );

/**
 * Server log in
 * 
 * @param object logInForm
 * @return void
 */
function serverLogIn( logInForm ) {
	if ( logInForm.validate( 'frontend' ) ) { // front end passed validation
		// send data to server
	}
}