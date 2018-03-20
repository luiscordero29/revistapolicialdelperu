<article class="news-aside">
	<?php 
	    $args = 
	        array(
	            'post_type' => 'post', 
	        	'numberposts' => 3, 
	        	'orderby' => 'date', 
	        	'order' => 'DESC',
	        	'post_status' => 'publish',
	        	'category_name' => 'Especial',
	        );
	    $posts = get_posts( $args );
	    foreach ($posts as $post):
	?>
	<div class="item">
		<div class="row">
			<div class="col-xs-4">
				<a href="<?php echo get_permalink($post->ID); ?>">
					<?php if (has_post_thumbnail()): ?>
						<div class="thumbnail-header-aside">
						  	<img src="<?php the_post_thumbnail_url( $post->ID, 'thumbnail' ); ?>" alt="<?php echo get_the_title($post->ID); ?>" />
						</div>
	     			<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/image/post-especial.png" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
	     			<?php endif ?>
				</a>
			</div>
			<div class="col-xs-8">
				<div class="meta">
					<div class="category">
						<?php 
							$post_categories = wp_get_post_categories( $post->ID );
							foreach($post_categories as $c):
							    $cat = get_category( $c );
						?>
							<a href="<?php echo get_category_link( $cat->term_id ); ?>">
								<?php echo $cat->name; ?>
							</a>
						<?php 
								break;
							endforeach; 
						?>
					</div>
					<a href="<?php echo get_permalink($post->ID); ?>">
						<?php the_max_charlength(get_the_title($post->ID),60); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>					
</article>
<?php
	$widget_aside_header = true;
	if (!is_page( 'prevencion' )) {
		$widget_aside_header = false;
	}
	if (!is_page( 'orientacion' )) {
		$widget_aside_header = false;
	}
	if ($widget_aside_header) {
	    if ( is_active_sidebar( 'widget-aside-header' ) ) :
	        dynamic_sidebar( 'widget-aside-header' );
	    endif;
	}
?>