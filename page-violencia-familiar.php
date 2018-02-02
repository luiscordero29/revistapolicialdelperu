<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	    	<div class="container">
        		<div class="row">
        			<div class="col-xs-12">
        				<div class="content-header-shadow"></div>
        				<div class="content-header"  id="violecia_familiar">
        				    <div class="row">
        				        <div class="col-md-12">
        				           <h1>
                                        ¿Que hacer Si eres Victima de Violencia Familiar?            
                                   </h1>
        				        </div>
        				    </div>
                            <div class="row" id="video">
                                <div class="col-md-12">
                                    <iframe src="https://www.youtube.com/embed/PXi2n2qC7Eg?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    <p>Video: ANDINA Noticias.</p>
                                    <span class="share">
                                        <ul class="nav nav-pills pull-right"> 
                                            <li role="presentation"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li role="presentation"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li role="presentation"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </span>
                                </div>
                            </div>
                            <div class="row" id="content_violencia">
                                <div class="col-md-12">
                                    <h2>Detalles de la Ley 30364 que busca erradicar la violencia en la familia</h2>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quibusdam, ad tempora inventore sed neque aspernatur, eos et sequi similique tempore, ducimus accusantium adipisci iusto ratione nemo, expedita facere nesciunt?</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quibusdam, ad tempora inventore sed neque aspernatur, eos et sequi similique tempore, ducimus accusantium adipisci iusto ratione nemo, expedita facere nesciunt?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quibusdam, ad tempora inventore sed neque aspernatur, eos et sequi similique tempore, ducimus accusantium adipisci iusto ratione nemo, expedita facere nesciunt?Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                    
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quibusdam, ad tempora inventore sed neque aspernatur, eos et sequi similique tempore, ducimus accusantium adipisci iusto ratione nemo, expedita facere nesciunt?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quibusdam, ad tempora inventore sed neque aspernatur, eos et sequi similique tempore, ducimus accusantium adipisci iusto ratione nemo, expedita facere nesciunt?Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

                                    <h3>
                                        ¿Solo la Victima puede denunciar un acto de violencia?
                                    </h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure tenetur officiis in nesciunt vitae repellat, vero, beatae voluptate quasi veritatis corporis quas minima quibusdam totam perspiciatis, ipsum expedita eius impedit?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima deleniti voluptate unde fuga inventore architecto accusamus deserunt rerum molestiae beatae expedita earum odio, voluptatem iste recusandae, nam quidem dolore explicabo!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis maxime quae ab tenetur? Sunt illo iste atque maiores vero corporis voluptate fugit, culpa, provident, qui nihil minima dicta cum earum.</p>

                                    <p> qui nihil minima dicta cum earum</p>

                                    <p> qui nihil minima dicta cum earum  qui nihil minima dicta cum earum  qui nihil minima dicta cum earum earum  qui nihil minima dicta cum earum</p>

                                    <p> qui nihil minima dicta cum earum  qui nihil minima dicta cum earum  qui nihil minima dicta cum earum</p>

                                    <p> qui nihil minima dicta cum earum  qui nihil minima dicta cum earum</p>
                                </div>
                            </div>
        				</div>
        			</div>
        		</div>
        	</div>	
        </section>
        		
		<div class="container-videos">
		    <div class="container">
    		    <section class="row" id="videos">
    				<div class="col-md-4">
    						<h3>Zona de Videos Revista Policial</h3>
    				</div>
    				
    				<div class="row" id="slider_videos">
    					<div class="col-md-3 item">
    						<a href="#">
    							<img src="<?= get_template_directory_uri()?>/assets/image/slide.png" alt="">
    						</a>
    						<p>
    							Campus de San Marcos: estudiante fue desfigurada con un cuchillo
    						</p>
    					</div>
    					<div class="col-md-3 item">
    						<a href="#">
    							<img src="<?= get_template_directory_uri()?>/assets/image/slide.png" alt="">
    						</a>
    						<p>
    							Campus de San Marcos: estudiante fue desfigurada con un cuchillo
    						</p>
    					</div>
    					<div class="col-md-3 item">
    						<a href="#">
    							<img src="<?= get_template_directory_uri()?>/assets/image/slide.png" alt="">
    						</a>
    						<p>
    							Campus de San Marcos: estudiante fue desfigurada con un cuchillo
    						</p>
    					</div>
    					<div class="col-md-3 item">
    						<a href="#">
    							<img src="<?= get_template_directory_uri()?>/assets/image/slide.png" alt="">
    						</a>
    						<p>
    							Campus de San Marcos: estudiante fue desfigurada con un cuchillo
    						</p>
    					</div>
    					<div class="col-md-3 item">
    						<a href="#">
    							<img src="<?= get_template_directory_uri()?>/assets/image/slide.png" alt="">
    						</a>
    						<p>
    							Campus de San Marcos: estudiante fue desfigurada con un cuchillo
    						</p>
    					</div>
    					<div class="col-md-3 item">
    						<a href="#">
    							<img src="<?= get_template_directory_uri()?>/assets/image/slide.png" alt="">
    						</a>
    						<p>
    							Campus de San Marcos: estudiante fue desfigurada con un cuchillo
    						</p>
    					</div>
    				</div>
    		    </section>
    		</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php get_footer(); ?>
