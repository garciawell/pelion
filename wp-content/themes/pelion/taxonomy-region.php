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
				<div class="col-12 col-lg-9 col-md-9 col-sm-12">
					<nav class="breadcrumb">
						<a class="breadcrumb-item" href="#">Home</a>
						<a class="breadcrumb-item" href="#">Regions</a>
						<a class="breadcrumb-item active" href="#">
						<?php   // Get terms for post
						$terms = get_the_terms( $post->ID , 'regions' );
							 // Loop over each item since it's an array
						if ( $terms != null ){ 
							foreach( $terms as $term ) {
								print $term->name ;
								unset($term);  
							} } ?>

						</a>

					</nav>
 
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


	
						<?php 
					
						// check if the flexible content field has rows of data
						 if( have_rows('items' , $queried_object)  ): ?>


						    	<?php // loop through the rows of data
						    	while ( have_rows('items' , $queried_object) ) : the_row();

						    		if( get_row_layout() == 'cat' ): ?>
						    		<div class="full-cat">
						    			<div class="row aling-items-cente header-cat">
						    				<div class="col">

						    					<h3> <?php the_sub_field('title'); ?> </h3>


						    				</div>		        	
						    				<div class="col">
						    					<a href="<?php  the_sub_field('link'); ?>" class="pull-right btn btn-outline-success">SEE ALL</a>
						    				</div>
						    			</div>

						    			<div class="row loop-items-in">
						    				<?php

						    				$posts = get_sub_field('cat_list');

						    				if( $posts ): ?>
						    				<?php  foreach( $posts as $post):  ?>


						    					<?php   get_template_part("templates/loop", "post"); ?>

						    				<?php endforeach; ?>

						    			<?php  endif;  ?>
						    		</div>
						    	</div> 



						    <?php elseif( get_row_layout() == 'shortcode' ):  ?>

						    	<?php the_sub_field('shortcode_item'); ?> 


						    <?php   endif;

						endwhile;

					else :


					endif;

					?>
				</div>

				<?php 

				$images = get_field('galeria' , $queried_object);
					$size = 'padrao'; // (thumbnail, medium, large, full or custom size)

					if( $images ): ?>
					<div class="galeria-cat">
						<h3 class="title-main">PHOTO GALERY</h3>
						<ul class="row">
							<?php foreach( $images as $image ): ?>
								<li class="col-4 col-md-4 col-sm-6"> 
									<a href="<?php echo $image['url']; ?>" data-rel="lightbox">
										<img src="<?php echo $image['sizes']['padrao']; ?>" alt="<?php echo $image['alt']; ?>" />
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

				<?php //include('bloco-build.php'); ?>

			</div>
			<div class="col-12 col-lg-3 col-md-3 col-sm-12">
				<?php echo do_shortcode('[searchandfilter id="63"]'); ?>




			</div>
		</div>
	</div>
</div>
</div>


<?php get_footer (); ?>