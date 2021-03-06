<?php get_header(); /* Template Name: Build Trip*/?>


<div class="banner-full regions d-flex  align-items-center text-center"  style="background: url('<?php  echo get_field('banner' );?>') center center no-repeat; background-size: cover;">
	<div class="container">
		<h1 class="title-white"><?php the_title(); ?></h1>
          <a class="ancora"  href="#content-main"><img src="<?php bloginfo('template_url'); ?>/img/icon-down.png"></a>  
	</div>
</div>



<?php
			// Start the loop.
while ( have_posts() ) : the_post(); ?>
<div class="container-full">
	<div id="content-main" class="page-padrao">
		<div class="container">
			  <ul class="breadcrumb page" itemscope itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope
                     itemtype="http://schema.org/ListItem"><a itemprop="item" class="breadcrumb-item" href="<?php bloginfo('home'); ?>"><span itemprop="name">Home</span></a></li>

                  <li itemprop="itemListElement" itemscope
                     itemtype="http://schema.org/ListItem"><span itemprop="item"  class="breadcrumb-item active" href="<?php bloginfo('home'); ?>/region"><span itemprop="name"><?php the_title();  ?></span></span>
                  </li>
               </ul>
			<div class="row">
				<div class="col-md-9">

					<?php the_content(); ?>
				</div>					
				<div class="col-md-3">

					<?php $my_query = new WP_Query('page_id=39');
					while ($my_query->have_posts()) : $my_query->the_post();
						$do_not_duplicate = $post->ID;?>

						<div class="bloco-inf-tri">
							<h3 class="title-grey"><?php the_field('title_inf_cat'); ?></h3>
							<div class="row mg-tp">

								<?php
								if( have_rows('block_information') ):
									while ( have_rows('block_information') ) : the_row(); ?>
									<div class="col-12 col-md-12 col-sm-12">
										<div class="col-line">
											<h4 class="title-line"><?php  the_sub_field('title'); ?></h4>
											<p><?php  the_sub_field('desc'); ?></p>
										</div>
									</div>
								<?php  endwhile; endif;
								?>
							</div>
						</div>
					<?php endwhile; wp_reset_postdata();  ?>

					<div class="faq">
						<h3>FAQ</h3>


						<div id="accordion" role="tablist" aria-multiselectable="true">
							<?php
							if( have_rows('faq') ): 
								$n=1; while ( have_rows('faq') ) : the_row(); ?>
								<div class="card">


									<div class="card-header" role="tab" id="heading<?php echo $n; ?>">
										<h4 class="mb-0">
											<a data-toggle="collapse"  <?php  if( $n != 1) { ?> class="collapsed" <?php }  ?> data-parent="#accordion" href="#collapse<?php echo $n; ?>"  aria-expanded="<?php  if( $n == 1) { echo 'true';} else{ echo 'false';} ?>" aria-controls="collapse<?php echo $n; ?>">
												<?php the_sub_field('question'); ?>
											</a>
										</h4>
									</div>  

									<div id="collapse<?php echo $n; ?>" class="collapse <?php  if( $n == 1) { echo 'show';} ?>" role="tabpanel" aria-labelledby="heading<?php echo $n; ?>">
										<div class="card-block">
											<?php the_sub_field('answer'); ?>
										</div>
									</div>

								</div>
								<?php $n++; endwhile; endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer (); ?>  	 