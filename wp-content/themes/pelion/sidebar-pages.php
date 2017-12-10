<div id="sidebar-rg">
	<div class="filtro item-sidebar">
		<h3 class="title-cat-side">
		Filter</h3>
		<?php echo do_shortcode('[searchandfilter id="63"]'); ?>
	</div>
	<?php 

	$posts = get_field('special_offer');

	if( $posts ): ?>
	<div class="bloco-cat  item-tax item-sidebar special">
		<h3 class="title-cat-side">Special Offers</h3>
		<div class="row mg-tp-25">


			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<div class="mg-15 col-12 col-sm-12">					
					<a href="<?php the_field('link');?>">
						<?php 
						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						?>
						<div class="col-in effect-hover" style="background-image: url('<?php  echo  $url; ?>');">
							<div class="in">
								<span class="subtitle-cat"><?php echo(get_the_excerpt()); ?></span>
								<h4 class="title-cat-pag"><?php the_title();  ?></h4>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach; ?>

			
		</div>

	</div>
	<?php wp_reset_postdata();
 endif; ?>

	<?php 

	$posts = get_field('customer_review');

	if( $posts ): ?>
	<div class="reviews item-tax item-sidebar">
		<h3 class="title-cat-side">Customers Review</h3>
		<div class="row mg-tp-25">


			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<div class="col-12 col-sm-12">
					<div itemprop="review" itemscope itemtype="http://schema.org/Review" class="col-review-in">
						<p itemprop="description">"<?php echo excerpt(25);  ?>"</p>
						<a href="<?php the_permalink(); ?>">
							<h5 class="title-rating" itemprop="name">- <?php the_title(); ?></h5>
						</a>
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
						<?php }?> 
					</div>
				</div>
			<?php endforeach; ?>


		</div>

	</div>
	<?php wp_reset_postdata(); endif; ?>



	<?php if( get_field('weather') ): ?>
		<div class="item-sidebar">
			<h3 class="title-cat-side">
				<?php single_cat_title();  ?> Weather</h3>
				<?php 
				$temp = get_field('weather' , $queried_object);
				echo do_shortcode($temp);  ?>
			</div>
		<?php  endif;  ?>


		<?php 

		$terms3 = get_field('regions');

		if( $terms3 ): ?>

		<div class="bloco-cat  item-tax item-sidebar">
			<h3 class="title-cat-side">
			Explore Others areas</h3>


			<div class="row">

				<?php foreach( $terms3 as $term3 ): ?>


					<div class="col-12 mg-15">
						<a href="<?php echo get_term_link( $term3 ); ?>">
							<div class="col-in effect-hover" style="background-image: url('<?php  echo $custom_field = get_field('imagem_categoria', $term3 ); ?>');">
								<div class="in">
									<span class="subtitle-cat"><?php the_field('subtitle', $term3 ); ?></span> 
									<h4 class="title-cat-pag"><?php echo $term3->name; ?></h4>
								</div>
							</div>
						</a>
					</div>

				<?php endforeach; ?>

			</div>
	</div>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

</div>