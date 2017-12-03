<div class="col-12 col-md-6 col-lg-4">

	<div class="bloco-padrao">
		<div class="bloco-imagem">
			<?php if( get_field('text_label') ): ?>
			<div class="label"> 
				<span style="background:<?php the_field('cor_label'); ?>">
					<?php the_field('text_label'); ?>
				</span>
			</div>
			<?php endif; ?>
			<div class="owl-carousel owl-slider-post">
				<div class="item">
					<?php the_post_thumbnail( 'padrao', array( 'alt' => get_the_title() ) );  ?>			
				</div>
				<?php 
				$images = get_field('galeria');
					$size = 'padrao'; // (thumbnail, medium, large, full or custom size)
					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<div class="item">
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>

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
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>		
				</h2>
				<?php if( get_field('star') == '1' ){ ?>
				<ul class="rating">
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					
				</ul>
				<?php } else if( get_field('star') == '2' ) { ?> 
				<ul class="rating">
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				</ul>
				<?php } else if( get_field('star') == '3' ){  ?>
				<ul class="rating">
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				</ul>
				<?php } else if( get_field('star') == '4' ){  ?>
				<ul class="rating">
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				</ul>
			<?php } else if( get_field('star') == '5' ){  ?> 
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

				<?php	}?>	
			</div>

			<div class="middle">

				<ul>
					<li>
						<?php if( get_field('label-hotel')): ?>    
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
					<div class="col-12 col-sm-7">
						<div class="row no-gutters  align-items-center"> 
							<div class="col-12  col-sm-7">
								<span class="price"><span class="moeda">€</span> <?php the_field('price');?></span>
							</div>					
							<div class="col-12 col-sm-5">
								<p class="text-price"><?php the_field('text_price');?></p>
							</div>		 
						</div>		 
					</div>		 
					<div class="col-12  col-sm-5">
						<a href="<?php the_permalink();  ?>" class="pull-right btn btn-primary btn-square">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>