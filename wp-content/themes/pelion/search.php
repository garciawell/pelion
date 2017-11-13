<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section id="primary" class="content-area-mg">
	<main id="main" class="site-main" role="main">
		<div id="content-main"> 
			<div class="container"> 

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="title-main"><?php printf( __( 'Você Buscou por: %s' ), '<span class="focus-search">' .get_search_query() ).'</span>' ?></h1> 
					</header><!-- .page-header -->
					<div class="row">
						<?php
					// Start the loop.
						while ( have_posts() ) : the_post();

							get_template_part("templates/loop", "post-4"); ?>


					<?php // End the loop.
				endwhile;


				// If no content, include the "No posts found" template.
			else :
				echo "<h2>Nenhum resultado encontrado</h2>";

			endif;
			?>
		</div>

	</div>
</div>
</main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>
