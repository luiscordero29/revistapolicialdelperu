<div class="container-fluid">
    <div class="row">
    	<div class="col-xs-6">
            <div class="section-title">
    			<h4>Zona de Videos Revista Policial</h4>
            </div>
    	</div>
    </div>
    <div class="section-videos">   
        <div class="row" id="mobile_slider_videos">
            <?php 
                $args = 
                    array(
                        'post_type' => 'video', 
                        'numberposts' => 6, 
                        'orderby' => 'date', 
                        'order' => 'DESC',
                        'post_status' => 'publish',
                    );
                $posts = get_posts( $args );
                foreach ($posts as $post):
            ?>
                    <div class="col-xs-12 item">
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
    </div>
</div>
