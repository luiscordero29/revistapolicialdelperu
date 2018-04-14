<?php

# Post Thumbnails
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    # new size
    add_image_size( 'post-especial', 90, 120, array( 'top', 'center') ); 
    add_image_size( 'post-destacado', 270, 150, array( 'top', 'center') ); 
    add_image_size( 'post-lista', 265, 130, array( 'top', 'center') ); 
    add_image_size( 'post-verde', 240, 120, array( 'top', 'center') ); 
    add_image_size( 'post-video', 250, 150, array( 'top', 'center') ); 
}


# Listados de Widgets
add_action( 'widgets_init', 'syi_widgets_init' );
function syi_widgets_init()
{
    # TOPBANNER
    register_sidebar(
        array(
            'name'          => 'TOP BANNER',
            'id'            => 'widget-top-banner',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => 'TOP BANNER TEXT',
            'id'            => 'widget-top-banner-text',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => 'FOOTER BOX 3',
            'id'            => 'widget-footer-box-3',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => 'COPY',
            'id'            => 'widget-footer-copy',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => 'ASIDE SINGLE',
            'id'            => 'widget-aside-single',
            'before_widget' => '<div class="row item"><div class="col-md-12">',
            'after_widget'  => '</div></div>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => 'ASIDE HEADER',
            'id'            => 'widget-aside-header',
            'before_widget' => '<div class="row item"><div class="col-md-12">',
            'after_widget'  => '</div></div>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => 'ASIDE PAGE',
            'id'            => 'widget-aside-page',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => 'ASIDE PAGE DEFAULT',
            'id'            => 'widget-aside-page-default',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => 'ASIDE PAGE PREVENCIÓN',
            'id'            => 'widget-aside-page-prevencion',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => 'BOX FOOTER PRE MOBILE',
            'id'            => 'widget-pre-footer-mobile',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'name'          => 'BOX FOOTER MOBILE',
            'id'            => 'widget-footer-mobile',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
}

/*
    MENUS
*/
function register_menus()
{
    register_nav_menus(
        array(
         
            # menus
            'menu-main' => __( 'Menu Principal' ),
            'menu-main-mobile' => __( 'Menu Principal Mobile' ),
            'menu-mobile-social' => __( 'Menu Mobile Social' ),
            'menu-footer-box-1' => __( 'Menu Inferior Principal' ),
            'menu-footer-box-2' => __( 'Menu inferior Secundario' ),
        )
    );
}
add_action( 'init', 'register_menus' );

# menu
if (!function_exists('get_mainmenu')) {
    function get_mainmenu($menu)
    {
        $menu_name = $menu;
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $menu_list = '';
            foreach ( (array) $menu_items as $key => $menu_item ) {
                $class = '';
                foreach ($menu_item->classes  as $c) {
                    $class = $class.' '.$c;
                }
                $menu_list .= '<li class="border-right '. vince_check_active_menu($menu_item) .'">';
                $menu_list .= '<a target="' . $menu_item->target . '" class="item-' . $menu_item->ID . '" href="'. $menu_item->url .'">';
                $menu_list .= $menu_item->title;
                $menu_list .= '</a>';
                $menu_list .= '</li>';
            }
            $menu_list .= '';
        }
        if (!empty($menu_list)) {
            return $menu_list;
        }else{
            return '';
        }
    }
}

# menu
if (!function_exists('get_mobile_mainmenu')) {
    function get_mobile_mainmenu($menu)
    {
        $menu_name = $menu;
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $menu_list = '';
            $submenu = false; 
            $count = 0;
            foreach ( (array) $menu_items as $key => $menu_item ) {                
                if ( !$menu_item->menu_item_parent ){
                    // save this id for later comparison with sub-menu items
                    $parent_id = $menu_item->ID;   
                    if (!empty($menu_items[ $count + 1 ]->menu_item_parent)){
                        $menu_list .= '<li class="dropdown">';
                        $menu_list .= '<a class="dropdown-toggle" class="item-' . $menu_item->ID . '" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" target="' . $menu_item->target . '" href="'. $menu_item->url .'" title="'. $menu_item->title .'">';
                        $menu_list .= $menu_item->title;
                        $menu_list .= '<span class="caret"></span></a>';
                    }else{
                        $menu_list .= '<li>';
                        $menu_list .= '<a class="item-' . $menu_item->ID . '" target="' . $menu_item->target . '" href="'. $menu_item->url .'" title="'. $menu_item->title .'">';
                        $menu_list .= $menu_item->title;
                        $menu_list .= '</a>';
                        $menu_list .= '</li>';
                    }                        
                }
                if ( $parent_id == $menu_item->menu_item_parent ){
                    if ( !$submenu ){
                        $submenu = true;
                        $menu_list .= '<ul class="dropdown-menu-rrp">';
                    }
                    $menu_list .= '<li>';
                    $menu_list .= '<a class="item-' . $menu_item->ID . '" target="' . $menu_item->target . '" href="'. $menu_item->url .'" title="'. $menu_item->title .'">';
                    $menu_list .= $menu_item->title;
                    $menu_list .= '</a>';
                    $menu_list .= '</li>';
                    if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
                        $submenu = false;
                        $menu_list .= '</ul>';
                        $menu_list .= '</li>';
                    }
                }
                $count++;
            }
            $menu_list .= '';
        }
        if (!empty($menu_list)) {
            return $menu_list;
        }else{
            return '';
        }
    }
}

function vince_check_active_menu( $menu_item ) {
    $actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ( $actual_link == $menu_item->url ) {
        return 'active';
    }
    return '';
}

# menu
if (!function_exists('get_menu_footer')) {
    function get_menu_footer($menu)
    {
        $menu_name = $menu;
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $menu_list = '<ul>';
            foreach ( (array) $menu_items as $key => $menu_item ) {
                $class = '';
                foreach ($menu_item->classes  as $c) {
                    $class = $class.' '.$c;
                }
                $menu_list .= '<li>';
                $menu_list .= '<a class="item-' . $menu_item->ID . '" target="' . $menu_item->target . '" href="'. $menu_item->url .'">';
                $menu_list .= $menu_item->title;
                $menu_list .= '</a>';
                $menu_list .= '</li>';
            }
            $menu_list .= '</ul>';
        }
        if (!empty($menu_list)) {
            return $menu_list;
        }else{
            return '';
        }
    }
}

function the_excerpt_max_charlength($charlength) {
    $excerpt = get_the_excerpt();
    $charlength++;

    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            echo mb_substr( $subex, 0, $excut );
        } else {
            echo $subex;
        }
        echo '';
    } else {
        echo $excerpt;
    }
}

function the_max_charlength($text, $charlength) {
    $excerpt = $text;
    $charlength++;

    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            echo mb_substr( $subex, 0, $excut );
        } else {
            echo $subex;
        }
        echo '';
    } else {
        echo $excerpt;
    }
}

function post_type_video() {
    
    $labels = array(
        'name'               => _x( 'Videos', 'Videos Revista Policial', 'video' ),
        'singular_name'      => _x( 'Video', 'post type singular name', 'video' ),
        'menu_name'          => _x( 'Videos', 'admin menu', 'video' ),
        'name_admin_bar'     => _x( 'Video', 'add new on admin bar', 'video' ),
        'add_new'            => _x( 'Registrar Nuevo', 'Video', 'video' ),
        'add_new_item'       => __( 'Registrar Nuevo Video', 'video' ),
        'new_item'           => __( 'Nuevo Video', 'video' ),
        'edit_item'          => __( 'Editar Video', 'video' ),
        'view_item'          => __( 'Ver Video', 'video' ),
        'all_items'          => __( 'Todos Videos', 'video' ),
        'search_items'       => __( 'Buscar Videos', 'video' ),
        'parent_item_colon'  => __( 'Pariente Videos:', 'video' ),
        'not_found'          => __( 'No existe registros.', 'video' ),
        'not_found_in_trash' => __( 'No existe registros en Papelera.', 'video' )
    );

    $args = array(
        'labels'             => $labels,
                'description'        => __( 'Description.', 'video' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'video' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'video', $args );
}
add_action( 'init', 'post_type_video' );

function news_init() {
    // create a new taxonomy
    register_taxonomy(
        'news',
        'post',
        array(
            'label' => __( 'Tipo de Noticias' ),
            'rewrite' => array( 'slug' => 'news' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'news_init' );

class haceTanto extends DateTime {

    protected $strings = array(
        'y' => array('1 a&ntilde;o', '%d a&ntilde;os'),
        'm' => array('1 mes', '%d meses'),
        'd' => array('1 d&iacute;a', '%d dias'),
        'h' => array('1 hora', '%d horas'),
        'i' => array('1 min', '%d minutos'),
        's' => array('segundos', '%d segundos'),
    );
 
    public $profundidad;
 
    public function __construct( $fecha,$profundidad='i')
    {
        parent::__construct( $fecha );
        $this->profundidad = $profundidad;
 
    }
 
 
    public function __toString() {
         try 
        {  
            $now = new DateTime('now');
            $diff = $this->diff($now);
 
            /*foreach($this->strings as $key => $value){
 
                if( ($text .= ' '.$this->getDiffText($key, $diff)) ){
 
                }
                if($this->profundidad == $key) break;
            }*/
            foreach($this->strings as $key => $value){
                $dato=$this->getDiffText($key, $diff);
                if($dato!=null ){
                $text .=''.$dato;
                break;
                }
            }
          //  return $diff;
            return $text;   
        } 
        catch(Exception $e) 
        {  
            trigger_error($e->getMessage(), E_USER_ERROR);  
            return '';  
        }  
 
 
    }
 
    protected function getDiffText($intervalKey, $diff){
        $pluralKey = 1;
        $value = $diff->$intervalKey;
        if($value > 0){
            if($value < 2){
                $pluralKey = 0;
            }
            return sprintf($this->strings[$intervalKey][$pluralKey], $value);
        }
        return null;
    }
}

