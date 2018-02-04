    <footer>
    	<section id="pre-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
            			<h5>Secciones</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3" class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="<?php echo bloginfo('name'); ?>">
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <div class="row">
            				<div class="col-xs-6">
                                <?php echo get_menu_footer('menu-footer-box-1'); ?>
            				</div>
            				<div class="col-xs-6">
                                <?php echo get_menu_footer('menu-footer-box-2'); ?>
            				</div>
            			</div>
            		</div>
            		<div class="col-xs-3">
                        <div class="data">
                            <?php
                                if ( is_active_sidebar( 'widget-footer-box-3' ) ) :
                                    dynamic_sidebar( 'widget-footer-box-3' );
                                endif;
                            ?>
                        </div>
            		</div>
                </div>
            </div>
    	</section>
    	<section id="copy">
            <div class="container">
                <div class="col-xs-12">
                    <?php
                        if ( is_active_sidebar( 'widget-footer-copy' ) ) :
                            dynamic_sidebar( 'widget-footer-copy' );
                        endif;
                    ?>
                </div>
            </div>
    	</section>
    </footer>
    <div class="modal fade" id="modal-contacto" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"></div>
                <div class="modal-body" id="form_contact">
                    <div id="tittle">
                        <h1>Contactenos</h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/map.png" alt="">
                    </div>
                    <?php
                        echo do_shortcode('[contact-form-7 id="36" title="Formulario de Contacto Modal"]');
                    ?>
                </div>
                <div class="modal-footer"></div>        
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/jquery/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/carrousel/files/owl.carousel.js"></script>
    <script>
     	$(document).ready(function() {
            var prev = "<i class='fa fa-caret-left'></i>";
            var next = "<i class='fa fa-caret-right'></i>";
    		var owl = $("#slider_videos").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
    		    items : 4,
    		    itemsDesktop : [1199,3],
               	itemsDesktopSmall : [979,3],
    		    stopOnHover : true,
    		    navigation : true,
                navigationText : [prev, next],
                autoWidth: true
    		});
                  // Custom Navigation Events
            $(".next").click(function(){
                owl.trigger('owl.next');
            })
            $(".prev").click(function(){
                owl.trigger('owl.prev');
            })
            $( ".item-214" ).click(function() {
                $('#modal-contacto').modal('show');
            });
            $( ".item-215" ).click(function() {
                $('#modal-contacto').modal('show');
            });
		});
     </script>
    <?php wp_footer(); ?>
  </body>
</html>
