<?php
	/**
	 * Rubber Duck Army model.
	 *
	 * Get data for the rubberduckarmy page.
	 *
	 * @package		rubberduckarmy/app
	 * @subpackage	models
	 * @author		Justin Stolpe
	 * @link		https://github.com/jstolpe/rubberduckarmy
	 * @version     1.0.0
	 */
	class RubberDuckArmyModel extends Model {
		/**
		 * Class constructor.
		 *
		 * Do things upon construction of the model.
		 *
		 * @param array $autoloader Instance of the autoloader class.
		 * @return void
		 */
		public function __construct( $autoloader ) {
			parent::__construct( $autoloader );
		}
	}
?>