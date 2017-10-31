<div class="col-3 col-lg-3 col-md-3 col-sm-6">

	<div class="bloco-padrao">
		<figure><?php the_post_thumbnail( 'large', array( 'alt' => get_the_title() ) );  ?></figure>

		<div class="top">
			<div class="cat-travel">

				<?php   // Get terms for post
				$terms = get_the_terms( $post->ID , 'options' );
			 // Loop over each item since it's an array
				if ( $terms != null ){ 
					foreach( $terms as $term ) {
						echo '<p>';
						print $term->name ;
						unset($term); 
						echo' </p>';
					} } ?>

			</div>
			<h2 class="title-grid">
				<?php the_title(); ?>		
			</h2>
		</div>

		<div class="middle">

			<ul>
				<li>
					<?php if( get_field('label-hotel') == 'included' ): ?>   
						<i class="icon-ht"></i>
					<?php endif; ?>	
				</li>
				<li>
					<?php if( get_field('age')): ?>   
					<i class="icon-age"></i> 
					(<?php the_field('age'); ?>)
					<?php endif; ?>
				</li>
				<li>
					<?php if( get_field('fly')): ?>   
					<i class="icon-flight"></i> 
					 <?php the_field('fly'); ?>
					<?php endif; ?>
				</li>
			</ul>
		</div>
		<div class="bottom">
			<div class="row  no-gutters align-items-center">
				<div class="col-md-7">
					<div class="row no-gutters  align-items-center"> 
						<div class="col-md-7">
							<span class="price"><span class="moeda">€</span> <?php the_field('price');?></span>
						</div>					
						<div class="col-md-5">
							<p class="text-price"><?php the_field('text_price');?></p>
						</div>		 
					</div>		 
				</div>		 
				<div class="col-md-5">
					<a href="<?php the_permalink();  ?>" class="pull-right btn btn-primary btn-square">Book Now</a>
				</div>
			</div>
		</div>
	</div>
</div>