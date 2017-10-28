<?php
//define('WP_HOME','http://inundaweb.com.br');
//define('WP_SITEURL','http://inundaweb.com.br'); 





// Chamando JS 
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// Chamando JS e CSS 
function theme_scripts() {	   
	wp_enqueue_style ( 'css-minify', get_template_directory_uri() . '/css/libs.css' );  
	wp_enqueue_style ( 'css-padrao', get_template_directory_uri() . '/style.css' ); 	   
	wp_enqueue_script( 'js-topo', get_template_directory_uri() . '/js/libs-bottom.js', array(), '1.0.0', true);  

	wp_enqueue_script('js-rodape', get_template_directory_uri() . '/js/libs.js', array(), '1.0.0', false);

}




// Registrando Sidebar

register_sidebar(array(
	'name' => 'Blog',
	'before_widget' => '<div class="side-blog">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="tl-cat">',
	'after_title' => '</h4>',
));	


// Registrando Sidebar RODAPE

register_sidebar(array(
	'name' => 'Rodape 1',
	'id' => 'rodape-1',
	'before_widget' => '<div class="side-blog">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="tl-cat">',
	'after_title' => '</h4>',
));	
// Registrando Sidebar RODAPE2

register_sidebar(array(
	'name' => 'Rodape 2',
	'id' => 'rodape-2', 
	'before_widget' => '<div class="side-blog">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="tl-cat">',
	'after_title' => '</h4>',
));	
		// Registrando Sidebar RODAPE3

register_sidebar(array(
	'name' => 'Rodape 3',
	'id' => 'rodape-3',
	'before_widget' => '<div class="side-blog">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="tl-cat">',
	'after_title' => '</h4>',
));	

		// Registrando Sidebar RODAPE4

register_sidebar(array(
	'name' => 'Rodape 4',
	'id' => 'rodape-4',
	'before_widget' => '<div class="side-blog">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="tl-cat">',
	'after_title' => '</h4>',
));	





// Habilitar Menus e Post Thumbnails
register_nav_menus(); 
add_theme_support( 'post-thumbnails' );	
// add_image_size('foto-gd',760,380,true);
////add_image_size('Postos',600,450,true);
////add_image_size('servicos',600,450,true);
////add_image_size('capacitacao',600,350,true);
//add_image_size('circle',275,275,true);
//add_image_size('franqueado',200,200,true);
//add_image_size('parceiros',190,190,true);
//add_image_size('blog-home',600,450,true);
//add_image_size('blog-peq',350,250,true);
//add_image_size('blog-gd',900,400,true);
//add_image_size('galeria',200,90,true);
//add_image_size('circulo-landing',350,350,true);


/**************TITAN FRAMEWORKER*** Opções WordPress*********************/
// require_once( 'titan-framework-checker.php' ); 
require_once( 'plugins/titan-framework/titan-framework-embedder.php' );

require_once( 'modulos/opcoes.php' );
require_once( 'modulos/main.php' );


function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'menu' => 'menu',
        'fallback_cb'=> 'default_page_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}

function default_page_menu() {
   wp_list_pages('title_li=');
}
/**********DESCRICAO WOOCOMERCE***********/
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_single_excerpt', 5);


/**********BREADCRUMB WOOCOMERCE***********/

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><div class="container">',
            'wrap_after'  => '</div></nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}
