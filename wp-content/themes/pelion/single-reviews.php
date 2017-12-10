<?php get_header();?>


<div class="banner-full d-flex  text-center align-items-center" style="background-size:cover; background-image: url('<?php  if( get_field('banner') ): the_field('banner'); else: echo bloginfo(home) . '/wp-content/uploads/2017/10/pelion-about.jpg';   endif;; ?>');">
	<div class="container">
		<h1 class="title-white">Reviews</h1>
		<a class="ancora" href="#content-main"><img src="<?php bloginfo('template_url'); ?>/img/icon-down.png"></a>		
	</div>
</div>


<?php
			// Start the loop.
while ( have_posts() ) : the_post(); ?>
	<div id="content-main" class="single-reviews">
		<div class="container">
			   <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope
                     itemtype="http://schema.org/ListItem"><a itemprop="item" class="breadcrumb-item" href="<?php bloginfo('home'); ?>"><span itemprop="name">Home</span></a></li>

                   <li itemprop="itemListElement" itemscope  itemtype="http://schema.org/ListItem"><a itemprop="item" class="breadcrumb-item" href="<?php bloginfo('home'); ?>/reviews"><span itemprop="name">Reviews</span></a></li>

                  <li itemprop="itemListElement" itemscope
                     itemtype="http://schema.org/ListItem"><span itemprop="item"  class="breadcrumb-item active" href="<?php bloginfo('home'); ?>/region"><span itemprop="name"><?php the_title();  ?></span></span>
                  </li>
               </ul>

			<div class="row">
				<div class="col-md-12 col-sm-12 col-12"> 
					<article>

						<h1 class="title-single"><?php the_title(); ?></h1>
										<?php if( get_field('location') ): ?><span class="location">From <?php the_field('location'); ?></span><?php endif; ?> <?php if( get_field('tour') ): ?> . <span class="tour"><?php the_field('tour'); ?></span><?php endif; ?> 


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

						<div class="conteudo-main"><?php the_content(); ?></div>

					</article>		
					<div class="text-center mg-tp-btn">	
						<a href="<?php bloginfo('home');?>/reviews" class="btn btn-primary">SEE ALL REVIEWS</a>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer (); ?>  	 