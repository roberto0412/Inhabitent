<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<!-- /* taxonomie query */ -->

<section class='taxo_titles'>
   <h1 class='Shop-title'>SHOP STUFF</h1>
<?php
$taxonomies = get_terms( array(
   'taxonomy' => 'product_type',
   'hide_empty' => false,
) );
if ( ! empty( $taxonomies ) ) : ?>
    <ul class='product_list'>
        <?php
        foreach ( $taxonomies as $taxonomy ) {
         //   echo print_r( $taxonomy );

         echo '<li><a href="'.get_term_link($taxonomy->slug, 'product_type').'">'.$taxonomy->name.'</a></li>';

            // echo '<li>' . $taxonomy->name . '</li>'; /* wrap this whit an a tag with the link use another wp function */
        }
        ?>
    </ul>
    <?php endif; ?>
 </section>



<div class='grid_wrapper'>
   
   <?php $args = array(
   'order' => 'ASC',
   'posts_per_page' => 16,
   'post_type' => array('Product'),
  );
   $query = new WP_Query( $args ); ?>

    <?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

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


<?php get_footer(); ?>