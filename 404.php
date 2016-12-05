<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package boiler
 */

get_header(); ?>


<?php wp_reset_postdata(); ?>


<section class='default-page-header'>
  <h2 class='text-center'>
    Page not found
  </h2>
</section>


	<section>
	  <div class='container'>
		  <div class="row">
		    <div class='col-md-12 text-center'>
		    	<a href="<?php bloginfo('url')?>" class="btn btn-primary btn-primary">
		      		Take me home
		      	</a>
		    </div>
		  </div>
	  </div>
	</section>



<?php get_footer(); ?>