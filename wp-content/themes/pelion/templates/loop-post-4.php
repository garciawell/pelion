<div class="col-3 col-lg-3 col-md-3 col-sm-6">

	<div class="bloco-padrao">
		<figure><?php the_post_thumbnail( 'large', array( 'alt' => get_the_title() ) );  ?></figure>

		<div class="top">
			<h2>
				<?php the_title(); ?>		
			</h2>
		</div>

		<div class="middle">
			Teste
		</div>
		<div class="bottom">
			<a href="<?php the_permalink();  ?>" class="btn btn-primary btn-square">Book Now</a>
		</div>
	</div>
</div>