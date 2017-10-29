<?php function misha_filter_function(){
	$args = array(
		'orderby' => 'date', // we will sort posts by date
		'order'	=> $_POST['date'] // ASC или DESC
	);
 

	// for taxonomies / categories
	if( isset( $_POST['categoryfilter']) && isset( $_POST['teste']  ) ){
		$args['tax_query'] = array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'options',
				'field' => 'id',
				'terms' => $_POST['categoryfilter']
			
			),
				array(
				'taxonomy' => 'price',
				'field' => 'id',
				'terms' => $_POST['teste']
			
			)
			);

		} else{
			$args['tax_query'] = array(
			array(
				'taxonomy' => 'options',
				'field' => 'id',
				'terms' => $_POST['categoryfilter']
			
			),
			);
		}
 


print_r($args);
 

	// create $args['meta_query'] array if one of the following fields is filled
	if( isset( $_POST['price_min'] ) && $_POST['price_min'] || isset( $_POST['price_max'] ) && $_POST['price_max'] || isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
		$args['meta_query'] = array( 'relation'=>'AND' ); // AND means that all conditions of meta_query should be true
 
	// if both minimum price and maximum price are specified we will use BETWEEN comparison
	if( isset( $_POST['price_min'] ) && $_POST['price_min'] && isset( $_POST['price_max'] ) && $_POST['price_max'] ) {
		$args['meta_query'][] = array(
			'key' => '_price',
			'value' => array( $_POST['price_min'], $_POST['price_max'] ),
			'type' => 'numeric',
			'compare' => 'between'
		);
	} else {
		// if only min price is set
		if( isset( $_POST['price_min'] ) && $_POST['price_min'] )
			$args['meta_query'][] = array(
				'key' => '_price',
				'value' => $_POST['price_min'],
				'type' => 'numeric',
				'compare' => '>'
			);
 
		// if only max price is set
		if( isset( $_POST['price_max'] ) && $_POST['price_max'] )
			$args['meta_query'][] = array(
				'key' => '_price',
				'value' => $_POST['price_max'],
				'type' => 'numeric',
				'compare' => '<'
			);
	}
 
 
	// if post thumbnail is set
	if( isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
		$args['meta_query'][] = array(
			'key' => '_thumbnail_id',
			'compare' => 'EXISTS'
		); 




	$query = new WP_Query( $args );
 
	if( $query->have_posts() ) :
		echo '<div id="item-loop-cat">';
		echo '<div class="row">';
		while( $query->have_posts() ): $query->the_post(); ?>	
		<?php   get_template_part("templates/loop", "post"); ?>
	<?php 	endwhile;
	echo '</div>';
	echo '</div>';
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;
 
	die();
}
 
 
add_action('wp_ajax_myfilter', 'misha_filter_function'); 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');