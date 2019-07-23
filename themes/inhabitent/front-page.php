<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="logo-tent">

		   <img src="<?php echo get_template_directory_uri(); ?>/project-04/images/logos/inhabitent-logo-full.svg" width="260px" height="260px" alt="" />
			</div>
			
			<h1>
				Shop Stuff
			</h1>
			<section class=" building_blocks">


		      <?php  $get_product= get_terms( 'product_type') ?>


		       <?php foreach ( $get_product as $square ) : setup_postdata( $square ); ?>
			    <div>
				<img class="termin" src=<?php echo get_template_directory_uri().'/project-04/images/product-type-icons/'.$square->slug.'.svg'?>> 

			  <p class= "inside-content">
				   <?php echo $square->description?>
			  </p>
			
            
			    <a class=" goto_link"  href="<?php echo  get_term_link( $square )?> ">

				
					<?php echo $square->name ?> Stuff 
			  </a>
			  
			
          </div>
            <?php endforeach; wp_reset_postdata(); ?>

			</section>




			<section class="journal-stuff-container">
        <h1>INHABITENT JOURNAL</h1>
        <div class="journal-container">
          
            <?php 
            $args = array(
                'post_type'         => 'post', 
                'order'             => 'DSC', 
                'offset'            => '0',
                'posts_per_page'     => 3);
            $product_posts = get_posts($args);
            ?>

            <?php foreach ( $product_posts as $post) : setup_postdata( $post);?>
            <div class="journal-cat">
                  <div class="journal-thumb">
                        <?php the_post_thumbnail();?>
                  </div>

                    <div class="journal-date">
                        <span><?php the_date()?> / <?php echo get_comments_number()?> comments</span>
            
                         <div class="journal-link">
                                <p><a class="green-color-title" href="<?php the_permalink();?>"><?php the_title()?></a></p>
                        </div>
           
                        <p><a class="journal_buttn" href="<?php the_permalink();?>">Read Entry</a></p>
                    </div>
            
                 </div>  
              <?php endforeach; wp_reset_postdata();?>
    
             </div>


</section>




		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
