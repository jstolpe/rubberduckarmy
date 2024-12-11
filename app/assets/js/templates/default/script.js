var rubberDuckArmy = {
	initialize : function() {
		// get self
		var self = this;

		// initialize user menu
		self.setupUserMenu();
	},

	setupUserMenu : function() {
		// get self
		var self = this;

		// get user menu element with js
		var userMenuIconElement = document.getElementsByClassName( 'user-menu-icon' )[0];

		userMenuIconElement.addEventListener( 'click', function( event ) { // on click for menu icon
			// stop bubbles
			event.stopPropagation();

			// menu toggle
			self.userMenuToggle();
		} ); 

		window.addEventListener( 'click', function( event ) { // on click for menu icon
			// stop bubbles
			event.stopPropagation();

			// get user menu container
			var userContainerElement = document.getElementsByClassName( 'user-menu-container' )[0];
		
			if ( !userContainerElement.classList.contains( 'hide' ) ) { // menu visible
				if ( userContainerElement.offsetParent && !userContainerElement.contains( event.target ) ) {
					// menu toggle
					self.userMenuToggle();
				}
			}
		} );
	},

	userMenuToggle : function() {
		// get user menu container
		var userContainerElement = document.getElementsByClassName( 'user-menu-container' )[0];
		
		// toggle container
		userContainerElement.classList.toggle( 'hide' );

		if ( userContainerElement.offsetParent ) { // menu is visible
			// get overlay
			document.getElementsByClassName( 'global-overlay-takover' )[0].style.display = 'block';

			// get menu icon
			document.getElementsByClassName( 'user-menu-icon' )[0].style.color = '#fff';
		} else { // menu is not visible
			// get overlay
			document.getElementsByClassName( 'global-overlay-takover' )[0].style.display = 'none';

			// get menu icon
			document.getElementsByClassName( 'user-menu-icon' )[0].style.color = '';
		}
	}
}