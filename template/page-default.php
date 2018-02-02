<div class="container">
    <div class="row">
        <div class="col-xs-12">
        	<div class="content-header-shadow"></div>
        	<div class="content-header">
                <div class="row prevencion" id="head">
        			<div class="col-md-8">
        				<h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>                                    
        			</div>
                    <div class="col-md-4">
                        <?php get_template_part( 'template/header', 'aside' ); ?>
                    </div>
                </div>                            
            <hr>
        	</div>
        </div>
    </div>
</div>
<div class="container contenido seguridad">
    <div class="row">
        <div class="col-md-9">
            <?php get_template_part( 'template/aside', 'news-dest-page' ); ?>           
            <?php get_template_part( 'template/aside', 'news-page' ); ?>                     
        </div>
        <div class="col-md-3" id="aside_publi">
            <?php get_template_part( 'template/aside', 'page' ); ?>
        </div>
    </div>
</div> 
<?php get_template_part( 'template/aside', 'videos' ); ?>   