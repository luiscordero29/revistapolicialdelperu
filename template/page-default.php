<div id="version-mobile"> 
    <div class="mobile-page-default">        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page page-default">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-page-news-secundary">
        <?php get_template_part( 'template/mobile-page', 'news-secundary' ); ?>
    </div>
    <div class="mobile-page-news-special">
        <?php get_template_part( 'template/mobile-page', 'news-special' ); ?>
    </div>
    <div class="mobile-page-blog">
        <?php get_template_part( 'template/mobile-page', 'blog' ); ?>
    </div>
    <div class="mobile-page-last-news">
        <?php get_template_part( 'template/mobile-page', 'last-news' ); ?>
    </div>
    <div class="mobile-home-videos">
        <?php get_template_part( 'template/mobile-home', 'videos' ); ?>
    </div>
</div>
<div id="version-desktop">    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            	<div class="content-header-shadow"></div>
            	<div class="content-header">
                    <div class="row prevencion" id="head">
            			<div class="col-md-8">
                            <div class="page page-default">
                				<h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>                                    
                            </div>
            			</div>
                        <div class="col-md-4">
                            <?php get_template_part( 'template/header', 'aside' ); ?>
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
                <?php get_template_part( 'template/aside', 'page-default' ); ?>
            </div>
        </div>
    </div> 
    <?php get_template_part( 'template/aside', 'videos' ); ?>   
</div>