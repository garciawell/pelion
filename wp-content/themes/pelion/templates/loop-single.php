<div class="infs-single">
<?php
$post_type = get_post_type( get_the_ID() );
echo '<span class="post-title">' . $post_type . '</span>';


		?>
		<h1 itemprop="name"><?php the_title();  ?></h1>

		<div itemprop="aggregateRating"
    itemscope itemtype="http://schema.org/AggregateRating" class="rating">
		     <meta itemprop="ratingValue" content="<?php the_field('star'); ?>">
		     <span itemprop="reviewCount" content="1">
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
			<p itemprop="description"><?php echo excerpt(50);  ?></p>
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
							<li>			
								<?php  $var2 = get_field('age'); ?>
								<i class="icon-age-wt"></i> 
								(<?php echo $var2['label']; ?>)
							</li>
	


								<li>
						<?php  $var3 = get_field('term-flight'); ?>
						<i class="icon-flight-wt"></i> 
						<?php echo $var3['label']; ?>
								</li>


						</ul>
				</div>
			</div>
		</div>
		<div class="bloco-tags">
			<div class="row">
				<div class="col-6 col-md-6 col-sm-12">
					<ul>
						<li>
						<strong>Season:</strong>
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

						<li><strong>Regions:</strong>
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
						<li><strong>Theme:</strong>
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
						<li><strong>Suitable for:</strong>
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
						<li><strong>Difficulty: </strong>
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

		<div class="price-inf"  itemprop="offers" itemscope itemtype="http://schema.org/Offer">	
			<div class="row align-items-center">	
				<div class="col-12 col-sm-6">	
					 <span itemprop="priceCurrency" content="EUR"><span class="price" itemprop="price" content="<?php the_field('price');?>"><span class="moeda">€</span> <?php the_field('price');?></span></span>
					  <link itemprop="availability" href="http://schema.org/InStock" content="In stock"/>
					<p class="text-price"><?php the_field('text_price');?></p>
				</div>			
				<div class="col-12 col-sm-6">	
					<a href="#" class="pull-right btn btn-secondary">Book Now</a>
				</div>
			</div>
		</div>
	</div>