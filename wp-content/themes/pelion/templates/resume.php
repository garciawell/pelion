<div class="resume" id="resume">
	<span class="title">Resume</span>
	<i class="icon-close" id="icon-close">X</i>
	<figure><?php the_post_thumbnail('resume');?></figure>
	<span class="cat">
		<?php    
		$terms = get_the_terms( $post->ID , 'options' );
// Loop over each item since it's an array
		if ( $terms != null ){ 
			foreach( $terms as $term ) {
				print $term->name ;
				unset($term); 
			} } ?>
		</span>
		<span class="title-mn"><?php the_title(); ?></span>

		<div class="price-inf">	
			<div class="row align-items-center mg-all">	
				<div class="col-4 col-md-4 col-lg-5">	
					<span class="price-resume"><span class="moeda">€</span> <?php the_field('price');?></span>

				</div>					
				<div class="col-4 col-md-4  col-lg-7">	
					
					<p class="text-price-resume"><?php the_field('text_price');?></p>
				</div>
				<div class="col-4 col-md-4 text-center">	
					<a href="#" class="btn btn-info">Book Now</a>
				</div>
			</div>		

		</div>
	</div> 
