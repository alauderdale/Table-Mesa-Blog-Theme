<div class='topics-bar centered-menu'>
	<div class="container">
	  <ul>
	    <?php wp_list_categories( array(
	        'orderby' => 'name',
	        'title_li'=> '',
	        'exclude' => '1'
	    ) ); ?> 
	  </ul>
	</div>
</div>