<?php
	/**
	 * Home page.
	 *
	 * Handle functionality for home page.
	 *
	 * @package		rubberduckarmy/app
	 * @subpackage	controllers
	 * @author		Justin Stolpe
	 * @link		https://github.com/jstolpe/rubberduckarmy
	 * @version     1.0.0
	 */
	class Home extends Controller {
		/**
		 * Index function.
		 *
		 * Load the home view.
		 *
		 * @return void
		 */
		public function index() {
			// controller name
			$data['controller'] = strtolower( __CLASS__ );

			// html page title
			$data['html_title'] = SITE_DISPLAY_NAME;
			
			// html head
			$data['html_head'] = $this->Model->getViewHtml( $data['controller'] . '/html_head', $data );

			// html body
			$data['html_body'] = $this->Model->getViewHtml( $data['controller'] . '/html_body', $data );

			// load view
			$this->loadView( 'templates/default/html', $data );
		}
	}
?>