<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	    <div class="container">
        	<div class="row">
        		<div class="col-xs-12">
        			<div class="content-header-shadow"></div>
        			<div class="content-header">
        				<div class="row" id="desarrollo_news">
        				    <div class="col-md-12">
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
        							<div id="data">
        								<span class="time"><?php the_time('g:i a'); ?></span> | 
        								<span class="dir">Lima, <?php the_time('F. Y'); ?></span>
        								<span class="share">
        									<ul class="nav nav-pills pull-right"> 
        										<li role="presentation"><a target="_blank" data-href="<?php echo get_permalink($post->ID); ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-facebook"></i></a></li>
        										<li role="presentation"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($post->ID); ?>&url=<?php echo get_permalink($post->ID); ?>"><i class="fa fa-twitter"></i></a></li>
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
    <?php endwhile; ?>
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
<?php get_footer(); ?>
