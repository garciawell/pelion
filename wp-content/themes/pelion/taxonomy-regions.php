<?php get_header();  ?>


<?php 

// vars
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  

?>



<div class="banner-full d-flex  align-items-center" style="background-image: url('<?php  echo $thumbnail = get_field('large_category', $queried_object);  ?>');">
	<div class="container">
		<h1 class="title-cat text-center"><?php single_cat_title();  ?></h1>
		<span class="subtitle-cat text-center"><?php echo category_description(); ?> </span>
	</div>
</div>
<div class="container-full">
	<div id="content-main">
		<div class="container">
			<div class="row order-resp">
				<div class="col-12 col-lg-9 col-md-12 col-sm-12">

					<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope
						itemtype="http://schema.org/ListItem"><a itemprop="item" class="breadcrumb-item" href="<?php bloginfo('home'); ?>"><span itemprop="name">Home</span></a></li>
						<li itemprop="itemListElement" itemscope
						itemtype="http://schema.org/ListItem"><a itemprop="item"  class="breadcrumb-item" href="<?php bloginfo('home'); ?>/regions"><span itemprop="name">Regions</span></a>
					</li>		
					<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><span itemprop="item"  class="breadcrumb-item active" href="<?php bloginfo('home'); ?>/regions"><span itemprop="name"><?php single_cat_title(); ?></span></span>
				</li>


			</ul>


			<div id="main">

				<p><?php the_field('description_large' , $queried_object);?> </p> 


				<div class="full-cat">
					<?php
					$args=array(
						'relation' => 'AND',
						'orderby' => 'count',
						'taxonomy' => 'options',
						'order' => 'DESC', 
						'hide_empty'   => 1,
						'tax_query'=>
						array(
							'taxonomy' => 'options',
							'field' => 'term_taxonomy_id',
							'terms' => array($term_tax_id),
						),array(
							'taxonomy' => 'regions',
							'field' => 'term_taxonomy_id',
							'terms' => array($term_tax_id),

						)
					);


					$categories=get_categories($args);



					$taxonomy = get_queried_object();
					$tax =  $taxonomy->slug;


					$n=1; foreach($categories as $category) {
						?>


						<div class="full-cat-items">
							<div class="row aling-items-cente header-cat">
								<div class="col-12 col-lg-6">

									<h3> <?php echo $category->name; ?> </h3>


								</div>		        	
								<div class="col-12 col-lg-6">
									<?php $category_link = get_category_link( $category); ?>
									<a href="<?php echo esc_url( $category_link ); ?>" class="pull-right btn btn-outline-success">SEE ALL</a>
								</div>
							</div>


							<?php query_posts( array( 'post_type' => 'packages', 'posts_per_page'=>'-1', 'orderby' => 'title', 'options'=>  $category->slug , 'regions'=>  $tax) ); ?>
							<div class="row">
								<?php if(have_posts()) : ?><?php while(have_posts()) : the_post() ?>


									<?php   get_template_part("templates/loop", "post"); ?>


								<?php endwhile; endif; ?> 
							</div>
						</div>
						<?php if($n % 3 == 2){
							do_shortcode('[personalized]');
						} ?>

						<?php $n++;  }  ?>


					</div>

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
			<div class="col-12 col-lg-3 col-md-12 col-sm-12">
				<?php echo do_shortcode('[searchandfilter id="63"]'); ?>

				<div class="bloco-cat  item-tax">
					<h4>Explore Others areas</h4>
					<div class="row">
					<?php   // Get terms for post

					$exclude =  get_queried_object()->term_id;
					$terms = get_terms( 'regions', array( 'exclude' => $exclude ) ); 
				 // Loop over each item since it's an array
					if ( $terms != null ){ 
						foreach( $terms as $term ) { ?>
						<div class="col-12 mg-15"> 
							<a href="<?php echo  $term_link = get_term_link( $term ); ?>">
								<div class="col-in effect-hover" style="background-image: url('<?php  echo $custom_field = get_field('imagem_categoria', $term ); ?>');">
									<div class="in">

										<span class="subtitle-cat"><?php the_field('subtitle', $term ); ?></span>

										<h2 class="title-cat-pag"><?php echo  $term->name; ?></h2>

									</div>
								</div>
							</a>
						</div>
						<?php } 
					} ?>
				</div>
			</div>	

			<div class="reviews item-tax">
				<h4>Customers Review</h4>
				<div class="row mg-tp-25">
					<?php
					$the_press = new WP_Query(array('post_type' => 'reviews','posts_per_page' => 3 ));
		            // The Loop
					while ($the_press->have_posts()) : $the_press->the_post(); ?>
					<div class="col-12 col-sm-12">
						<div itemprop="review" itemscope itemtype="http://schema.org/Review" class="col-review-in">


							<p itemprop="description">"<?php echo excerpt(25);  ?>"</p>
							<a href="<?php the_permalink(); ?>"><h5 class="title-rating" itemprop="name">- <?php the_title(); ?></h5></a>
							<meta itemprop="author" content="<?php the_title(); ?>">

							<?php if( get_field('review') == '1' ){ ?>
							<ul class="rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>

							</ul>
							<?php } else if( get_field('review') == '2' ) { ?> 
							<ul class="rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							</ul>
							<?php } else if( get_field('review') == '3' ){  ?>
							<ul class="rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							</ul>
							<?php } else if( get_field('review') == '4' ){  ?>
							<ul class="rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							</ul>
							<?php } else if( get_field('review') == '5' ){  ?> 
							<ul class="rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>

							<?php } else { ?>
							<ul class="rating">
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>

							</ul>

							<?php	}?>	



						</div>
					</div>
				<?php endwhile; ?>

				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			</div>
		</div>
	</div>



</div>
</div>
</div>
</div>


<?php get_footer (); ?>