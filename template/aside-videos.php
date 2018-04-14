<div class="container-videos">
    <div class="container">
        <section class="row" id="videos">
    		<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
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
                            <?php  
                                $youtube = get_field('youtube', $post->ID); 
                                $youtube = explode('=', $youtube);
                                $youtube_id = $youtube[1];
                            ?>
                            <img src="https://img.youtube.com/vi/<?php echo $youtube_id; ?>/maxresdefault.jpg" class="img-responsive" alt="<?php echo get_the_title($post->ID); ?>">
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
