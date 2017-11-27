<?php //Packages

add_action( 'init', 'register_packages' );
    function register_packages() {

      $labels = array(
        'name' => _x('Packages', 'post type general name'),
        'singular_name' => _x('Packages', 'post type singular name'),
        'add_new' => _x('Add New', 'Packages'),
        'add_new_item' => __('Add New Packages'),
        'edit_item' => __('Edit Packages'),
        'new_item' => __('New Packages'),
        'all_items' => __('All Packages'),
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
         'menu_icon'  => 'dashicons-palmtree',
        'publicly_queryable' => true,
        'show_ui' => true,
        'has_archive' => false,
        'show_in_menu' => true,
        'query_var' => true,
       "rewrite" => [
            "with_front" => true
        ], 
       // "cptp_permalink_structure" => "/region/%regions%/%postname%/",
       // "cptp_permalink_structure" => "%post_id%",
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','revisions')
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

  register_taxonomy('regions',array('packages'), array(  
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'rewrite' => array( 'slug' => 'regions', 'with_front' => false ),
  ));  





add_action( 'init', 'create_tag_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Season', 'taxonomy general name' ),
    'singular_name' => _x( 'Season', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Seasons' ),
    'popular_items' => __( 'Popular Seasons' ),
    'all_items' => __( 'All Seasons' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Season' ), 
    'update_item' => __( 'Update Season' ),
    'add_new_item' => __( 'Add New Season' ),
    'new_item_name' => __( 'New Season Name' ),
    'separate_items_with_commas' => __( 'Separate Seasons with commas' ),
    'add_or_remove_items' => __( 'Add or remove Seasons' ),
    'choose_from_most_used' => __( 'Choose from the most used Seasons' ),
    'menu_name' => __( 'Seasons' ),
  ); 

  register_taxonomy('seasons','packages',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'seasons' ),
  ));
}


 


add_action( 'init', 'create_tag_taxonomies2', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies2() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Theme', 'taxonomy general name' ),
    'singular_name' => _x( 'Theme', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Themes' ),
    'popular_items' => __( 'Popular Themes' ),
    'all_items' => __( 'All Themes' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Theme' ), 
    'update_item' => __( 'Update Theme' ),
    'add_new_item' => __( 'Add New Theme' ),
    'new_item_name' => __( 'New Theme Name' ),
    'separate_items_with_commas' => __( 'Separate Themes with commas' ),
    'add_or_remove_items' => __( 'Add or remove Themes' ),
    'choose_from_most_used' => __( 'Choose from the most used Themes' ),
    'menu_name' => __( 'Themes' ),
  ); 

  register_taxonomy('theme','packages',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'theme' ),
  ));
}
 


add_action( 'init', 'create_tag_taxonomies3', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies3() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Travel Style', 'taxonomy general name' ),
    'singular_name' => _x( 'Travel Style', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Travel Styles' ),
    'popular_items' => __( 'Popular Travel Styles' ),
    'all_items' => __( 'All Travel Styles' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Travel Style' ), 
    'update_item' => __( 'Update Travel Style' ),
    'add_new_item' => __( 'Add New Travel Style' ),
    'new_item_name' => __( 'New Travel Style Name' ),
    'separate_items_with_commas' => __( 'Separate Travel Styles with commas' ),
    'add_or_remove_items' => __( 'Add or remove Travel Styles' ),
    'choose_from_most_used' => __( 'Choose from the most used Travel Styles' ),
    'menu_name' => __( 'Travel Styles' ),
  ); 

  register_taxonomy('travel-style','packages',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'travel-style' ),
  ));
}






add_action( 'init', 'create_tag_taxonomies4', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies4() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Suitable for', 'taxonomy general name' ),
    'singular_name' => _x( 'Suitable for', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Suitable fors' ),
    'popular_items' => __( 'Popular Suitable fors' ),
    'all_items' => __( 'All Suitable fors' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Suitable for' ), 
    'update_item' => __( 'Update Suitable for' ),
    'add_new_item' => __( 'Add New Suitable for' ),
    'new_item_name' => __( 'New Suitable for Name' ),
    'separate_items_with_commas' => __( 'Separate Suitable fors with commas' ),
    'add_or_remove_items' => __( 'Add or remove Suitable fors' ),
    'choose_from_most_used' => __( 'Choose from the most used Suitable fors' ),
    'menu_name' => __( 'Suitable fors' ),
  ); 

  register_taxonomy('suitable','packages',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'suitable' ),
  ));
}



add_action( 'init', 'create_tag_taxonomies5', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies5() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Difficulty', 'taxonomy general name' ),
    'singular_name' => _x( 'Difficulty', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Difficultys' ),
    'popular_items' => __( 'Popular Difficultys' ),
    'all_items' => __( 'All Difficultys' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Difficulty' ), 
    'update_item' => __( 'Update Difficulty' ),
    'add_new_item' => __( 'Add New Difficulty' ),
    'new_item_name' => __( 'New Difficulty Name' ),
    'separate_items_with_commas' => __( 'Separate Difficultys with commas' ),
    'add_or_remove_items' => __( 'Add or remove Difficultys' ),
    'choose_from_most_used' => __( 'Choose from the most used Difficultys' ),
    'menu_name' => __( 'Difficultys' ),
  ); 

  register_taxonomy('difficulty','packages',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'difficulty' ),
  ));
}
 
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
        'add_new' => _x('Add New', 'Activities'),
        'add_new_item' => __('Add New Activities'),
        'edit_item' => __('Edit Activities'),
        'new_item' => __('New Activities'),
        'all_items' => __('All Activities'),
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
         'menu_icon'  => 'dashicons-camera',
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




//Accomodation

add_action( 'init', 'register_accomodations' );
    function register_accomodations() {

      $labels = array(
        'name' => _x('Accomodations', 'post type general name'),
        'singular_name' => _x('Accomodation', 'post type singular name'),
        'add_new' => _x('Add New', 'Accomodations'),
        'add_new_item' => __('Add New Accomodations'),
        'edit_item' => __('Edit Accomodations'),
        'new_item' => __('New Accomodations'),
        'all_items' => __('All Accomodatios'),
        'view_item' => __('See Accomodations'),
        'search_items' => __('Search Accomodations'),
        'not_found' =>  __('No Accomodations found'),
        'not_found_in_trash' => __('No Accomodations found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => __('Accomodations') 
 
      );      
      $args = array(
        'labels' => $labels,
        'public' => true,
         'menu_icon'  => 'dashicons-admin-home',
        'publicly_queryable' => true,
        'show_ui' => true,
        //'has_archive' => true,
        'show_in_menu' => true,
        'query_var' => true, 
       'rewrite' => array('slug' => 'accomodation', 'with_front' => true ),
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'excerpt','revisions')
      );
      register_post_type('accomodations',$args);
      
}


//Reviews

add_action( 'init', 'register_reviews' );
    function register_reviews() {

      $labels = array(
        'name' => _x('Reviews', 'post type general name'),
        'singular_name' => _x('Reviews', 'post type singular name'),
        'add_new' => _x('Add New', 'Reviews'),
        'add_new_item' => __('Add New Reviews'),
        'edit_item' => __('Edit Reviews'),
        'new_item' => __('New Reviews'),
        'all_items' => __('All Reviews'),
        'view_item' => __('See Packages'),
        'search_items' => __('Search Reviews'),
        'not_found' =>  __('No Reviews found'),
        'not_found_in_trash' => __('No Reviews found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => __('Reviews')
 
      );      
      $args = array(
        'labels' => $labels,
        'public' => true,
         'menu_icon'  => 'dashicons-star-filled',
        'publicly_queryable' => true,
        'show_ui' => true,
        //'has_archive' => true,
        'show_in_menu' => true,
        'query_var' => true, 
       'rewrite' => array('slug' => 'review', 'with_front' => true ),
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'excerpt','revisions')
      );
      register_post_type('reviews',$args);
      
}