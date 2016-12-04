<?php
/**
 * The Template for displaying all single posts.
 *
 * @package boiler
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class='featured-post-wrap'>
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
              <p class='text-center'>
                 By <?php the_author(); ?> on <?php the_date('M d Y'); ?>
              </p>
              <!-- %p.text-center -->
              <!-- By Table Mesa on Jan 1 2017 -->
            </div>
            <div class='col-sm-2'></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<div class='post'>
  <section>
    <div class='container'>
      <div class='row'>
        <div class='col-sm-2'></div>
        <div class='col-sm-8'>
          <div class="post content">
          	<?php the_content(); ?>
          </div>
          <div class='centered-menu social-menu double-margin-top'>
        </div>
        <div class='col-sm-2'></div>
      </div>
    </div>
  </section>
</div> <!-- end post wrapper -->
<?php endwhile; ?>



<?php get_footer(); ?>