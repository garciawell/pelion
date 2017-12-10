<?php get_header();?>

<div class="banner-full  d-flex  align-items-center text-center"  style="background: url('<?php  echo  get_field('banner' );?>') center center no-repeat; background-size: cover;">
	<div class="container">
		<h1 class="title-white"><?php the_title(); ?></h1>
		<div class="desc-top-white"><?php the_content(); ?></div>
		<a class="ancora" href="#content-main"><img src="<?php bloginfo('template_url'); ?>/img/icon-down.png"></a>		
	</div>
</div>





<section class="page-rev"  id="content-main" >
	<div class="container">
		<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li itemprop="itemListElement" itemscope
			itemtype="http://schema.org/ListItem"><a itemprop="item" class="breadcrumb-item" href="<?php bloginfo('home'); ?>"><span itemprop="name">Home</span></a></li>

			<li itemprop="itemListElement" itemscope
			itemtype="http://schema.org/ListItem"><span itemprop="item"  class="breadcrumb-item active" href="<?php bloginfo('home'); ?>/region"><span itemprop="name"><?php the_title();  ?></span></span>
		</li>
	</ul>

	<div class="row items-review rev-page">

		<?php
		$the_press = new WP_Query(array('post_type' => 'reviews','posts_per_page' => 3,'paged'=> get_query_var('paged') ));
            // The Loop
		while ($the_press->have_posts()) : $the_press->the_post(); ?>


		<div class="col-12 col-md-12">
			<div class="col-review-home-in">
				<?php setup_postdata($post); ?>
				<a href="<?php the_permalink(); ?>"><h2 class="title-rating-page"><?php the_title(); ?></h2></a>
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


				
				<div class="content-rev"><p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 550, ' [...]');?></p></div>



			</div>
		</div>
	<?php endwhile; ?> 
	<?php if(function_exists('wp_pagenavi')) { ?> </div><div class="pagination-pd rev"> <?php  wp_pagenavi(array('query'=> $the_press)); ?> </div> <?php  } else {
		echo '</div>';
	}?>
	<?php wp_reset_postdata();?>

</div>
</section>

<section class="send-review" >
	<div class="row">
		<div class="col-50 col-12  col-md-6 left-bg">

		</div>	
		<div class="col-50 col-12  col-md-6 right-form">
			<div class="limit-grid-right">
				<?php echo do_shortcode('[gravityform id=3]');?>
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>