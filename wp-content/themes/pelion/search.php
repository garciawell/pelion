<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="banner-full d-flex  text-center align-items-center" style="background-size:cover; background-image: url('<?php  if( get_field('banner') ): the_field('banner'); else: echo bloginfo(home) . '/wp-content/uploads/2017/10/banner-regioes.jpg';   endif;; ?>');">

	<div class="container">
		<h1 class="title-cat text-center">Search</h1>

	</div>
</div>

<section id="primary" class="content-area-mg">
	<main id="main" class="site-main" role="main">
		<div id="content-main"> 
			<div class="container"> 

				<div class="row-pad-25 row order-resp">
					<div class="pad-25 col-12 col-lg-9  col-sm-12 content-filter">
						<div id="main">


							<header class="page-header">
							<h1 class="title-main"><?php printf( __( 'You searched for: %s' ), '<span class="focus-search">' .get_search_query() ).'</span>' ?></h1> 
							</header><!-- .page-header -->
							<div class="row">
								<?php if ( have_posts() ) : ?>
								<?php
								// Start the loop.
								while ( have_posts() ) : the_post();

								get_template_part("templates/loop", "post"); ?>


								<?php // End the loop.
								endwhile;
								// If no content, include the "No posts found" template.
								else :

								echo "<h2 class='col-12 '>No results found for: " .get_search_query() . "</h2>"; ?>
								<form role="search" style="float: left;
    margin-left: 0;" method="get" class="search-form-line" action="<?php echo home_url( '/' ); ?>">
									<label>
										<input type="search" class="search-field"
										placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
										value="<?php echo get_search_query() ?>" name="s"
										title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
									</label>
									<input type="submit" class="search-submit"
									value="OK" />
								</form>


								<?php endif;
								?>
							</div>
						</div>
					</div>
					<div class="pad-25 col-12 col-lg-3  col-sm-12 item-filter">
						<div class="filtro item-sidebar">
							<h3 class="title-cat-side">
							Filter</h3>
							<?php echo do_shortcode('[searchandfilter id="63"]'); ?>
						</div>
					</div>
			</div>
		</div>
	</div>
	</main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>
