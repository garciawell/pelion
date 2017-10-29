<?php get_header(); /* Template Name: Home*/ ?>
<div class="slider container-full">
	<?php echo do_shortcode('[rev_slider alias="home"]');?>
</div>

<div class="container-full">
	<div id="content-main">
		<div class="container">
			<div class="row">


				<?php 
				$new_query = new WP_Query( array(
					'posts_per_page' => 14,
					'post_type'      => packages,
					'orderby'        => 'menu_order'
				   // 'paged'          => $paged
				) );

				while ( $new_query->have_posts() ) : $new_query->the_post();  ?>

						<?php   get_template_part("templates/loop", "post-4"); ?>

			<?php endwhile;  
			wp_reset_postdata();

			?>



		</div>
	</div>
</div>
</div>

<?php get_footer (); ?>  	 