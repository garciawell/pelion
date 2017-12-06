<?php get_header(); /* Template Name: Page Banner*/?>


<div class="banner-full d-flex  text-center align-items-center" style="background-size:cover; background-image: url('<?php  if( get_field('banner') ): the_field('banner'); else: echo bloginfo(home) . '/wp-content/uploads/2017/10/banner-regioes.jpg';   endif;; ?>');">
	<div class="container">
		<h1 class="title-white"><?php the_title(); ?></h1>
		     <span class="subtitle-cat text-center"> <?php the_field('description_pages'); ?> </span>
		<a class="ancora"  href="#content-main"><img src="<?php bloginfo('template_url'); ?>/img/icon-down.png"></a>	
	</div>
</div>



	<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

		<div id="content-main" class="page-padrao">
			<div class="container">
               <ul class="breadcrumb page" itemscope itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope
                     itemtype="http://schema.org/ListItem"><a itemprop="item" class="breadcrumb-item" href="<?php bloginfo('home'); ?>"><span itemprop="name">Home</span></a></li>

                  <li itemprop="itemListElement" itemscope
                     itemtype="http://schema.org/ListItem"><span itemprop="item"  class="breadcrumb-item active" href="<?php bloginfo('home'); ?>/region"><span itemprop="name"><?php the_title();  ?></span></span>
                  </li>
               </ul>
				<?php the_content(); ?>
			</div>
		</div>

	<?php endwhile; ?>
<?php get_footer (); ?>  	 