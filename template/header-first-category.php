<?php 
	$current_category = get_queried_object();
    $args = 
        array(
            'post_type' => 'post', 
            'category'  => $current_category->cat_ID,
        	'numberposts' => 1, 
        	'orderby' => 'date', 
        	'order' => 'DESC',
        	'post_status' => 'publish',
        	'tax_query' => array(
				array(
					'taxonomy' => 'news',
					'field' => 'slug',
					'terms' => 'principal'
				)
			),
        );
    $posts = get_posts( $args );
    foreach ($posts as $post):
?>
<article class="new-first">
	<a href="<?php echo get_permalink($post->ID); ?>">
		<?php if (has_post_thumbnail()): ?>
			<img src="<?php the_post_thumbnail_url( $post->ID, 'large' ); ?>" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
     	<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/image/post-full.png" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
     	<?php endif ?>
	</a>
	<?php $color = get_field('categoria_color', $current_category); ?>
	<div class="meta" style="background: <?php echo $color; ?>">
		<div class="title" id="content">
			<a href="<?php echo get_permalink($post->ID); ?>">
				<?php echo get_the_title($post->ID); ?>
			</a>
		</div>
		<div class="share">
			<ul class="nav nav-pills pull-right"> 
				<li role="presentation"><a target="_blank" data-href="<?php echo get_permalink($post->ID); ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-facebook"></i></a></li>
				<li role="presentation"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($post->ID); ?>&url=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-twitter"></i></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
</article>
<?php endforeach; ?>					
