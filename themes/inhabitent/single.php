<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="flex-two-col">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			
			<?php $loop=get_the_category($post->id)  ?>
			<?php foreach ( $loop as $looop ) : ?>
			
			<div class="contai">
  <div class="tra"> <?php echo ($looop->name) ?></div>
  
<?php endforeach;  ?>
<?php $trii=get_the_tags($post->tag)  ?>
			<?php foreach ( $trii as $triii ) : ?>
			
  <div class="traa"> <?php echo ($triii->name) ?></div>
   <?php endforeach;  ?>
   
</div>
<div class="social_buttons">

			  <button> <i class="fab fa-facebook-f"><span>Like </span></i></button>



			  <button> <i class="fab fa-twitter"> <span>Tweet</span></i></button>


			  
			  <button><i class="fab fa-pinterest"><span> Pin</span></i></button>
		  </div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
