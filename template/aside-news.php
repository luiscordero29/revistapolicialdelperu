<div class="header">
	Ultimas Noticias
</div>
<div class="content">
	<?php 
        $args = 
        	array(
        		'post_type' => 'post', 
        		'numberposts' => 5, 
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

<?php
   function hace($date)
	{
	   // echo $date;

		$now =  date("Y-m-d H:i:s");
		$fecha1 = new DateTime($now);
		
		$fecha = $fecha1->diff($date);
		if ($fecha->y > 0) {
			return $fecha->y." Año";
		}else if($fecha->y < 1 && $fecha->m > 0){
			if ($fecha->m == 1) {
				return $fecha->m." Mes";
			}else{
				return $fecha->m." Meses";
			}
		}else if($fecha->y < 1 && $fecha->m < 1 && $fecha->d > 0){
			if ($fecha->d == 1) {
				return $fecha->d." Dia";
			}else{
				return $fecha->d." Dias";
			}
		}else if($fecha->y < 1 && $fecha->m < 1 && $fecha->d < 1 && $fecha->h){
			if ($fecha->h == 1) {
				return $fecha->h." Hora";
			}else{
				return $fecha->h." Horas";
			}
		}
	}
?>