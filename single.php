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
              <p class='text-center'>
                 By <?php the_author(); ?> on <?php the_date('M d Y'); ?>
              </p>
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