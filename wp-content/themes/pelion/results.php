<?php get_header(); /* Template Name: Results */  ?>





<div class="banner-full d-flex text-center align-items-center" style="background: url('<?php bloginfo('template_url');  ?>/img/banner-regioes.jpg') center center no-repeat; background-size:cover;">
	<div class="container">
		<h1 class="title-cat text-center">Resultados</h1>
		<i><img src="<?php bloginfo('template_url'); ?>/img/icon-down.png"></i>
	</div>
</div>
<div class="container-full">
	<div id="content-main">
		<div class="container">
			<div class="row">
				<div class="col-9 col-lg-9 col-md-9 col-sm-12">
					<nav class="breadcrumb">
						<a class="breadcrumb-item" href="#">Home</a>

					</nav>
 
					<div id="main">
 
						<p><?php the_field('description_large');?> </p> 


		
							<div class="row">
								<?php $args = array('post_type' => 'packages');
								$args['search_filter_id'] = 63; 
								$query = new WP_Query($args);
								?>  


								<?php if ( $query-> have_posts() ) : while ( $query-> have_posts() ) : $query-> the_post(); ?>
									<?php   get_template_part("templates/loop", "post"); ?>
								<?php endwhile; else : ?>
								<div class="col">
									<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
								</div>
							<?php endif; ?>
							</div>
					</div>

			</div>
			<div class="col-3 col-lg-3 col-md-3 col-sm-12">
				<?php echo do_shortcode('[searchandfilter id="63"]'); ?>




			</div>
		</div>
	</div>
</div>
</div>


<?php get_footer (); ?>