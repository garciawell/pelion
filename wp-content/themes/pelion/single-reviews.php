<?php get_header();?>
<?php
			// Start the loop.
while ( have_posts() ) : the_post(); ?>
<div class="container-full">
	<div id="content-main" class="single-padrao">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-12"> 
					<article>

						<h1 class="title-single"><?php the_title(); ?></h1>
						<div class="conteudo-main"><?php the_content(); ?></div>

					</article>			
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer (); ?>  	 