<?php get_header();?>
	<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
	<div class="container-full">
		<div id="content-main" class="page-padrao">
			<div class="container">
				<?php /*if ( !is_home()  && !is_front_page() ) { ?><div class="header-page"><h1 class="title-icon"><?php the_title(); ?></h1></div><?php  }  */?>

				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php get_footer (); ?>  	 