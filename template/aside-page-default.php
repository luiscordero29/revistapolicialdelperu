<?php
    if (is_page( 'prevencion' )) {
		if ( is_active_sidebar( 'widget-aside-page-prevencion' ) ){
        	dynamic_sidebar( 'widget-aside-page-prevencion' );
		}
	}elseif (is_page( 'orientacion' )) {
		if ( is_active_sidebar( 'widget-aside-page-prevencion' ) ){
        	dynamic_sidebar( 'widget-aside-page-prevencion' );
		}
	}else{
		if ( is_active_sidebar( 'widget-aside-page-default' ) ){
        	dynamic_sidebar( 'widget-aside-page-default' );
		}
   	}
?>