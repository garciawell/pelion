<?php get_header();  ?>


<?php 

// vars
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  

?>




<div class="banner-full d-flex  align-items-center" style="background: url('<?php bloginfo('template_url');  ?>/img/banner-regioes.jpg') center center no-repeat; background-size:cover;">
	<div class="container">
		<h1 class="title-cat text-center"><?php single_cat_title();  ?></h1>
		<span class="subtitle-cat text-center"><?php echo category_description(); ?> </span>
	</div>
</div>
<div class="container-full">
	<div id="content-main">
		<div class="container">
			<nav class="breadcrumb">
				<a class="breadcrumb-item" href="#">Filter</a>
				<a class="breadcrumb-item active" href="#"><?php single_cat_title(); ?></a>

			</nav>
			<div class="row">

				<div class="col-12 col-lg-9  col-sm-12 content-filter">
					
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
			<div class="col-12 col-lg-3  col-sm-12 item-filter">
				<?php echo do_shortcode('[searchandfilter id="63"]'); ?>




			</div>
		</div>
	</div>
</div>
</div>


<?php get_footer (); ?>