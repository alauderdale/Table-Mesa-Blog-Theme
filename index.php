<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package boiler
 */

get_header(); ?>


<section>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='row'>
					<!-- Start the Loop. -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	          <div class='col-md-4 col-sm-6'>
	            <a class='post-thumbnail' href=' <?php the_permalink(); ?>'>
	              <div class='post-thumbnail-body'>
	                <h3>
	                  <?php the_title(); ?>
	                </h3>
	                <p>
	                  Est nulla perspiciatis perferendis inventore molestiae voluptas necessitatibus debitis natus enim soluta dolorum. Repellendus aliquid illo ea consequatur nam voluptas atque nulla animi. Quo vitae saepe consequatur vero minima sed reiciendis. Assumenda accusamus iure omnis facere quidem aut eligendi ab cupiditate eius sapiente ex libero. Porro aut doloribus iste ea dolores
	                </p>
	              </div>
	              <div class='post-thumbnail-footer'>
	                <h5 class='pull-left'>
	                  Jan 1 2016
	                </h5>
	                <h5 class='text-right pull-right'>
	                  Continued CE
	                </h5>
	              </div>
	            </a>
	          </div>
						 	<!-- Stop The Loop (but note the "else:" - see next line). -->

						 <?php endwhile; else : ?>
							<div class='col-md-12'>
							 	<!-- The very first "if" tested to see if there were any Posts to -->
							 	<!-- display.  This "else" part tells what do if there weren't any. -->
							 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						 </div>
					 	<!-- REALLY stop The Loop. -->
					<?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>




 





<?php get_footer(); ?>