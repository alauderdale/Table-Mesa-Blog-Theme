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

<!-- hide the back button -->
<style type="text/css">

.main-nav-back{
	display:none!important;
}

</style>

<div class='featured-post-wrap'>
	<?php $the_query = new WP_Query(array('showposts' => '1', 'category_name' => 'featured' )); ?>
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	  <section class='homeSlide no-padding' id='featured-post-hero'>
      <div class='featured-post-container'>
        <div class='featured-post-content rellax' data-rellax-speed="-6">
          <div class='row'>
            <div class='col-sm-2'></div>
            <div class='col-sm-8'>
            	<div class="featured-post-content-container">
	              <h5 class='half-margin-bottom text-center'>
	                <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
	              </h5>
	              <h1 class='text-center medium-font-name no-margin-top half margin-bottom'>
	                <a href='<?php the_permalink(); ?>'>
	                  <?php the_title(); ?>
	                </a>
	              </h1>
	              <a class='btn btn-wire' href='<?php the_permalink(); ?>'>
	                Read now
	              </a>
            	</div>
            </div>
            <div class='col-sm-2'></div>
          </div>
        </div> <!-- end featured post content -->
		  	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		  	<?php $imageFull = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		  		<div class="featured-post-background-container rellax" >
		        <div class="featured-post-background" >
		        </div>
	      	</div>
	        <style type="text/css">
	        .loaded{
	        	background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php echo $imageFull[0]; ?>);
	        }
	        </style>
	      <?php else : ?>
	      	<div class="featured-post-background-container" >
		      	<div class="featured-post-background">
		        </div>
	        </div>
	      <?php endif; ?>
      </div> <!-- end featured post container -->
	  </section>
  <?php endwhile; ?>
</div>

<?php get_template_part( 'topics', 'bar' ); ?>




<section class="post-grid">
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='row row-centered'>
         	<?php if ( have_posts() ) : ?>
	          <?php echo do_shortcode('[ajax_load_more id="8453795663" container_type="div"  preloaded_amount="6" preloaded="true"  posts_per_page="6" post_format="standard" transition="fade"]'); ?>
          <?php else : ?>
          		<p class="text-center">No posts yet</p>
          <?php endif; ?> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>