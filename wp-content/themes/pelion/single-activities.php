<?php get_header();?>



<div itemscope itemtype="http://schema.org/Product">

	<section class="banner-full-single">
		<div class="row no-gutters">
			<div class="col-12 col-lg-6" style="background: url(<?php// the_field('banner_full'); ?>) left center no-repeat; background-size:cover !important; ">

				<div class="owl-carousel-thumbs owl-carousel" data-slider-id="1">
					<div class="item" data-hash="thumb1" itemprop="image" ><?php the_post_thumbnail('full-interna'); ?></div> 
					<?php 
					$images = get_field('galeria');
					$size = 'full-interna'; // (thumbnail, medium, large, full or custom size)
					if( $images ): ?>
					<?php $i=2; foreach( $images as $image ): ?>
					<div class="item" data-hash="thumb<?php echo $i; ?>">
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
					</div>
					<?php $i++;  $len = count($images);  endforeach; ?>
				<?php endif; ?>
			</div> 
			<div class="owl-thumbs" data-slider-id="1">
				<a  href="#thumb1" class="owl-thumb-item"><?php the_post_thumbnail('thumb-galeria'); ?></a>
				<?php 


				$images2 = get_field('galeria');
					$size = 'thumb-galeria'; // (thumbnail, medium, large, full or custom size)
					if( $images2 ): ?>
					<?php  $i=2;   foreach( $images2 as $image2 ): 
					$len2 = count($images2);

					$conuntergeral = $len - 3; 

					$conuntergeral;

					?>
					<a class="owl-thumb-item <?php if ($i == 4) { echo 'last-thumb'; }  ?>" href="<?php if ($i == 4) { the_post_thumbnail_url(); } else {?>#thumb<?php echo $i; }?>"   <?php if ($i == 4 /*$len + 1*/) { ?> data-rel="lightbox" <?php } ?>>  
						<?php if ($i == 4 /*$len + 1*/) {  ?>

						<i><?php echo '+ ' . $conuntergeral ;?></i>
						<?php }  ?>
						<?php echo wp_get_attachment_image( $image2['ID'], $size ); ?>
					</a>
					<?php $i++; if ($i == 5) { break; } endforeach; ?>
				<?php endif; ?>

			</div>


			
		</div>					
		<div class="col-12 col-lg-6 bg-blue">
			<div class="limit-grid-left">
				<?php   get_template_part("templates/loop", "single"); ?>

			</div>		
		</div>		
	</section>





	<?php
			// Start the loop.
	while ( have_posts() ) : the_post(); ?>

	<div id="content-main" class="single-padrao">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8">
					<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope
						itemtype="http://schema.org/ListItem"><a itemprop="item" class="breadcrumb-item" href="<?php bloginfo('home'); ?>"><span itemprop="name">Home</span></a></li>
						<li itemprop="itemListElement" itemscope
						itemtype="http://schema.org/ListItem"><a itemprop="item"  class="breadcrumb-item" href="<?php bloginfo('home'); ?>/regions"><span itemprop="name">Regions</span></a>
					</li>

						<?php   // Get terms for post
						$terms = get_the_terms( $post->ID , 'regions' );
							 // Loop over each item since it's an array
						if ( $terms != null ){ 
							foreach( $terms as $term ) {
								$term_link = get_term_link( $term ); 

								echo '<li itemprop="itemListElement" itemscope
								itemtype="http://schema.org/ListItem"><a itemprop="item"  class="breadcrumb-item" href="' . esc_url( $term_link ) . '"><span itemprop="name">'. $term->name . '</span></a></li>';
								unset($term);  
							} } ?>
							<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="item" class="breadcrumb-item active" href="<?php the_permalink();?>"><span itemprop="name"><?php the_title(); ?></span></span>
							</li>
						</ul>
					</div>
					<div class="col-12 col-sm-4 pull-resp">
						<div class="pull-right"><?php echo do_shortcode('[addtoany]');?></div>
					</div>
				</div>

				<?php if( have_rows('tabs') ): ?>
					<div class="bloco-tabs">
						<ul class="nav nav-tabs" role="tablist">
							<?php  $n=1; while ( have_rows('tabs') ) : the_row(); ?>
							<li class="nav-item">
								<a class="nav-link <?php if($n==1){echo "active"; }?>" href="#tabs<?php echo $n; ?>" role="tab" data-toggle="tab"><?php the_sub_field('title');?></a>
							</li> 
							<?php  $n++; endwhile; ?>
						</ul>


						<!-- Tab panes -->
						<div class="tab-content">
							<?php  $n=1; while ( have_rows('tabs') ) : the_row(); ?>
							<div role="tabpanel" class="tab-pane fade <?php if($n==1){echo "in active show"; }?>" id="tabs<?php echo $n; ?>">
								<?php if( have_rows('inner') ): ?>
									<?php  while ( have_rows('inner') ) : the_row(); ?>
										<div class="list-inner row">
											<div class="col-12 col-lg-4 col-md-5">
												<h3><?php the_sub_field('title'); ?></h3>
											</div>						
											<div class="col-12 col-lg-8 col-md-7">
												<?php the_sub_field('description'); ?>
											</div>
										</div>
									<?php endwhile; endif;?>
								</div>
								<?php  $n++; endwhile;  ?>
							</div>
						</div>

					<?php   endif;  ?>


					<?php if( get_field('why_lt') ): ?>
						<div class="why">
							<div class="row align-items-center">
								<div class="col-12 col-md-6">
									<h2 class="title-grey">WHY SHOULD YOU GO HERE?</h2>
									<?php the_field('why_lt'); ?>
								</div>						
								<div class="col-12 col-md-6 mg-tp-15">
									<div class="video"><?php the_field('why_rt'); ?></div>
								</div>		
							</div>
						</div>
					<?php endif;  ?>



					<?php if( get_field('reviews') ): ?>
						<div class="customer">
							<div class="row">
								<div class="col-12 col-md-6 reviews">
									<h3 class="title-grey">CUSTOMERS REVIEW</h3>
									<?php 

									$posts = get_field('reviews');
									if( $posts ): ?>
									<div class="row">
										<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
											<div class="col-12 col-sm-6">
												<div itemprop="review" itemscope itemtype="http://schema.org/Review" class="col-review-in">
													<?php setup_postdata($post); ?>


													<p itemprop="description">"<?php echo excerpt(25);  ?>"</p>
													<a href="<?php the_permalink(); ?>"><h4 class="title-rating" itemprop="name">- <?php the_title(); ?></h4></a>
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
										<?php endforeach; ?>

										<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									</div>
								<?php endif; ?>





							</div>						
							<div class="col-12 col-md-6">

								<h2 class="title-grey">PHOTO GALLERY</h2>
								<ul class="row gallery-single">
									<?php 
									$images = get_field('galeria');
						$size = 'padrao'; // (thumbnail, medium, large, full or custom size)

						if( $images ): ?>
						<?php foreach( $images as $image ): ?>
							<li class="col-6 col-md-6 col-xl-4"> 
								<a href="<?php echo $image['url']; ?>" data-rel="lightbox">
									<img src="<?php echo $image['sizes']['padrao']; ?>" alt="<?php echo $image['alt']; ?>" />
								</a>
							</li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>		
		</div>
	</div>
<?php endif;  ?>

<div class="comentarios">
	<?php echo do_shortcode('[fbcomments url="" width="100%" count="off" num="3" countmsg="wonderful comments!"]'); ?>
</div>


<div class="others-packages">
	<h4 class="title-grey">Others Activities</h4>
	<div class="row">
		<?php    

		$terms = get_the_terms( $post->ID , 'regions' );
		foreach( $terms as $term ) {
			$termo = $term->slug;

		} 
		$args = array(
			'cat' => $termo, 
			'post_type'=> 'activities',
			'posts_per_page'=>4,
			'order'=>'rand',
			'post__not_in' => array( get_the_ID() )
		);

		$new_query = new WP_Query( $args );


		while ( $new_query->have_posts() ) : $new_query->the_post();  ?>

		<?php   get_template_part("templates/loop", "post-4"); ?>

	<?php endwhile;  
	wp_reset_postdata();

	?>
</div>
</div>
</div> 
</div>

<?php   include("templates/resume.php"); ?> 
</div>

<?php endwhile; ?>

<script type="text/javascript">

	/*********APARECER e FECHAR RESUMO***************/

	$( document ).ready(function() { 

		$(function() {



			$(window).scroll(function() {    
				var scroll = $(window).scrollTop();
				var objectSelect = $(".single-padrao");
				var objectPosition = objectSelect.offset().top;
				if (scroll > objectPosition) {
					$("#resume").addClass("show");
				} else {
					$("#resume").removeClass("show");
				}
			});




			$("#icon-close").on("click",function(){
				$("#resume").hide(); 

			}); 
		}); 

	}); 
	
</script>
<?php get_footer (); ?>  	 