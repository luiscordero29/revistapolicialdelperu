<?php 
	get_header(); 
		while ( have_posts() ) : the_post(); 
			$page_type = get_field('page_type');
			switch ($page_type) {
				
				case 'visualcomposer-full':
					get_template_part( 'template/page', 'visualcomposer-full' );
					break;

				case 'visualcomposer':
					get_template_part( 'template/page', 'visualcomposer' );
					break;

				case 'default':
					get_template_part( 'template/page', 'default' );
					break;

				case 'page':
					get_template_part( 'template/page' );
					break;
				
				default:
					get_template_part( 'template/page' );
					break;
			}
		endwhile; 
	get_footer(); 
?>
