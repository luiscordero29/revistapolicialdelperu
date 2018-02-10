<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="content-header-shadow"></div>
				<div class="content-header">
					<div class="row">
						<div class="col-xs-8">
							<?php get_template_part( 'template/header', 'first' ); ?>
						</div>
						<div class="col-xs-4" style="padding-left: 0px;">
							<?php get_template_part( 'template/header', 'aside' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="container contenido">
		
		<hr>
			<?php get_template_part( 'template/aside', 'news-dest' ); ?>
		<hr>
		
		<section id="news_last" class="row">
			<div id="news_content" class="col-xs-6">
				<?php while ( have_posts() ) : the_post(); ?>		
					<div class="row item">
						<div class="col-xs-12">
							<a href="<?php echo get_permalink(); ?>">
							<h4><?php the_title(); ?></h4>
							</a>
							<div class="row info">
								<div class="col-xs-12 head">
									<?php 
										$post_categories = wp_get_post_categories( get_the_ID() );
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
										$post_date = get_the_date( 'Y-m-d H:i:s');
										$hace = new haceTanto($post_date,'h');
									?>
									<span class="time pull-left"><i class="fa fa-clock-o"></i> hace <?php echo $hace; ?></span>
									<span class="share pull-left">
										<ul class="nav nav-pills"> 
        									<li role="presentation"><a target="_blank" data-href="<?php echo get_permalink(); ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"><i class="fa fa-facebook"></i></a></li>
											<li role="presentation"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title(); ?>&url=<?php echo get_permalink(); ?>"><i class="fa fa-twitter"></i></a></li>
        								</ul>
        								<div class="clearfix"></div>
									</span>
								</div>
							</div>
							<div class="info_news row">
								<div class="col-xs-6 image">
									<?php if (has_post_thumbnail()): ?>
										<img src="<?php the_post_thumbnail_url( 'medium' ); ?>" class="img-responsive" alt="<?php echo get_the_title(); ?>">
						     		<?php else: ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/image/post-especial.png" class="img-responsive" alt="<?php echo get_the_title(); ?>">
						     		<?php endif ?>
								</div>
								<div class="col-xs-6">
									<p>
										<?php the_excerpt_max_charlength(160); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<hr>
				<?php endwhile; ?>
				<div class="row">
					<div class="col-xs-12">
						<center class="posts_nav_link">
							<?php posts_nav_link('','',''); ?>
						</center>
					</div>
				</div>	
			</div>
			<div id="ultimas-noticias" class="col-xs-3">
				<?php get_template_part( 'template/aside', 'news' ); ?>		
			</div>
			<div id="home-aside" class="col-xs-3">
				<?php get_template_part( 'template/aside', 'single' ); ?>		
			</div>
		</section>
	</div>
		
    <?php get_template_part( 'template/aside', 'videos' ); ?>			
	
<?php get_footer(); ?>