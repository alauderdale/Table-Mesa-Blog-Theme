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
         	<?php if ( have_posts() ) : ?>
	          <?php 
							$cat = get_query_var('cat');
							$category = get_category ($cat);
							echo do_shortcode('[ajax_load_more seo="true" preloaded_amount="3" preloaded="true" posts_per_page="6" container_type="div" transition="fade"  category="'.$category->slug.'"]');
						?>
          <?php else : ?>
          		<p class="text-center">We didn't find anything. Please try again.</p>
          <?php endif; ?> 
        </div>
      </div>
    </div>
  </div>
</section>






<?php get_footer(); ?>