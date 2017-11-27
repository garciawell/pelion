<?php get_header();?>

<div class="banner-full regions d-flex  align-items-center text-center"  style="background: url('<?php  echo  get_field('banner' );?>') center center no-repeat; background-size: cover;">
	<div class="container">
		<h1 class="title-white"><?php the_title(); ?></h1>
		<div class="desc-top-white"><?php the_content(); ?></div>
		<i><img src="<?php bloginfo('template_url'); ?>/img/icon-down.png"></i>		
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
			<?php 
			$taxonomy = get_terms('regions');
			foreach ($taxonomy as $term) {
				if (!is_child($term,'regions')) { ?>
						<div class="col">
							<a href="<?php echo  $term_link = get_term_link( $term ); ?>">
								<div class="col-in effect-hover" style="background-image: url('<?php  echo $custom_field = get_field('imagem_categoria', $term ); ?>');">
									<div class="in">

										<span class="subtitle-cat"><?php the_field('subtitle', $term ); ?></span>

										<h2 class="title-cat-pag"><?php echo  $term->name; ?></h2>

									</div>
								</div>
							</a>
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