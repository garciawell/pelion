<?php get_header(); /* Template Name: Página Sem Titulo*/?>
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