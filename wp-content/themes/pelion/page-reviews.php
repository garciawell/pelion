<?php get_header();?>

<div class="banner-full regions d-flex  align-items-center text-center"  style="background: url('<?php  echo  get_field('banner' );?>') center center no-repeat; background-size: cover;">
	<div class="container">
		<h1 class="title-white"><?php the_title(); ?></h1>
		<div class="desc-top-white"><?php the_content(); ?></div>
		<i><img src="<?php bloginfo('template_url'); ?>/img/icon-down.png"></i>
	</div>
</div>





<section class="container-full ct-reviews-home page-rev" >
<svg class="uvc-tilt-left-seperator top" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#ffffff" width="100%" height="70" viewBox="0 0 4 0.266661" preserveAspectRatio="none" style="height: 70px;"><polygon class="fil0" points="4,0 4,0.266661 -0,0.266661 "></polygon></svg>

	<div class="container">

		<h3 class="title-white text-center">All Reviews</h3>



		<div class="row items-review">

			<?php
			$the_press = new WP_Query(array('post_type' => 'reviews','posts_per_page' => 3,'paged'=> get_query_var('paged') ));
            // The Loop
			while ($the_press->have_posts()) : $the_press->the_post(); ?>


			<div class="col-12 col-md-4">
				<figure class="icon-person"><img src="<?php bloginfo('template_url'); ?>/img/icon-person.png"></figure>
				<div class="col-review-home-in">
					<?php setup_postdata($post); ?>


					<p>"<?php echo excerpt(25);  ?>"</p>
					<a href="<?php the_permalink(); ?>"><h4 class="title-rating">- <?php the_title(); ?></h4></a>
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
		<?php if(function_exists('wp_pagenavi')) { ?> </div><div class="pagination-pd"> <?php  wp_pagenavi(array('query'=> $the_press)); ?> </div> <?php  } else {
			echo '</div>';
		}?>
		<?php wp_reset_postdata();?>

</div>
</section>


<?php get_footer();?>