<?php get_header(); /* Template Name: Page Banner*/?>


<div class="banner-full regions d-flex  align-items-center text-center"  style="background: url('<?php  echo get_field('banner' );?>') center center no-repeat; background-size: cover;">
	<div class="container">
		<h1 class="title-white"><?php the_title(); ?></h1>
		<i><img src="<?php bloginfo('template_url'); ?>/img/icon-down.png"></i>
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