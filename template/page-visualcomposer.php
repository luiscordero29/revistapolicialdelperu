<div class="container">
    <div class="row">
        <div class="col-xs-12">
        	<div class="content-header-shadow"></div>
        	<div class="content-header">
                <div class="row" id="head">
        			<div class="col-xs-12">
                        <div class="page page-default">
                            <?php the_content(); ?>                                    
                        </div>
        			</div>
                </div>                            
        	</div>
        </div>
    </div>
</div>
<div class="container contenido seguridad">
    <div class="row">
        <div class="col-md-12">
            <?php get_template_part( 'template/aside', 'news-dest' ); ?>           
        </div>
    </div>
</div> 
<?php get_template_part( 'template/aside', 'videos' ); ?>   