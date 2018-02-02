<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	    	<div class="container">
        		<div class="row" id="about">
        			<div class="col-xs-12">
        				<div class="content-header-shadow"></div>
        				<div class="content-header">
        				    <div class="row" id="nosotros">
        				        <div class="col-md-12">
        				            <h1 class="tittles">
        							    Nosotros
        							</h2>
        				        </div>
                                <div class="col-md-9">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt aspernatur provident, omnis cumque architecto. Deserunt dolorem, officia tenetur, nesciunt molestiae ratione reiciendis deleniti, cum asperiores natus similique! Aperiam, amet, possimus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis maiores nobis tempora id quae fugit</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt aspernatur provident, omnis cumque architecto. Deserunt dolorem, officia tenetur, nesciunt molestiae ratione reiciendis deleniti, cum asperiores natus similique! Aperiam, amet, possimus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis maiores nobis tempora id quae fugit</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt aspernatur provident, omnis cumque architecto. Deserunt dolorem, officia tenetur, nesciunt molestiae ratione reiciendis deleniti, cum asperiores natus similique! Aperiam, amet, possimus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis maiores nobis tempora id quae fugit</p>
                                </div>
                                <div class="col-md-3">
                                    <img src="<?= get_template_directory_uri()?>/assets/image/book.jpg" >
                                </div>
        				    </div>
                            <hr>
                            <div class="row" id="mision">
                                <div class="col-md-6">
                                    <h1 class="tittles">
                                        Misión
                                    </h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non deserunt, ipsam velit! Omnis dolorum porro distinctio fugiat, commodi voluptatem, eligendi doloribus provident aliquam magni! Ut tenetur voluptatem alias unde accusamus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla corporis enim omnis, sequi sint ad ratione excepturi consectetur rerum dolorem nihil dolore repellendus reiciendis atque nesciunt ipsa recusandae modi et.
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="tittles">
                                        Visión
                                    </h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non deserunt, ipsam velit! Omnis dolorum porro distinctio fugiat, commodi voluptatem, eligendi doloribus provident aliquam magni! Ut tenetur voluptatem alias unde accusamus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla corporis enim omnis, sequi sint ad ratione excepturi consectetur rerum dolorem nihil dolore repellendus reiciendis atque nesciunt ipsa recusandae modi et.
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row" id="compromiso">
                                <div class="col-md-5" id="img-people">
                                    <img src="<?= get_template_directory_uri()?>/assets/image/people.jpg" alt="">
                                </div>
                                <div class="col-md-7">
                                    <h1 class="tittles">Nuestro Compromiso</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam suscipit mollitia, beatae voluptas eveniet quae fugiat recusandae, delectus laboriosam debitis ut dicta veritatis possimus vel quasi sunt minima corporis natus!</p>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam suscipit mollitia, beatae voluptas eveniet quae fugiat recusandae, delectus laboriosam debitis ut dicta veritatis possimus vel quasi sunt minima corporis natus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam suscipit mollitia, beatae voluptas eveniet quae fugiat recusandae, delectus laboriosam debitis ut dicta veritatis possimus vel quasi sunt minima corporis natus!</p>
                                </div>
                            </div>
        				</div>
        			</div>
        		</div>
        	</div>	
        	<div class="container contenido">
        		<div class="row">
        			<div class="col-md-12 view">
        				<div class="hr">
		        			<b>VEA TAMBIÉN</b><hr>
		        		</div>
        			</div>
        		</div>
				<section id="news_dest" class="row">
					<div class="item col-md-3">
						<img src="<?= get_template_directory_uri()?>/assets/image/dest.png" >
						<div class="row info">
							<div class="col-md-12 pd">
								<span class="etiqueta security">Seguridad</span>
								<span class="time"><i class="fa fa-clock-o"></i> hace 1 hora</span>
							<!--	<span class="share">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</span>-->
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
					<div class="item col-md-3">
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
					<div class="item col-md-3">
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
					<div class="item col-md-3">
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
        	</div>
        </section>
        		
		<?php get_template_part( 'template/aside', 'videos' ); ?>
	</div>
	<?php endwhile; ?>
<?php get_footer(); ?>
