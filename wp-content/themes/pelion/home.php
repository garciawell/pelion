<?php get_header(); /* Template Name: Home*/ ?>
<div class="slider container-full">
	<?php echo do_shortcode('[rev_slider alias="home"]');?>
</div>

<div class="container-full">
	<div id="content-main">
		<div class="container">
			
			<?php $my_query = new WP_Query('page_id=48');
			while ($my_query->have_posts()) : $my_query->the_post();
				?>
				<div class="center"><?php // the_post();  the_content(); ?></div>

				<ul class="row box-home">
					<?php
					if( have_rows('itens_home') ):
						while ( have_rows('itens_home') ) : the_row(); ?>
						<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 center">
							<figure><img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('titulo'); ?>"></figure>
							<h2 class="title-wt"><?php the_sub_field('titulo'); ?></h2>
							<p class="desc-box"><?php the_sub_field('descricao'); ?></p>
						</li>
					<?php endwhile; endif; ?>
				</ul>
			<?php endwhile; wp_reset_query(); ?>
			
			<ul class="row box-home2">
				<?php $my_query2 = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4 ) ); ?> 
				<?php while ( $my_query2->have_posts() ) : $my_query2->the_post(); ?>	 
					<li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="box-home2-in">
							<a href="<?php the_permalink(); ?>">								
								<figure>
									<?php the_post_thumbnail('home-padrao');?>
								</figure>
								<div class="pad-text">
									<h2 class="title-wt"><?php the_title(); ?></h2>
									<div class="desc-box"><?php the_excerpt(); ?></div>
								</div>
							</a>									
						</div>
					</li>
				<?php endwhile; wp_reset_query();?>
			</ul>

			

		</div>
	</div>
</div>

<?php get_footer (); ?>  	 