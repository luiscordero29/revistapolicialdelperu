<div class="section-title">
	<div class="container-fluid">
		<div class="row">
		    <div class="col-xs-12">
		    	<div class="row">
		    		<div class="col-xs-12">
		     			ÚLTIMAS NOTICIAS
		    		</div>
		    	</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<?php 
	        $args = 
	        	array(
	        		'post_type' => 'post', 
	        		'numberposts' => 1, 
	        		'orderby' => 'date', 
	        		'order' => 'DESC',
	        		'post_status' => 'publish',
	        		'category__not_in' => array( 7 ),
	        	);
	        $posts = get_posts( $args );
	        foreach ($posts as $post):
	    ?>
	     	<div class="col-xs-12">
	     		<article>
	     			<div class="row">
	     				<div class="col-xs-12">
							<header>
								<div class="title">
									<a href="<?php echo get_permalink($post->ID); ?>">
										<h1><?php  echo get_the_title($post->ID); ?></h1>
									</a>
								</div>
							</header>
	     				</div>	
	     			</div>
					<div class="row">
						<div class="col-xs-6">
							<div class="pull-left">
				     			<div class="category">		     				
					     			<?php 
										$post_categories = wp_get_post_categories( $post->ID );
										foreach($post_categories as $c):
										    $cat = get_category( $c );
										    $color = get_field('categoria_color', $cat);
									?>
										<a class="category-link" style="color: <?php echo $color; ?>" href="<?php echo get_category_link( $cat->term_id ); ?>">
											<span class="etiqueta"><?php echo $cat->name; ?></span>
										</a>
									<?php 
											break;
										endforeach; 
									?>
				     			</div>
				     		</div>
						</div>
						<div class="col-xs-6">
				     		<div class="pull-right">
				     			<div class="share">
					     			<ul class="nav nav-pills"> 
										<li role="presentation"><a target="_blank" data-href="<?php echo get_permalink($post->ID); ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-facebook"></i></a></li>
										<li role="presentation" style="border-right: solid 1px #fff;"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($post->ID); ?>&url=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-twitter"></i></a></li>
									</ul>
				     			</div>
				     		</div>
						</div>
					</div>
					<div class="content">
						<div class="row">
							<div class="col-xs-6">
								<?php if (has_post_thumbnail()): ?>
									<img src="<?php the_post_thumbnail_url( $post->ID, 'post-destacado' ); ?>" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
				     			<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/image/post-destacado.png" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
				     			<?php endif ?>
							</div>
							<div class="col-xs-6">
								<?php the_max_charlength(get_the_excerpt($post->ID),160); ?>
							</div>
						</div>
					</div>
				</article>	
			</div>
		<?php endforeach; ?>					
	</div>	  
</div>      	