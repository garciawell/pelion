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
			<p itemprop="description"><?php echo excerpt(45);  ?></p>
		</div>	

		<div class="lista-single">
			<div class="row">
				<div class="col-6 col-md-6 col-sm-12">
					<ul>

						<?php if( get_field('type')): ?>   
							<li>
								<i class="fa fa-home" aria-hidden="true"></i>
								<?php the_field('type'); ?>
							</li>
						<?php endif; ?>	


						<?php if( get_field('stars-acm')): ?>   
							<li>
								<i class="icon-trans-wt"></i>
								<?php the_field('stars-acm'); ?> 
							</li>
						<?php endif; ?>	

					</ul>
				</div>
				<div class="col-6 col-md-6 col-sm-12">
						<ul>

						<?php if( get_field('nutrition')): ?>   
							<li>
								<i class="icon-nt-wt"></i>
								<?php the_field('nutrition'); ?> 
							</li>
						<?php endif; ?>	
	

					<?php if( get_field('restaurant')): ?>   
							<li>
								<i class="icon-nt-wt"></i>
								<?php the_field('restaurant'); ?> 
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

						<li><strong>Location:</strong>
							<?php    
							$terms = get_the_terms( $post->ID , 'locations' );
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
						<li><strong>Environment:</strong>
							<?php    
							$terms = get_the_terms( $post->ID , 'environment' );
							if ( $terms != null ){ 
							foreach( $terms as $term ) {
							 $term_link = get_term_link( $term );
								echo "<a href='" . esc_url( $term_link ) . "'>";	 
								print $term->name ;
								unset($term); 
								echo "</a>";
							} } ?>
						 </li>
						<li><strong>View: </strong>
							<?php    
							$terms = get_the_terms( $post->ID , 'view' );
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
					 <span itemprop="priceCurrency" content="EUR"><span class="price" itemprop="price" content="<?php the_field('price');?>"><span class="moeda">€</span><?php $valor = get_field('price'); echo number_format($valor,0,",",".");  ?></span></span>
					  <link itemprop="availability" href="http://schema.org/InStock" content="In stock"/>
					<p class="text-price"><?php the_field('text_price');?></p>
				</div>			
				<div class="col-12 col-sm-6">	
					<a href="#" class="pull-right btn btn-secondary">Book Now</a>
				</div>
			</div>
		</div>
	</div>