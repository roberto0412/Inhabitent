<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="flex-two-col">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
