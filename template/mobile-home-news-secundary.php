<div class="container-fluid">
	<div class="row">
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
	     	<div class="col-xs-12">
	     		<article>
		     		<a href="<?php echo get_permalink($post->ID); ?>">
		     			<?php if (has_post_thumbnail()): ?>
							<img src="<?php the_post_thumbnail_url( $post->ID, 'post-destacado' ); ?>" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
		     			<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/image/post-destacado.png" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
		     			<?php endif ?>
		     		</a>
		     		<div class="pull-left">
		     			<div class="category">		     				
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
		     			</div>
		     		</div>
		     		<div class="pull-right">
		     			<div class="share">
			     			<ul class="nav nav-pills"> 
								<li role="presentation"><a target="_blank" data-href="<?php echo get_permalink($post->ID); ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-facebook"></i></a></li>
								<li role="presentation" style="border-right: solid 1px #a2a2a2;"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($post->ID); ?>&url=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-twitter"></i></a></li>
							</ul>
		     			</div>
		     		</div>
					<div class="clearfix"></div>
					<div class="hr">
						<hr>
					</div>
					<div class="title">
						<a href="<?php echo get_permalink($post->ID); ?>">
							<?php  the_max_charlength(get_the_title($post->ID),60); ?>
						</a>
					</div>
	     		</article>
			</div>
		<?php endforeach; ?>					
	</div>	  
</div>      	