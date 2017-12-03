<?php
//define('WP_HOME','http://site.com.br');
//define('WP_SITEURL','http://site.com.br'); 





// Chamando JS 
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// Chamando JS e CSS 
function theme_scripts() {	   
	wp_enqueue_style ( 'css-minify', get_template_directory_uri() . '/css/libs.css' );  
	wp_enqueue_style ( 'css-padrao', get_template_directory_uri() . '/style.min.css' ); 	   
	wp_enqueue_style ( 'css-padrao', get_template_directory_uri() . '/style.css' ); 	   
	//wp_enqueue_script( 'js-topo', get_template_directory_uri() . '/js/libs-bottom.js', array(), '1.0.0', true);  
	wp_enqueue_script('js-rodape', get_template_directory_uri() . '/js/libs.js', array(), '1.0.0', false);
	//wp_enqueue_script('js-java', get_template_directory_uri() . '/js/java.js', NULL, 1.0, true); 
	//wp_enqueue_script('js-java', get_template_directory_uri() . '/js/java.js',  1.0, true);  
} 




//Exclude child Terms
function is_child($term,$taxonomy) {
    $check = get_ancestors($term->term_id,$taxonomy);
    if (!empty($check)) { return true;} else { return false;}
}





////////////////SHORTCODE
function caption_shortcode( $atts, $content = null ) {

	?>

<section class="bloco-build">
	<div class="row align-items-center">
		<div class="col-md-12 col-lg-7 col-sm-12 col-12">
			<h4>PERSONALIZED TRIP IN 3 STEPS</h4>

		</div>		
		<div class="col-md-12 col-lg-5 col-sm-12 col-12">
			<a href="" class="pull-right btn btn-outline-secondary">BUILD YOUR TRIP!</a> 

		</div>
	</div>		
	<div class="row align-items-center no-gutters  mg-tp">
		<div class="col-md-3 col-lg-3 col-sm-12 col-12">
			<span><i class="icon-travel"></i><em>1) </em> TRAVEL STYLE</span>

		</div>		
		<div class="col-md-5  text-center col-lg-5 col-sm-12 col-12">
			<span><i class="icon-acco"></i><em>2) </em> ACCOMMODATION STYLE</span>

		</div>			
		<div class="col-md-4 col-lg-4 col-sm-12 col-12">
			<span><i class="icon-perso"></i><em>3) </em> PERSONAL INFORMATION</span> 

		</div>
	</div>
</section>

<?php  



}
add_shortcode( 'personalized', 'caption_shortcode' );


// Registrando Sidebar

register_sidebar(array(
	'name' => 'Blog',
	'before_widget' => '<div class="side-blog">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="tl-cat">',
	'after_title' => '</h4>',
));	




/**********LIMITAR EXCERPT******************************/
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

// Registrando Sidebar RODAPE

register_sidebar(array(
	'name' => 'Rodape 1',
	'id' => 'rodape-1',
	'before_widget' => '<div class="block-rodape1">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="tl-cat">',
	'after_title' => '</h4>',
));	
// Registrando Sidebar RODAPE2

register_sidebar(array(
	'name' => 'Rodape 2',
	'id' => 'rodape-2', 
	'before_widget' => '<div class="block-rodape2">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="tl-cat">',
	'after_title' => '</h4>',
));	
		// Registrando Sidebar RODAPE3

register_sidebar(array(
	'name' => 'Rodape 3',
	'id' => 'rodape-3',
	'before_widget' => '<div class="block-rodape3">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="tl-cat">',
	'after_title' => '</h4>',
));	

		// Registrando Sidebar RODAPE4

register_sidebar(array(
	'name' => 'Rodape 4',
	'id' => 'rodape-4',
	'before_widget' => '<div class="block-rodape4">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="tl-cat">',
	'after_title' => '</h4>',
));	




// Habilitar Menus e Post Thumbnails
register_nav_menus(); 
add_theme_support( 'post-thumbnails' );	
 add_image_size('padrao',280,250,true);
 add_image_size('padrao-md',300,400,true);
 add_image_size('full-interna',1000,600,true); 
 add_image_size('thumb-galeria',130,80,true); 
  add_image_size('resume',280,250,true);


/**************TITAN FRAMEWORKER*** Opções WordPress*********************/
// require_once( 'titan-framework-checker.php' ); 
require_once( 'plugins/titan-framework/titan-framework-embedder.php' );

require_once( 'modulos/opcoes.php' );
require_once( 'modulos/post-types.php' );
require_once( 'modulos/filtro.php' );



/***************MENU RESPONSIVO***********/
function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'menu' => 'Menu Principal',
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





/*****************LIMITAR BUSCA POST TYPE************************/
function searchfilter($query) {
 
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('packages','accommodations','activities'));
    }
 
return $query;
}
 
add_filter('pre_get_posts','searchfilter');
