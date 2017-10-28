<?php get_header();?>
<?php
			// Start the loop.
while ( have_posts() ) : the_post(); ?>
<div class="container-full">
	<div id="content-main" class="single-padrao">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-12"> 
					<article>


						<h1 class="title-single"><?php the_title(); ?></h1>
						<span class="data-single"><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_date(); ?></span>
						<div class="conteudo-main"><?php the_content(); ?></div>

						<div class="comentarios">
							<h4 >Comentários</h4>
							<?php comments_template(); ?> 
						</div>	 		
					</div>	 		
				</article>			
					<div class="col-md-4 col-sm-4 col-xs-12">
					<?php get_sidebar();  ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer (); ?>  	 