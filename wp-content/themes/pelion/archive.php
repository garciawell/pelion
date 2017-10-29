<?php get_header();  ?>


<?php 

// vars
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  

?>




<div class="banner-full d-flex  align-items-center" style="background-image: url('<?php  echo $thumbnail = get_field('imagem_categoria', $queried_object);  ?>');">
	<div class="container">
		<h1 class="title-cat text-center"><?php single_cat_title();  ?></h1>
		<span class="subtitle-cat text-center"><?php echo category_description(); ?> </span>
	</div>
</div>
<div class="container-full">
	<div id="content-main">
		<div class="container">
			<div class="row">
				<div class="col-9 col-lg-9 col-md-9 col-sm-12">
					<nav class="breadcrumb">
						<a class="breadcrumb-item" href="#">Home</a>
						<a class="breadcrumb-item" href="#">Library</a>
						<a class="breadcrumb-item" href="#">Data</a>
						<span class="breadcrumb-item active">Bootstrap</span>
					</nav>

					<div id="main">
						<div class="row">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<?php   get_template_part("templates/loop", "post"); ?>
							<?php endwhile; else : ?>
							<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>
				</div>

			<?php 

			$images = get_field('galeria' , $queried_object);
					$size = 'padrao'; // (thumbnail, medium, large, full or custom size)

					if( $images ): ?>
					<div class="galeria-cat">
						<ul class="row">
							<?php foreach( $images as $image ): ?>
								<li class="col-4 col-md-4 col-sm-6">
									<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

			</div>
			<div class="col-3 col-lg-3 col-md-3 col-sm-12">
				<?php echo do_shortcode('[searchandfilter id="63"]'); ?>




			</div>
		</div>
	</div>
</div>
</div>


<?php get_footer (); ?>  	 