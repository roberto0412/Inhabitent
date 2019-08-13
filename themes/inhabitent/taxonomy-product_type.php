<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
        <h1 class="page-title"> <?php echo  single_term_title()?></h1>
				<?php

					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

		
	<div class='grid_wrapper'>
		<?php            ?>
		
    <?php while ( have_posts() ) : the_post(); ?>

    <div class='grid_container'>
        <div class='post_grid'>
           <div class='product_pic'><a href="<?php echo get_permalink()?>"><img src="<?php echo CFS()->get( 'featured_image' ); ?>" /></a> </div>
           <div class='Product-type'>
             <h1 class='productt_title'><?php the_title(); ?></h1>
             <span class='product_price'><?php echo CFS()->get( 'price' ); ?></span>
            </div>
       </div>
   </div>

   <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
   <?php else : ?>
       <h2>Nothing found!</h2>
    <?php endif; ?>

</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
