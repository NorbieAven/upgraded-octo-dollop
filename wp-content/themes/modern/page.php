<?php
/**
 * Page template
 *
 * @package    Modern
 * @copyright  2015 WebMan - Oliver Juhas
 * @version    1.0
 */



get_header();

	wmhook_entry_before();

	if ( have_posts() ) {

		the_post();

		get_template_part( 'content', 'page' );

		wp_reset_query();

	}

	wmhook_entry_after();

get_footer();

?>
