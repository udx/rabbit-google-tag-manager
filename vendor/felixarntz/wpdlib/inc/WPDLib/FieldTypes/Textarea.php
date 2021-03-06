<?php
/**
 * WPDLib\FieldTypes\Textarea class
 *
 * @package WPDLib
 * @subpackage FieldTypes
 * @author Felix Arntz <felix-arntz@leaves-and-love.net>
 * @since 0.5.0
 */

namespace WPDLib\FieldTypes;

use WPDLib\FieldTypes\Manager as FieldManager;

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

if ( ! class_exists( 'WPDLib\FieldTypes\Textarea' ) ) {
	/**
	 * Class for a textarea field.
	 *
	 * The class is also used as base class for WYSIWYG fields.
	 *
	 * @since 0.5.0
	 */
	class Textarea extends Base {

		/**
		 * Class constructor.
		 *
		 * For an overview of the supported arguments, please read the Field Types Reference.
		 *
		 * @since 0.5.0
		 * @param string $type the field type
		 * @param array $args array of field type arguments
		 */
		public function __construct( $type, $args ) {
			$args = wp_parse_args( $args, array(
				'rows' => 5,
			) );
			parent::__construct( $type, $args );
		}

		/**
		 * Displays the input control for the field.
		 *
		 * @since 0.5.0
		 * @param string $val the current value of the field
		 * @param bool $echo whether to echo the output (default is true)
		 * @return string the HTML output of the field control
		 */
		public function display( $val, $echo = true ) {
			$args = $this->args;

			$args = array_merge( $args, $this->data_atts );

			$output = '<textarea' . FieldManager::make_html_attributes( $args, false, false ) . '>';
			$output .= esc_html( $val );
			$output .= '</textarea>';

			if ( $echo ) {
				echo $output;
			}

			return $output;
		}
	}

}
