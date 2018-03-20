<div class="container">
    <div class="row">
        <div class="col-xs-12">
        	<div class="content-header-shadow"></div>
        	<div class="content-header">
                <div class="row prevencion" id="head">
        			<div class="col-md-12">
                        <div class="page page-default">
            				<h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>                                    
                        </div>
        			</div>
                </div>                            
        	</div>
        </div>
    </div>
</div>
<div class="container contenido seguridad">
    <hr class="default">
    <div class="row">
        <div class="col-xs-9" id="page-default">
            <?php get_template_part( 'template/aside', 'news-dest-page' ); ?>           
            <?php get_template_part( 'template/aside', 'news-page' ); ?>                     
        </div>
        <div class="col-xs-3" id="aside-page-default">
            <?php get_template_part( 'template/aside', 'page' ); ?>
        </div>
    </div>
</div> 
<?php get_template_part( 'template/aside', 'videos' ); ?>   