<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/carrousel/files/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/carrousel/files/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/carrousel/files/owl.theme.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php if (is_user_logged_in()): ?>
        <style type="text/css">
            header {
            	top: 32px;
            }
        </style>
    <?php endif;  ?>
    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/custom/custom.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
</head>
<body>
    <?php if ( is_active_sidebar( 'widget-top-banner' ) ): ?> 
    <section class="top-banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php dynamic_sidebar( 'widget-top-banner' ); ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif ?>
    <?php if ( is_active_sidebar( 'widget-top-banner-text' ) ): ?> 
    <section class="top-banner-text">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php dynamic_sidebar( 'widget-top-banner-text' ); ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif ?>

    <section id="banner-gun"></section>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="header-logo">
                    <center>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="<?php echo bloginfo('name'); ?>">
                        </a>
                    </center>
                </div>
            </div>
            <div class="col-xs-12">
                <nav id="navbar-header" class="navbar navbar-default">
                    <div class="container-fluid">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">                            
                            <li class="border-right">
                                <a target="" class="item-home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo_nav.png">
                                </a>
                            </li>                            
                            <?php echo get_mainmenu('menu-main'); ?>
                        </ul>
                        <?php get_search_form(); ?>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>