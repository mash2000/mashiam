<?php

/**
 * Customizer Separator Control settings for this theme.
 *
 * @package WordPress
 * @subpackage Kinky
 * @since Kinky Kinky 1.0
 */

if (class_exists('WP_Customize_Control')) {

	if (!class_exists('TwentyTwenty_Separator_Control')) {
		/**
		 * Separator Control.
		 *
		 * @since Kinky Kinky 1.0
		 */
		class TwentyTwenty_Separator_Control extends WP_Customize_Control
		{
			/**
			 * Render the hr.
			 *
			 * @since Kinky Kinky 1.0
			 */
			public function render_content()
			{
				echo '<hr/>';
			}
		}
	}
}
