<?php //Packages

add_action( 'init', 'register_packages' );
    function register_packages() {

      $labels = array(
        'name' => _x('Packages', 'post type general name'),
        'singular_name' => _x('Packages', 'post type singular name'),
        'add_new' => _x('Adicionar Novo', 'Packages'),
        'add_new_item' => __('Adicionar Novo Packages'),
        'edit_item' => __('Edit Packages'),
        'new_item' => __('New Packages'),
        'all_items' => __('Todos Packages'),
        'view_item' => __('Ver Packages'),
        'search_items' => __('Search Packages'),
        'not_found' =>  __('No Packages found'),
        'not_found_in_trash' => __('No Packages found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => __('Packages')
 
      );      
	  $args = array(
        'labels' => $labels,
        'public' => true,
         'menu_icon'  => 'dashicons-tickets-alt',
        'publicly_queryable' => true,
        'show_ui' => true,
        'has_archive' => true,
        'show_in_menu' => true,
        'query_var' => true,
        "rewrite" => [
            "with_front" => true
        ],
       // "cptp_permalink_structure" => "%post_id%",
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
      );
      register_post_type('packages',$args);
	  
}



  //TAXONOMIA Packages
  
  
  $labels = array(
    'name' => _x( 'Regions', 'taxonomy general name' ),
    'singular_name' => _x( 'Regions', 'taxonomy singular name' ),
    'search_items' =>  __( 'Regions' ),
    'all_items' => __( 'All Regions' ),
    'parent_item' => __( 'Parent Regions' ),
    'parent_item_colon' => __( 'Parent Regions' ),
    'edit_item' => __( 'Edit Regions' ), 
    'update_item' => __( 'Update Regions' ),
    'add_new_item' => __( 'Add New Regions' ),
    'new_item_name' => __( 'New Regions' ),
    'menu_name' => __( 'Regions' ),
  );    

  register_taxonomy('regions',array('packages','activities'), array( 
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'rewrite' => array( 'slug' => 'regions', 'with_front' => false ),
  ));  


  //TAXONOMIA Price
  
  /*
  $labels = array(
    'name' => _x( 'Price', 'taxonomy general name' ),
    'singular_name' => _x( 'Price', 'taxonomy singular name' ),
    'search_items' =>  __( 'Price' ),
    'all_items' => __( 'All Price' ),
    'parent_item' => __( 'Parent Price' ),
    'parent_item_colon' => __( 'Parent Price' ),
    'edit_item' => __( 'Edit Price' ), 
    'update_item' => __( 'Update Price' ),
    'add_new_item' => __( 'Add New Price' ),
    'new_item_name' => __( 'New Price' ),
    'menu_name' => __( 'Price' ),
  );    

  register_taxonomy('price',array('packages','activities'), array( 
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'rewrite' => array( 'slug' => 'price', 'with_front' => false ),
  ));  

*/

//Activities

add_action( 'init', 'register_activities' );
    function register_activities() {

      $labels = array(
        'name' => _x('Activities', 'post type general name'),
        'singular_name' => _x('Activities', 'post type singular name'),
        'add_new' => _x('Adicionar Novo', 'Activities'),
        'add_new_item' => __('Adicionar Novo Activities'),
        'edit_item' => __('Edit Activities'),
        'new_item' => __('New Activities'),
        'all_items' => __('Todos Activities'),
        'view_item' => __('Ver Activities'),
        'search_items' => __('Search Activities'),
        'not_found' =>  __('No Activities found'),
        'not_found_in_trash' => __('No Activities found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => __('Activities')
 
      );      
	  $args = array(
        'labels' => $labels,
        'public' => true,
         'menu_icon'  => 'dashicons-location-alt',
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        "rewrite" => [
            "with_front" => true
        ],
        'capability_type' => 'post',
        'hierarchical' => false, 
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
      );
      register_post_type('activities',$args);
	  
}



  //TAXONOMIA Options
  
  
  $labels = array(
    'name' => _x( 'Options', 'taxonomy general name' ),
    'singular_name' => _x( 'Options', 'taxonomy singular name' ),
    'search_items' =>  __( 'Options' ),
    'all_items' => __( 'All Options' ),
    'parent_item' => __( 'Parent Options' ),
    'parent_item_colon' => __( 'Parent Options' ),
    'edit_item' => __( 'Edit Options' ), 
    'update_item' => __( 'Update Options' ),
    'add_new_item' => __( 'Add New Options' ),
    'new_item_name' => __( 'New Options' ),
    'menu_name' => __( 'Options' ),
  );    

  register_taxonomy('options',array('packages','activities'), array( 
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'rewrite' => array( 'slug' => 'options', 'with_front' => false ),
  ));  


