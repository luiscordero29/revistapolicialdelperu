<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
        <div id="version-mobile"> 
            <div class="mobile-single">
                <?php 
                    $post_categories = wp_get_post_categories( get_the_ID() );
                    foreach($post_categories as $c):
                        $cat = get_category( $c );
                        $color = get_field('categoria_color', $cat);
                        break;
                    endforeach; 
                ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="mobile-single-title">
                                <h1 style="color: <?php echo $color; ?>"><?php the_title() ?></h1>
                            </div>
                            <div class="mobile-single-antetitulo">
                                <?php the_field('entrada_antetitulo'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                            
                <div class="mobile-single-thumbnail" style="background: <?php echo $color; ?>">
                    <?php if (has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-responsive" alt="<?php the_title() ?>">
                    <?php endif ?>
                    <div class="mobile-single-thumbnail-container">                        
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-8">
                                    <?php 
                                        $fotografo = get_field('entrada_fotografo'); 
                                        if ($fotografo) :
                                            echo $fotografo;
                                        endif; 
                                    ?>                                        
                                </div>
                                <div class="col-xs-4">
                                    <span class="share">
                                        <ul class="nav nav-pills pull-right"> 
                                            <li role="presentation"><a target="_blank" data-href="<?php echo get_permalink($post->ID); ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-facebook"></i></a></li>
                                            <li role="presentation" style="border-right: solid 1px #d9e7d6;"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($post->ID); ?>&url=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="mobile-single-contenido">
                                <?php the_field('entrada_contenido'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-home-last-news">
                <?php get_template_part( 'template/mobile-home', 'last-news' ); ?>
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
            				<div class="row" id="desarrollo_news">
            				    <div class="col-xs-12">
            				        <h2>
            							<?php the_title() ?>
            						</h2>
                                    <?php 
                                        $subtitle = get_field('entrada_subtitulo'); 
                                        if ($subtitle) :
                                    ?>
        							<p><?php echo $subtitle; ?></p>
                                    <?php endif; ?>
            				    </div>
            				</div>
            				<div class="row" id="aside__desarrollo">
            					<div class="col-xs-9">
            						<article id="desarrollo" class="new-first">
            							<?php if (has_post_thumbnail()): ?>
                                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-responsive" alt="<?php the_title() ?>">
                                        <?php endif ?>
            							<?php 
                                            $fotografo = get_field('entrada_fotografo'); 
                                            if ($fotografo) :
                                        ?>
            								<p><?php echo $fotografo; ?></p>
                                        <?php endif; ?>
            							<div id="data">
            								<span class="time"><?php the_time('g:i a'); ?></span> | 
            								<span class="dir">Lima, <?php the_time('F. Y'); ?></span>
            								<span class="share">
            									<ul class="nav nav-pills pull-right"> 
            										<li role="presentation"><a target="_blank" data-href="<?php echo get_permalink($post->ID); ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-facebook"></i></a></li>
                                                    <li role="presentation"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($post->ID); ?>&url=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-twitter"></i></a></li>
            										<li role="presentation" style="border-left: solid 1px #777;"><a target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-google-plus"></i></a></li>
            									</ul>
            									<div class="clearfix"></div>
            								</span>
            							</div>
            							<div class="content">
            								<?php the_content(); ?>
            							</div>        								
            						</article>
            					</div>
                                <div class="col-xs-3">
                                    <?php get_template_part( 'template/aside', 'single' ); ?>
                                </div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
        </div>	
    <?php endwhile; ?>
    <div id="version-desktop">    
        <div class="container contenido">
            <div class="row">
                <div class="col-xs-12 view">
                    <div class="hr">
                        <b>VEA TAMBIÉN</b>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <?php get_template_part( 'template/aside', 'news-dest' ); ?>
                </div>
            </div>
        </div>
        <?php get_template_part( 'template/aside', 'videos' ); ?>
    </div>		
<?php get_footer(); ?>
