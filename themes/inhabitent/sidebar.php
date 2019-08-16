<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">

<div class="wid_container">
	
	<h1>

		Contact Info
	</h1>
	<div class="wid_text">
    <p >
	   <i class="fas fa-phone"></i>
	    <span>
		<a href="tel:7784567891">778-456-7891</a>
       </span>
   </p>
   <p >
       <i class="fas fa-envelope"></i>
		   <span>
			   <a href="http://">info@inhabitent.com</a>
        </span>
  </p>
  <p >
        <i class="fas fa-map-pin"></i>
		   <span>
			  1490 W Broadway
			  <br>
			  Vancouver, BC V6H 1H5
            </span>
  </p>



  </div>
</div>





	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
