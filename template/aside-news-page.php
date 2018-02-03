<section id="news_last" class="row">
	<div id="news_content" class="col-xs-8">
	<?php 
        $args = 
        	array(
        		'post_type' => 'post', 
        		'numberposts' => 4, 
        		'orderby' => 'date', 
        		'order' => 'DESC',
        		'post_status' => 'publish',
        	);
        $posts = get_posts( $args );
        foreach ($posts as $post):
    ?>
		<div class="row item">
			<div class="col-xs-12">
				<a href="<?php echo get_permalink($post->ID); ?>">
					<h4><?php echo get_the_title($post->ID); ?></h4>
				</a>
				<div class="row info">
					<div class="col-xs-12 head">
						<?php 
							$post_categories = wp_get_post_categories( $post->ID );
							foreach($post_categories as $c):
								$cat = get_category( $c );
								$color = get_field('categoria_color', $cat);
						?>
								<a class="category-link pull-left" href="<?php echo get_category_link( $cat->term_id ); ?>">
									<span class="etiqueta" style="background: <?php echo $color; ?>"><?php echo $cat->name; ?></span>
								</a>
						<?php 
								break;
							endforeach; 
						?>

						<?php 
							$post_date = get_the_date( 'Y-m-d H:i:s', $post->ID );
							$hace = new haceTanto($post_date,'h');
						?>
						<span class="time pull-left"><i class="fa fa-clock-o"></i> hace <?php echo $hace; ?></span>
						<span class="share pull-left">
							<ul class="nav nav-pills"> 
        						<li role="presentation"><a target="_blank" data-href="<?php echo get_permalink($post->ID); ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-facebook"></i></a></li>
								<li role="presentation"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($post->ID); ?>&url=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-twitter"></i></a></li>
        					</ul>
        					<div class="clearfix"></div>
						</span>
					</div>
				</div>
				<div class="info_news row">
					<div class="col-xs-6 image">
						<?php if (has_post_thumbnail()): ?>
							<img src="<?php the_post_thumbnail_url( $post->ID, 'medium' ); ?>" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/image/post-especial.png" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
						<?php endif ?>
					</div>
					<div class="col-xs-6">
						<p>
							<?php the_excerpt($post->ID); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<hr>
	<?php endforeach; ?>					
	</div>
	<div id="news_ultimas" class="col-xs-4 news_ult">
		<div class="col-xs-12 news">
            <div class="content">
                <div class="header">
                    <h4>Ultimas Noticias</h4>
                </div>

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
									'terms' => 'ultimas-noticias'
								)
							),
			        	);
			        $posts = get_posts( $args );
			        foreach ($posts as $post):
			    ?>
					<div class="info-item">
						<a class="title" href="<?php echo get_permalink($post->ID); ?>">
							<?php echo get_the_title($post->ID); ?>
						</a>
						<div class="meta">
								
								<?php 
									$post_categories = wp_get_post_categories( $post->ID );
									foreach($post_categories as $c):
									    $cat = get_category( $c );
									    $color = get_field('categoria_color', $cat);
								?>
									<a class="etiqueta pull-left" href="<?php echo get_category_link( $cat->term_id ); ?>" style="color: <?= $color?>">
										<?php echo $cat->name; ?>
									</a>
								<?php 
										break;
									endforeach; 
								?>

								<?php 
								 	$post_date = get_the_date( 'Y-m-d H:i:s', $post->ID );
									$hace = new haceTanto($post_date,'h');
									//$fecha2 = new DateTime($post_date);
									//$hace = hace($fecha2);
								?>

								<center>
									<span class="time"><i class="fa fa-clock-o"></i> hace <?php echo $hace; ?></span>
								</center>
								
								<span class="share pull-right">
									<ul class="nav nav-pills"> 
										<li role="presentation"><a target="_blank" data-href="<?php echo get_permalink($post->ID); ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-facebook"></i></a></li>
										<li role="presentation"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($post->ID); ?>&url=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-twitter"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</span>
										
						</div>
						<div class="img">
							<a href="<?php echo get_permalink($post->ID); ?>">
				     			<?php if (has_post_thumbnail()): ?>
									<img src="<?php the_post_thumbnail_url( $post->ID, 'post-verde' ); ?>" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
				     			<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/image/post-verde.png" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
				     			<?php endif ?>
				     		</a>
						</div>
						<hr>
					</div>
				<?php endforeach; ?> 
        	</div>
        </div>
	</div>
</section>	        	