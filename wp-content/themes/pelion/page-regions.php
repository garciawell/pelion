<?php get_header();?>

<div class="banner-full regions d-flex  align-items-center text-center"  style="background: url('<?php  echo  get_field('banner' );?>') center center no-repeat; background-size: cover;">
	<div class="container">
		<h1 class="title-white"><?php the_title(); ?></h1>
		<div class="desc-top-white"><?php the_content(); ?></div>
	</div>
</div>



<?php
// Start the loop.
while ( have_posts() ) : the_post(); ?>
<div class="container-full">
	<div id="content-main" class="page-regions">
		<div class="container">
			<div class="bloco-cat">
				<div class="row">
					<?php   // Get terms for post
					$terms = get_terms( 'regions' );
				 // Loop over each item since it's an array
					if ( $terms != null ){ 
						foreach( $terms as $term ) { ?>
						<div class="col">
							<div class="col-in" style="background-image: url('<?php  echo $custom_field = get_field('imagem_categoria', $term ); ?>');">
								<span class="subtitle-cat"><?php the_field('subtitle', $term ); ?></span>

								<h2 class="title-cat-pag"><?php echo  $term->name; ?></h2>

							</div>
						</div>
						<?php } 
					} ?>
				</div>
			</div>


			<div class="bloco-inf-cat">
				<h3 class="title-grey text-center"><?php the_field('title_inf_cat'); ?></h3>
				<div class="row mg-tp">

					<?php
					if( have_rows('block_information') ):
						while ( have_rows('block_information') ) : the_row(); ?>
						<div class="col-4 col-md-4 col-sm-12">
							<div class="col-line text-center">
								<h4 class="title-line"><?php  the_sub_field('title'); ?></h4>
								<p><?php  the_sub_field('desc'); ?></p>
							</div>
						</div>
					<?php  endwhile; endif;
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer (); ?>  	 