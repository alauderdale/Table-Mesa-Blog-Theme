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
	  	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	  	<?php $imageFull = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	    	<div class='bcg' data-anchor-target='#featured-post-hero' data-center='background-position: 50% 0px;' data-top-bottom='background-position: 50% -100px; ' style='background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?php echo $imageFull[0]; ?>)'>
	    <?php else : ?>
	    	<div class='bcg' data-anchor-target='#featured-post-hero' data-center='background-position: 50% 0px;' data-top-bottom='background-position: 50% -100px; '>
	    <?php endif; ?>
	      <div class='hsContainer'>
	        <div class='hsContent' data--100-center='opacity: 1; top:0%;' data--250-top='opacity: 0; top:40%;' data-anchor-target='#featured-post-hero h5'>
	          <div class='row'>
	            <div class='col-sm-2'></div>
	            <div class='col-sm-8'>
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
	              <!-- %p.text-center -->
	              <!-- By Table Mesa on Jan 1 2017 -->
	            </div>
	            <div class='col-sm-2'></div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>
  <?php endwhile; ?>
</div>

<?php get_template_part( 'topics', 'bar' ); ?>




<section>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='row row-centered'>
         	<?php if ( have_posts() ) : ?>
	          <?php echo do_shortcode('[ajax_load_more id="8453795663" container_type="div"  preloaded_amount="3" preloaded="true"  posts_per_page="6" post_format="standard" transition="fade"]'); ?>
          <?php else : ?>
          		<p class="text-center">No posts yet</p>
          <?php endif; ?> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>