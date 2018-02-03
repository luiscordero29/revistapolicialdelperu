<div class="container-videos">
    <div class="container">
        <section class="row" id="videos">
    		<div class="col-xs-4">
    			<h3>Zona de Videos Revista Policial</h3>
    		</div>
    		<div class="row" id="slider_videos">
    			<?php 
                    $args = 
                        array(
                            'post_type' => 'video', 
                            'numberposts' => 20, 
                            'orderby' => 'date', 
                            'order' => 'DESC',
                            'post_status' => 'publish',
                        );
                    $posts = get_posts( $args );
                    foreach ($posts as $post):
                ?>
                	<div class="col-xs-3 item">
    					<a href="<?php echo get_permalink($post->ID); ?>">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url( $post->ID, 'post-destacado' ); ?>" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/post-video.png" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
                            <?php endif ?>
    					</a>
    					<br>
    					<a class="title" href="<?php echo get_permalink($post->ID); ?>">
                            <?php echo get_the_title($post->ID); ?>
                        </a>
    				</div>
    			<?php endforeach; ?>		
    		</div>
    	</section>
    </div>
</div>
