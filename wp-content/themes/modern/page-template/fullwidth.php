<?php
/*
TEMPLATE NAME: FULL WIDTH PAGE
*/



get_header();

	wmhook_entry_before();?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


		</main><!-- #main -->
	</div><!-- #primary -->


	<?php wmhook_entry_after();

get_footer();

?>
<style>
	
</style>