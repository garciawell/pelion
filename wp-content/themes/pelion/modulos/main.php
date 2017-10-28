<?php
function my_vc_shortcode( $atts ) { ?>  

<div  class="container-fuild carrossel-woo"> 
	<div  class="container">
		<div  class="row">
			<div  class="col-md-6 col-sm-12 col-xs-12">
				<div  class="header-slider">
					<h3 class="title-bolder">Aero Hokey</h3>

					<p class="desc-produto"> We are a passionate about the web bunch of
					fellas that love & take pride in their work</p>
				</div>
				<ul class="owl-carousel owl-carousel-single products">
					<?php
					$args = array(
						'post_type' => 'product',
						'product_cat' => 'aero-hockey'
					);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<li class="item" <?php /*post_class(); */?>>
							<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
	<a href="<?php the_permalink(); ?>" class="btn btn-more">Mais Detalhes</a>
</li>
<?php endwhile;
} else {
	echo __( 'No products found' );
}
wp_reset_postdata();
?>
</ul><!--/.products-->
</div>

<div  class="col-md-6 col-sm-12 col-xs-12">
	<div  class="header-slider">

		<h3 class="title-bolder">Pebolim</h3>

		<p class="desc-produto"> We are a passionate about the web bunch of
		fellas that love & take pride in their work</p>
	</div>
	<ul class="products owl-carousel-single owl-carousel">
		<?php
		$args = array(
			'post_type' => 'product',
			'post_type' => 'product',
			'product_cat' => 'pebolim'
		);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<li class="item" <?php /*post_class(); */?>>
				<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10 
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>

	<a href="<?php the_permalink(); ?>" class="btn btn-more">Mais Detalhes</a>
</li>
<?php endwhile;
} else {
	echo __( 'No products found' );
}
wp_reset_postdata();
?>
</ul><!--/.products-->
</div>
</div> 
</div>
</div>
<?php
}
add_shortcode( 'my_vc_php_output', 'my_vc_shortcode');


function my_vc_shortcode2( $atts ) { ?>  

<div  class="container-fuild carrossel-woo list"> 
	<div  class="container">
		<div  class="row">

			<div  class="col-md-12 col-sm-12 col-xs-12">
				<ul class="row products">
					<?php
					$args = array(
						'post_type' => 'product', 
						'product_cat' => 'diversao-finais-semana'
					);
					$loop   = new WP_Query( $args );
					if ( $loop->have_posts() ) { 
						$i=1; while ( $loop->have_posts() ) : $loop->the_post();  ?>
						<li class="col-md-4">
							<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10 
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>

<!-- Button trigger modal -->
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal<?php echo $i;?>">
			  Solicitar uma proposta
			</button>

			<!-- Modal -->
			<div class="modal fade" id="modal<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel"><?php the_title(); ?></h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div> 
			      <div class="modal-body">
			      	<?php echo do_shortcode('[contact-form-7 id="377" title="Solicite uma proposta produtos"]'); ?>
			      </div>
			    </div>
			  </div>
			</div>


</li>
<?php $i++; endwhile; 
} else {
	echo __( 'No products found' );
}
wp_reset_postdata();
?>
</ul><!--/.products-->
</div>
</div>
</div>
</div>
<?php
}
add_shortcode( 'my_vc_php_output2', 'my_vc_shortcode2');