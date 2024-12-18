/**
 * Helps you validates the form
 * 
 * @param object args
 * @return object
 */
var formHelper = ( function() {
	/**
	 * Constructor function
	 * 
	 * @param object args
	 * @return object
	 */
	var formHelper = function( args ) {
		// give us our self
		var self = this;

		// form prefix
		self.formClassPrefix = 'formClassPrefix' in args ? args.formClassPrefix + '-' : '';

		// form input class identifier
		self.inputClassIdentifier = 'inputClassIdentifier' in args ? args.inputClassIdentifier : 'fh';
		self.inputClassIdentifier = self.formClassPrefix + self.inputClassIdentifier;
	
		// form input class error identifier
		self.inputErrorClassIdentifier = 'inputErrorClassIdentifier' in args ? args.inputErrorClassIdentifier : 'fhe';
		self.inputErrorClassIdentifier = self.formClassPrefix + self.inputErrorClassIdentifier;
	
		// error class
		self.inputErrorClass = 'inputErrorClass' in args ? args.inputErrorClass : 'input-default-error';
	
		// min password length
		self.minPasswordLength = 'minPasswordLength' in args ? args.minPasswordLength : 8;
	
		// form elements
		self.formElements = {};

		// get form input elements
		var inputElements = document.getElementsByClassName( self.inputClassIdentifier );

		for ( var i = 0; i < inputElements.length; i++ ) { // loop over form input elements
			var elementObject = { // create object for from  element
				column: inputElements[i].getAttribute( 'data-column' ),
				check: inputElements[i].getAttribute( 'data-check' ) || false,
				matches: inputElements[i].getAttribute( 'data-matches' ) || false,
				className: self.inputClassIdentifier + Object.keys( self.formElements ).length
			};

			// add class name to the dom
			inputElements[i].classList.add( elementObject.className );

			// save object to form elements
			self.formElements[elementObject.column] = elementObject;
		}
	}

	/**
	 * Validate the form
	 * 
	 * @param string from
	 * @return boolean
	 */
	formHelper.prototype.validate = function( from ) {
		// give us our self
		var self = this;

		// log self
		console.log( self );
	}

	// return our object
	return formHelper;
} )();