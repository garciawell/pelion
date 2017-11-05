<?php get_header(); /* Template Name: Results */  ?>





<div class="banner-full d-flex  align-items-center" style="background-image: url('<?php  echo $thumbnail = get_field('imagem_categoria', $queried_object);  ?>');">
	<div class="container">
		<h1 class="title-cat text-center"><?php single_cat_title();  ?></h1>
		<span class="subtitle-cat text-center"><?php echo category_description(); ?> </span>
	</div>
</div>
<div class="container-full">
	<div id="content-main">
		<div class="container">
			<div class="row">
				<div class="col-9 col-lg-9 col-md-9 col-sm-12">
					<nav class="breadcrumb">
						<a class="breadcrumb-item" href="#">Home</a>
						<a class="breadcrumb-item" href="#">Regions</a>
						<a class="breadcrumb-item active" href="#">
						<?php   // Get terms for post
						$terms = get_the_terms( $post->ID , 'regions' );
							 // Loop over each item since it's an array
						if ( $terms != null ){ 
							foreach( $terms as $term ) {
								print $term->name ;
								unset($term);  
							} } ?>

						</a>

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