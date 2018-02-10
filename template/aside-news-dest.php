<section id="news_dest" class="row">
	<?php 
        $args = 
        	array(
        		'post_type' => 'post', 
        		'numberposts' => 4, 
        		'orderby' => 'date', 
        		'order' => 'DESC',
        		'post_status' => 'publish',
        		'tax_query' => array(
					array(
						'taxonomy' => 'news',
						'field' => 'slug',
						'terms' => 'secundaria'
					)
				),
        	);
        $posts = get_posts( $args );
        foreach ($posts as $post):
    ?>
     	<div class="item col-xs-3">
     		<a href="<?php echo get_permalink($post->ID); ?>">
     			<?php if (has_post_thumbnail()): ?>
					<img src="<?php the_post_thumbnail_url( $post->ID, 'post-destacado' ); ?>" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
     			<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/image/post-destacado.png" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
     			<?php endif ?>
     		</a>
			<div class="row info">
				<div class="col-xs-12 pd">
					<?php 
						$post_categories = wp_get_post_categories( $post->ID );
						foreach($post_categories as $c):
						    $cat = get_category( $c );
						    $color = get_field('categoria_color', $cat);
					?>
						<a class="category-link" href="<?php echo get_category_link( $cat->term_id ); ?>">
							<span class="etiqueta" style="background: <?php echo $color; ?>"><?php echo $cat->name; ?></span>
						</a>
					<?php 
							break;
						endforeach; 
					?>

					<?php 
						$post_date = get_the_date( 'Y-m-d H:i:s', $post->ID );
						$hace = new haceTanto($post_date,'i');
					?>
					<span class="time"><i class="fa fa-clock-o"></i> hace <?php echo $hace; ?></span>
							
					<span class="share">
						<ul class="nav nav-pills pull-right"> 
							<li role="presentation"><a target="_blank" data-href="<?php echo get_permalink($post->ID); ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-facebook"></i></a></li>
							<li role="presentation"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($post->ID); ?>&url=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-twitter"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</span>
				</div>
				<div class="col-xs-12 pd"><hr></div>
				<div class="col-xs-12 pd">
					<a href="<?php echo get_permalink($post->ID); ?>">
						<?php  the_max_charlength(get_the_title($post->ID),60); ?>
					</a>
				</div>
			</div>
		</div>
	<?php endforeach; ?>					
</section>	        	