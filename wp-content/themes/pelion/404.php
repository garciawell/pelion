<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="content-main"> 
			<div class="container"> 

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title text-center">404 ERROR</h1>
						<span class="subtitle-error text-center">Page not found</span>
					</header><!-- .page-header -->

					<div class="page-content">
						<p class="p-17 text-center"><?php _e( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam' ); ?>


						</p>
						<i class="text-center fa fa-angle-down" aria-hidden="true"></i>
						<form role="search" method="get" class="search-form-line" action="<?php echo home_url( '/' ); ?>">
							<label>
								<input type="search" class="search-field"
								placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
								value="<?php echo get_search_query() ?>" name="s"
								title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
							</label>
							<input type="submit" class="search-submit"
							value="OK" />
						</form>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->


				<section class="packages-404">
					<h2 class="title-main">Packages</h2>
					<div class="row">
						<?php $new_query = new WP_Query( array(
							'posts_per_page' => 4,
							'post_type'      => packages,
							'paged'          => $paged
						) );

						while ( $new_query->have_posts() ) : $new_query->the_post();  

							get_template_part("templates/loop", "post-4");

							endwhile; wp_reset_postdata();   ?>
						</div>
					</section><!-- .error-404 -->

				</div>
			</div>
		</main><!-- .site-main -->
	</section><!-- .content-area -->

	<?php get_footer(); ?>
