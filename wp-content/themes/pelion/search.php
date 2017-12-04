<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="banner-full regions d-flex  align-items-center text-center"  style="background: url('<?php  echo  get_field('banner' );?>') center center no-repeat; background-size: cover;">

   <div class="container">
      <h1 class="title-cat text-center">Search</h1>

   </div>
</div>

<section id="primary" class="content-area-mg">
	<main id="main" class="site-main" role="main">
		<div id="content-main"> 
			<div class="container"> 

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="title-main"><?php printf( __( 'You searched for: %s' ), '<span class="focus-search">' .get_search_query() ).'</span>' ?></h1> 
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
				echo "<h2 class='text-center'>No results found for: " .get_search_query() . "</h2>"; ?>
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


			<?php endif;
			?>
		</div>

	</div>
</div>
</main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>
