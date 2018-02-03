<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
        	<div class="content-header-shadow"></div>
        	<div class="content-header">
                <div class="row" id="head">
            		<div class="col-xs-9">
                    <?php 
                        $args = array(
                            'post_type' => 'post',
                            's' => get_search_query(),
                            'post_status' => 'publish',
                            'orderby'     => 'title', 
                            'order'       => 'ASC',
                            'numberposts' => -1,      
                        );
                        $the_query = new WP_Query( $args );
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>       
                        <div class="search">  
                            <a href="<?php echo get_permalink(); ?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <?php the_excerpt(); ?>
                            <hr>
                        </div>
                    <?php 
                            endwhile;
                        else : 
                    ?>
                        <div class="col-xs-12">
                            <div class="alert alert-warning" role="alert">
                                No existe resultados para esta busqueda
                            </div>
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="col-xs-3">
                        <?php get_template_part( 'template/aside', 'single' ); ?>
                    </div>
                </div>                            
        	</div>
        </div>
    </div>
</div>
<?php get_template_part( 'template/aside', 'videos' ); ?>           
<?php get_footer(); ?>
