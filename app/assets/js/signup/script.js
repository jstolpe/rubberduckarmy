document.addEventListener( 'DOMContentLoaded', function() { // document ready
	signUpForm = new formHelper( { // create new form helper for sign up
		formClassPrefix: 'signup'
	} );

	// get sign up button
	var signUpButtonElement = document.getElementsByClassName( 'button-signup' )[0];

	signUpButtonElement.addEventListener( 'click', function( event ) { // on click for button
		serverSignUp( signUpForm );
	} );
} );

/**
 * Server side sign up
 * 
 * @param object signUpForm
 * @return void
 */
function serverSignUp( signUpForm ) {
	if ( signUpForm.validate( 'frontend' ) ) { // front end passed validation
		// send data to server
	}
}