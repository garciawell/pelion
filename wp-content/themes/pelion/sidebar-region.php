<?php    $queried_object = get_queried_object();  ?>
<div id="sidebar-rg">
	<div class="filtro item-sidebar">
		<h3 class="title-cat-side">
		Filter</h3>
		<?php echo do_shortcode('[searchandfilter id="63"]'); ?>
	</div>

	<div class="bloco-cat  item-tax item-sidebar special">
		<h3 class="title-cat-side">Special Offers</h3>
		<div class="row mg-tp-25">
			<?php 

			$posts = get_field('special_offer' , $queried_object);

			if( $posts ): ?>

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

			<?php wp_reset_postdata(); else:  ?>

			<?php
			$the_press = new WP_Query(array('post_type' => 'special','posts_per_page' => 3 ));
                       // The Loop
			while ($the_press->have_posts()) : $the_press->the_post(); ?>
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
		<?php endwhile; ?>
		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

	<?php endif; ?>
	</div>

	</div>





	<div class="reviews item-tax item-sidebar">
		<h3 class="title-cat-side">Customers Review</h3>
		<div class="row mg-tp-25">
			<?php 

			$posts = get_field('customer_review' , $queried_object);

			if( $posts ): ?>

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

			<?php wp_reset_postdata(); else:  ?>

			<?php
			$the_press = new WP_Query(array('post_type' => 'reviews','posts_per_page' => 3 ));
                       // The Loop
			while ($the_press->have_posts()) : $the_press->the_post(); ?>
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
		<?php endwhile; ?>
		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

	<?php endif; ?>
	</div>

	</div>
		<?php if( get_field('weather' , $queried_object) ): ?>
	<div class="item-sidebar">
		<h3 class="title-cat-side">
		<?php single_cat_title();  ?> Weather</h3>
		<?php 
		$temp = get_field('weather' , $queried_object);
		echo do_shortcode($temp);  ?>
	</div>
	<?php  endif;  ?>
	<div class="bloco-cat  item-tax item-sidebar">
		<h3 class="title-cat-side">
		Explore Others areas</h3>
		<?php 

		$terms3 = get_field('regions'  , $queried_object); 

		if( $terms3 ): ?>

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

		<?php else: ?>
		<div class="row">
			<?php 
			$exclude =  get_queried_object()->term_id;
			$taxonomy = get_terms( 'regions', array( 'exclude' => $exclude ) ); 
			foreach ($taxonomy as $term) {
				if (!is_child($term,'regions')) { ?>
				<div class="col-12 mg-15">
					<a href="<?php echo  $term_link = get_term_link( $term ); ?>">
						<div class="col-in effect-hover" style="background-image: url('<?php  echo $custom_field = get_field('imagem_categoria', $term ); ?>');">
							<div class="in">
								<span class="subtitle-cat"><?php the_field('subtitle', $term ); ?></span>
								<h4 class="title-cat-pag"><?php echo  $term->name; ?></h4>
							</div>
						</div>
					</a>
				</div>
				<?php } 
			} ?>
		</div>

		<?php  endif; ?>
	</div>
</div>