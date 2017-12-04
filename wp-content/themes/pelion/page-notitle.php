<?php get_header(); /* Template Name: Page Banner*/?>


<div class="banner-full d-flex  text-center align-items-center" style="background-size:cover; background-image: url('<?php  if( get_field('banner') ): the_field('banner'); else: echo bloginfo(home) . '/wp-content/uploads/2017/10/banner-regioes.jpg';   endif;; ?>');">
	<div class="container">
		<h1 class="title-white"><?php the_title(); ?></h1>
		<a class="ancora"  href="#content-main"><img src="<?php bloginfo('template_url'); ?>/img/icon-down.png"></a>	
	</div>
</div>



	<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
	<div class="container-full">
		<div id="content-main" class="page-padrao">
			<div class="container">

				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php get_footer (); ?>  	 