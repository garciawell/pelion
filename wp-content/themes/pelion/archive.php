<?php get_header();  ?>


<?php 

// vars
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  

?>




<div class="banner-full d-flex  text-center align-items-center" style="background: url('<?php bloginfo('template_url');  ?>/img/banner-regioes.jpg') center center no-repeat; background-size:cover;">
	<div class="container">
		<h1 class="title-cat text-center"><?php single_cat_title();  ?></h1>
		<span class="subtitle-cat text-center"><?php echo category_description(); ?> </span>
		<a href="#content-main"><img src="<?php bloginfo('template_url'); ?>/img/icon-down.png"></a>		
	</div>
</div>

	<div id="content-main">
		<div class="container">
			<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope
				itemtype="http://schema.org/ListItem"><a itemprop="item" class="breadcrumb-item" href="<?php bloginfo('home'); ?>"><span itemprop="name">Home</span></a></li>
				<li itemprop="itemListElement" itemscope
				itemtype="http://schema.org/ListItem"><span itemprop="item"  class="breadcrumb-item active" href="<?php bloginfo('home'); ?>/regions"><span itemprop="name"><?php single_cat_title(); ?></span></span></li>
				
			</ul>


			<div class="row-pad-25 row order-resp">

				<div class="pad-25 col-12 col-lg-9  col-sm-12 content-filter">
					
					<div id="main">

						<p><?php the_field('description_large' , $queried_object);?> </p> 


						
						<div class="row">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<?php   get_template_part("templates/loop", "post"); ?>
							<?php endwhile; else : ?>
							<div class="col">
								<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
							</div>
						<?php endif; ?>
					</div>

				</div>

				<?php //include('bloco-build.php'); ?>

			</div>
			<div class="pad-25 col-12 col-lg-3  col-sm-12 item-filter">
				<?php echo do_shortcode('[searchandfilter id="63"]'); ?>
			</div>
		</div>
	</div>
</div>



<?php get_footer (); ?>