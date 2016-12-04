<?php get_header(); ?>



<section class='default-page-header'>
  <h2 class='text-center'>
    <?php single_cat_title();?>
  </h2>
</section>

<?php get_template_part( 'topics', 'bar' ); ?>




<section>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='row row-centered'>
					<!-- Start the Loop. -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'post', 'thumbnail' ); ?>
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