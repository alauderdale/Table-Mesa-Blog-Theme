<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package boiler
 */

get_header(); ?>


<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>


<section class='default-page-header'>
  <h2 class='text-center'>
    Search
  </h2>
</section>
<section>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <h3 class='light-text-color no-margin-top double-margin-bottom text-center'>
          <?php printf('We found <span class="dark-text-color">' . $total_results . '</span> results with the word <span class="dark-text-color">' . get_search_query() . '</span> in it' ); ?>
        </h3>
        <div class='row row-centered'>
        	<?php if ( have_posts() ) : ?>
        		<?php while ( have_posts() ) : the_post(); ?>
          		<?php get_template_part( 'post', 'thumbnail' ); ?>
          	<?php endwhile; ?>
          	<?php else : ?>
          		<p class="text-center">We didn't find anything. Please try again.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>