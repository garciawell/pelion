<?php get_header(); /* Template Name: Results */  ?>





<div class="banner-full d-flex text-center align-items-center" style="background: url('<?php bloginfo('template_url');  ?>/img/banner-regioes.jpg') center center no-repeat; background-size:cover;">
	<div class="container">
		<h1 class="title-cat text-center">Results</h1>
		<a href="#content-main" class="ancora"><img src="<?php bloginfo('template_url'); ?>/img/icon-down.png"></a>	
	</div>
</div>

	<div id="content-main">
		<div class="container">
			<div class="row-pad-25 row order-resp">
				<div class="col-9 pad-25 col-lg-9 col-md-9 col-sm-12">
			<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope
				itemtype="http://schema.org/ListItem"><a itemprop="item" class="breadcrumb-item" href="<?php bloginfo('home'); ?>"><span itemprop="name">Home</span></a></li>
				<li itemprop="itemListElement" itemscope
				itemtype="http://schema.org/ListItem"><span itemprop="item"  class="breadcrumb-item active" href="<?php bloginfo('home'); ?>/regions"><span itemprop="name">Filter</span></span></li> 
				
			</ul>
 
					<div id="main">
						<p><?php the_field('description_large');?> </p> 


		
							<div class="row">
								<?php $args = array('post_type' => 'packages');
								$args['search_filter_id'] = 63; 
								$query = new WP_Query($args);
								?>  


								<?php if ( $query-> have_posts() ) : while ( $query-> have_posts() ) : $query-> the_post(); ?>
									<?php   get_template_part("templates/loop", "post"); ?>
								<?php endwhile; else : ?>
								<div class="col">
									<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
								</div>
							<?php endif; ?>
							</div>
					</div>

			</div>
			<div class="pad-25 col-3 col-lg-3 col-md-3 col-sm-12">
	<div class="filtro item-sidebar">
		<h3 class="title-cat-side">
		Filter</h3>
		<?php echo do_shortcode('[searchandfilter id="63"]'); ?>
	</div>



			</div>
		</div>
	</div>
</div>



<?php get_footer (); ?>