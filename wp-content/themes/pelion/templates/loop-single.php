<div class="infs-single">
	<?php    
	$terms = get_the_terms( $post->ID , 'options' );
// Loop over each item since it's an array
	if ( $terms != null ){ 
		foreach( $terms as $term ) {
			print $term->name ;
			unset($term); 
		} } ?>

		<h1><?php the_title();  ?></h1>

		<div class="rating">
			<?php if( get_field('star') == 'option1' ){ ?>
			<ul class="rating">
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				<li><i class="fa fa-star-o" aria-hidden="true"></i></li>

			</ul>
			<?php } else if( get_field('star') == 'option2' ) { ?> 
			<ul class="rating">
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
			</ul>
			<?php } else if( get_field('star') == 'option3' ){  ?>
			<ul class="rating">
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
			</ul>
			<?php } else if( get_field('star') == 'option4' ){  ?>
			<ul class="rating">
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
			</ul>
			<?php } else if( get_field('star') == 'option5' ){  ?>
			<ul class="rating">
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
				<li><i class="fa fa-star" aria-hidden="true"></i></li>
			</ul>

			<?php } ?>	
		</div>

		<div class="descricao">
			<p><?php the_excerpt();  ?></p>
		</div>	

		<div class="lista-single">
			<div class="row">
				<div class="col-6 col-md-6 col-sm-12">
					<ul>

						<?php if( get_field('label-hotel')): ?>   
							<li>
								<i class="icon-ht-wt"></i>
								<?php the_field('label-hotel'); ?>
							</li>
						<?php endif; ?>	

						<?php if( get_field('nutrition')): ?>   
							<li>
								<i class="icon-nt-wt"></i>
								<?php the_field('nutrition'); ?> 
							</li>
						<?php endif; ?>	

						<?php if( get_field('transfer')): ?>   
							<li>
								<i class="icon-trans-wt"></i>
								<?php the_field('transfer'); ?> 
							</li>
						<?php endif; ?>	

					</ul>
				</div>
				<div class="col-6 col-md-6 col-sm-12">
						<ul>
							<?php if( get_field('age')): ?>   
								<li>
									<i class="icon-age-wt"></i> 
									(<?php the_field('age'); ?>)
								</li>
							<?php endif; ?>

							<?php if( get_field('fly')): ?>   
								<li>
									<i class="icon-flight-wt"></i> 
									<?php the_field('fly'); ?>
								</li>
							<?php endif; ?>

						</ul>
				</div>
			</div>
		</div>
		<div class="bloco-tags">
			<div class="row">
				<div class="col-6 col-md-6 col-sm-12">
					<ul>
						<li>
						Season:
							<?php    
							$terms = get_the_terms( $post->ID , 'seasons' );
							if ( $terms != null ){ 
							foreach( $terms as $term ) {
							 $term_link = get_term_link( $term );
								echo "<a href='" . esc_url( $term_link ) . "'>";	 
								print $term->name ;
								unset($term); 
								echo "</a>";
							} } ?>
						</li>

						<li>Regions:
							<?php    
							$terms = get_the_terms( $post->ID , 'regions' );
							if ( $terms != null ){ 
							foreach( $terms as $term ) {
							 $term_link = get_term_link( $term );
								echo "<a href='" . esc_url( $term_link ) . "'>";	 
								print $term->name ;
								unset($term); 
								echo "</a>";
							} } ?>
						 </li>
						<li>Theme:
							<?php    
							$terms = get_the_terms( $post->ID , 'theme' );
							if ( $terms != null ){ 
							foreach( $terms as $term ) {
							 $term_link = get_term_link( $term );
								echo "<a href='" . esc_url( $term_link ) . "'>";	 
								print $term->name ;
								unset($term); 
								echo "</a>";
							} } ?>
						</li>
					</ul>
				</div>
				<div class="col-6 col-md-6 col-sm-12">
					<ul>
						<li>Suitable for:
							<?php    
							$terms = get_the_terms( $post->ID , 'suitable' );
							if ( $terms != null ){ 
							foreach( $terms as $term ) {
							 $term_link = get_term_link( $term );
								echo "<a href='" . esc_url( $term_link ) . "'>";	 
								print $term->name ;
								unset($term); 
								echo "</a>";
							} } ?>
						 </li>
						<li>Difficulty: 
							<?php    
							$terms = get_the_terms( $post->ID , 'difficulty' );
							if ( $terms != null ){ 
							foreach( $terms as $term ) {
								 $term_link = get_term_link( $term );
								echo "<a href='" . esc_url( $term_link ) . "'>";	 
								print $term->name ;
								unset($term); 
								echo "</a>";
							} } ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>