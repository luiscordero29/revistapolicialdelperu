<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	    	<div class="container">
        		<div class="row" id="seguridad_ciudadana">
        			<div class="col-xs-12">
        				<div class="content-header-shadow"></div>
        				<div class="content-header">
        				    <div class="row prevencion" id="head">
        				        <div class="col-md-8">
        				            <h1>
        							    Orientación
        							</h1>
                                    <span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, tempora, laudantium. Numquam fuga dolorum rem inventore recusandae
                                    </span>
                                    <br><br>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ut, saepe magnam, architecto sint earum. Hic est cum sunt velit aliquid doloremque, id, mollitia labore provident culpa delectus, repellat itaque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam possimus repellendus, ab neque aliquid quasi perspiciatis earum quisquam nam ipsam, debitis ratione itaque obcaecati quae vitae, labore magnam dignissimos quam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ut, saepe magnam, architecto sint earum. Hic est cum sunt velit aliquid doloremque, id, mollitia labore provident culpa delectus, repellat itaque.Loremvitae, labore magnam dignissimos quam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ut, saepe magnam, architecto sint earum. Hic est cum sunt velit aliquid doloremque, id, mollitia labore provident culpa delectus, repellat itaque.Loremvitae, labore magnam dignissimos quam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ut, saepe magnam, architecto sint earum. Hic est cum sunt velit aliquid doloremque, id, mollitia labore provident culpa delectus, repellat itaque.Lorem</p>
        				        </div>
                                <div class="col-md-4 news-aside">
                                    <?php for ($i=0; $i < 3; $i++): ?>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/img-aside.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="meta">
                                                    <div>                                                   
                                                        Especial
                                                    </div>
                                                    <a href="#">Guia del Conductor</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endfor; ?>
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
                        <section id="news_dest" class="row">
                            <div class="item col-md-4">
                                <img src="<?= get_template_directory_uri()?>/assets/image/dest.png" >
                                <div class="row info">
                                    <div class="col-md-12 pd">
                                        <span class="etiqueta salud">salud</span>
                                        <span class="time"><i class="fa fa-clock-o"></i> hace 1 hora</span>
                                        <span class="share">
                                            <ul class="nav nav-pills pull-right"> 
                                                <li role="presentation"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li role="presentation"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </span>
                                    </div>
                                    <div class="col-md-12 pd"><hr></div>
                                    <div class="col-md-12 pd">
                                        <a href="#">
									Asaltantes dispararon a sus victimas para quitarles 50 mil soles
								</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4">
                                <img src="<?= get_template_directory_uri()?>/assets/image/dest.png" >
                                <div class="row info">
                                    <div class="col-md-12 pd">
                                        <span class="etiqueta cyber">ciberseguridad</span>
                                        <span class="time"><i class="fa fa-clock-o"></i> hace 1 hora</span>
                                        <span class="share">
                                            <ul class="nav nav-pills pull-right"> 
                                                <li role="presentation"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li role="presentation"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </span>
                                    </div>
                                    <div class="col-md-12 pd"><hr></div>
                                    <div class="col-md-12 pd">
                                        <a href="#">
									Asaltantes dispararon a sus victimas para quitarles 50 mil soles
								</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4">
                                <img src="<?= get_template_directory_uri()?>/assets/image/dest.png" >
                                <div class="row info">
                                    <div class="col-md-12 pd">
                                        <span class="etiqueta especial">especial</span>
                                        <span class="time">
                                            <i class="fa fa-clock-o"></i> hace 1 hora
                                        </span>
                                        <span class="share">
                                            <ul class="nav nav-pills pull-right"> 
                                                <li role="presentation"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li role="presentation"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </span>
                                    </div>
                                    <div class="col-md-12 pd"><hr></div>
                                    <div class="col-md-12 pd">
                                        <a href="#">
									Asaltantes dispararon a sus victimas para quitarles 50 mil soles
								</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="news_last" class="row">
                            <div id="news_content" class="col-md-8">
                                <div class="row item">
                                    <div class="col-md-12">
                                        <h4>Cajamarca: PNP capturo a interno que fugo de penal maxima seguridad</h4>
                                        <div class="row info">
                                            <div class="col-md-6 head">
                                                <span class="etiqueta security">seguridad</span>
                                                <span class="time"><i class="fa fa-clock-o"></i> hace 1 hora</span>
                                                <span class="share">
                                                    <ul class="nav nav-pills pull-right"> 
                                                        <li role="presentation"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li role="presentation"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="info_news row">
                                            <div class="col-md-6 image">
                                                <img src="<?= get_template_directory_uri()?>/assets/image/news.png" >
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    El sujeto fue denunciado por su pareja, quien sostuvo que dicidio revelar su paradero luego de agredrirla
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="row item">
                                    <div class="col-md-12">
                                        <h4>Cajamarca: PNP capturo a interno que fugo de penal maxima seguridad</h4>
                                        <div class="row info">
                                            <div class="col-md-6 head">
                                                <span class="etiqueta security">seguridad</span>
                                                <span class="time"><i class="fa fa-clock-o"></i> hace 1 hora</span>
                                                <span class="share">
                                                    <ul class="nav nav-pills pull-right"> 
                                                        <li role="presentation"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li role="presentation"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="info_news row">
                                            <div class="col-md-6 image">
                                                <img src="<?= get_template_directory_uri()?>/assets/image/news.png" >
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    El sujeto fue denunciado por su pareja, quien sostuvo que dicidio revelar su paradero luego de agredrirla
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="row item">
                                    <div class="col-md-12">
                                        <h4>Cajamarca: PNP capturo a interno que fugo de penal maxima seguridad</h4>
                                        <div class="row info">
                                            <div class="col-md-6 head">
                                                <span class="etiqueta security">seguridad</span>
                                                <span class="time"><i class="fa fa-clock-o"></i> hace 1 hora</span>
                                                <span class="share">
                                                    <ul class="nav nav-pills pull-right"> 
                                                        <li role="presentation"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li role="presentation"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="info_news row">
                                            <div class="col-md-6 image">
                                                <img src="<?= get_template_directory_uri()?>/assets/image/news.png" >
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    El sujeto fue denunciado por su pareja, quien sostuvo que dicidio revelar su paradero luego de agredrirla
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row item">
                                    <div class="col-md-12">
                                        <h4>Cajamarca: PNP capturo a interno que fugo de penal maxima seguridad</h4>
                                        <div class="row info">
                                            <div class="col-md-6 head">
                                                <span class="etiqueta security">seguridad</span>
                                                <span class="time"><i class="fa fa-clock-o"></i> hace 1 hora</span>
                                                <span class="share">
                                                    <ul class="nav nav-pills pull-right"> 
                                                        <li role="presentation"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li role="presentation"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="info_news row">
                                            <div class="col-md-6 image">
                                                <img src="<?= get_template_directory_uri()?>/assets/image/news.png" >
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    El sujeto fue denunciado por su pareja, quien sostuvo que dicidio revelar su paradero luego de agredrirla
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div id="news_ultimas" class="col-md-4 news_ult">
                                <div class="col-md-12 news">
                                    <div class="content">
                                        <div class="header">
                                            <h4>Ultimas Noticias</h4>
                                        </div>
                                        <div class="info-item">
                                            <p>
                                                San Marcos: Fiscalia denuncia ciaria a responsables de la toma de ciudad universitaria
                                            </p>
                                            <div class="row info">
                                                <div class="col-md-12">
                                                    <span class="etiqueta especial">especial</span>
                                                    <span class="time"><i class="fa fa-clock-o"></i> hace 1 hora</span>
                                                    <span class="share">
                                                        <ul class="nav nav-pills pull-right"> 
                                                            <li role="presentation"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li role="presentation"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="img">
                                                <img src="<?= get_template_directory_uri()?>/assets/image/ultimas.png" alt="">
                                            </div>
                                            <hr>
                                        </div>
    
                                        <div class="info-item">
                                            <p>
                                                San Marcos: Fiscalia denuncia ciaria a responsables de la toma de ciudad universitaria
                                            </p>
                                            <div class="row info">
                                                <div class="col-md-12">
                                                    <span class="etiqueta salud">salud</span>
                                                    <span class="time"><i class="fa fa-clock-o"></i> hace 1 hora</span>
                                                    <span class="share">
                                                        <ul class="nav nav-pills pull-right"> 
                                                            <li role="presentation"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li role="presentation"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="img">
                                                <img src="<?= get_template_directory_uri()?>/assets/image/ultimas.png" alt="">
                                            </div>
                                            <hr>
                                        </div>
    
                                        <div class="info-item">
                                            <p>
                                                San Marcos: Fiscalia denuncia ciaria a responsables de la toma de ciudad universitaria
                                            </p>
                                            <div class="row info">
                                                <div class="col-md-12">
                                                    <span class="etiqueta salud">salud</span>
                                                    <span class="time"><i class="fa fa-clock-o"></i> hace 1 hora</span>
                                                    <span class="share">
                                                        <ul class="nav nav-pills pull-right"> 
                                                            <li role="presentation"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li role="presentation"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="img">
                                                <img src="<?= get_template_directory_uri()?>/assets/image/ultimas.png" alt="">
                                            </div>
                                            <hr>
                                        </div>
    
                                        <div class="info-item">
                                            <p>
                                                San Marcos: Fiscalia denuncia ciaria a responsables de la toma de ciudad universitaria
                                            </p>
                                            <div class="row info">
                                                <div class="col-md-12">
                                                    <span class="etiqueta security">seguridad</span>
                                                    <span class="time"><i class="fa fa-clock-o"></i> hace 1 hora</span>
                                                    <span class="share">
                                                        <ul class="nav nav-pills pull-right"> 
                                                            <li role="presentation"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li role="presentation"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="img">
                                                <img src="<?= get_template_directory_uri()?>/assets/image/ultimas.png" alt="">
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                     <div class="col-md-3" id="aside_publi">
                        <div class="row">
                            <div id="news_ultimas_aside" class="col-md-12">
                                <div class="row item a">
                                    <div class="col-md-12">
                                        <a href="#" target="_blank">
                                            <img src="<?= get_template_directory_uri()?>/assets/image/aside.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <br>

                                <div class="row item">
                                    <div class="col-md-12">
                                        <div class="row cont primary">
                                            <div class="col-md-9 call">
                                                Central de Emergencia PNP
                                            </div>
                                            <div class="col-md-1">
                                                :
                                            </div>
                                            <div class="col-md-1">
                                                105
                                            </div>
                                        </div>
                                        <div class="row cont especial">
                                            <div class="col-md-9 call">
                                                Central de Bomberos CGBVP
                                            </div>
                                            <div class="col-md-1">
                                                :
                                            </div>
                                            <div class="col-md-1">
                                                116
                                            </div>
                                        </div>
                                        <div class="row cont cyber">
                                            <div class="col-md-9 call">
                                                Escuadron de Emergencia PNP
                                            </div>
                                            <div class="col-md-1">
                                                :
                                            </div>
                                            <div class="col-md-1">
                                                482-8988
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row item zonas_p">
                                    <div class="col-md-12" id="zonas_peligro">
                                        <div class="header">
                                            <h5>Zonas <span>Peligrosas</span></h5>
                                        </div>
                                        <a href="#" target="_blank">
                                            <img src="<?= get_template_directory_uri()?>/assets/image/zonas_peligro.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-md-12" id="senati_publi">
                                        <a href="#" target="_blank">
                                            <img src="<?= get_template_directory_uri()?>/assets/image/aside2.png" alt="">
                                        </a>
                                    </div>
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
