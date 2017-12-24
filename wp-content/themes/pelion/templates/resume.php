<div class="resume" id="resume">
	<span class="title">Resume</span>
	<i class="icon-close" id="icon-close">X</i>
	<figure><?php the_post_thumbnail('resume');?></figure>
<?php
$post_type = get_post_type( get_the_ID() );
echo '<span class="post-title">' . $post_type . '</span>';


		?>
		<span class="title-mn"><?php the_title(); ?></span>

		<div class="price-inf">	
			<div class="row align-items-center mg-all">	
				<div class="col-4 col-md-4 col-lg-5">	
					<span class="price-resume"><span class="moeda">€</span> <?php the_field('price');?></span>

				</div>					
				<div class="col-4 col-md-4  col-lg-7">	
					
					<p class="text-price-resume"><?php $valor = get_field('price'); echo number_format($valor,0,",",".");  ?></p>
				</div>
				<div class="col-4 col-md-4 text-center">	
					<a href="#" class="btn btn-info">Book Now</a>
				</div>
			</div>		

		</div>
	</div> 
