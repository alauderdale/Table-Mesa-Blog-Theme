<div class='col-md-4 col-sm-6 col-centered'>
  <a class='post-thumbnail' href=' <?php the_permalink(); ?>'>
    <div class='post-thumbnail-body'>
      	<?php if (has_post_thumbnail( $post->ID ) ): ?>
      	<?php $imageThumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
          <h3>
            <?php the_title(); ?>
          </h3>
          <div class="has-image">
          	<?php the_excerpt(); ?>
        	</div>
					<div class='img-clip'>
						<img  
							src='<?php echo $imageThumb[0]; ?>' 
						>
					</div>
      	<?php else : ?>
       		<h3>
            <?php the_title(); ?>
          </h3>
          <?php the_excerpt(); ?>
      	<?php endif; ?>

    </div>
    <div class='post-thumbnail-footer'>
    	<h5 class="pull-left">
    	<?php echo get_the_date('M d Y'); ?>
    	</h5>
      <h5 class='text-right pull-right'>
        <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
      </h5>
    </div>
  </a>
</div>