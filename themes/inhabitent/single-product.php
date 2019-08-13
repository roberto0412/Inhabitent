<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
        <div class='product_container'>
         <div class="product_pic">
         <img src="<?php echo CFS()->get( 'featured_image' ); ?>" />
         </div>
<div>
		 <?php while ( have_posts() ) : the_post(); ?>
		 <div class="product_price">
		 <?php echo CFS()->get( 'price' ); ?>
		  </div> 
		 <?php get_template_part( 'template-parts/content', 'product' ); ?>
		  </div>
		  
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


<?php get_footer(); ?>