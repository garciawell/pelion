<?php get_header();  ?>

<div class="banner-full">
	<div class="container">
			<h1 class="title-cat"><?php single_cat_title();  ?></h1>
	</div>
</div>

<div class="container-full">
	<div id="content-main">
		<div class="container">
			<div class="row">
				<div class="col-9 col-lg-9 col-md-9 col-sm-12">
					<div id="response">
						<div class="row">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<?php   get_template_part("templates/loop", "post"); ?>
							<?php endwhile; else : ?>
							<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-3 col-lg-3 col-md-3 col-sm-12">


				<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
					<?php
					if( $terms = get_terms( 'options', 'orderby=name' ) ) : // to make it simple I use default categories
					echo '<select name="categoryfilter"><option>Select category...</option>';
					foreach ( $terms as $term ) :
							echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
						endforeach;
						echo '</select>';
					endif;
					?>
					<input type="text" name="price_min" placeholder="Min price" />
					<input type="text" name="price_max" placeholder="Max price" />
					<label>
						<input type="radio" name="date" value="ASC" /> Date: Ascending
					</label>
					<label>
						<input type="radio" name="date" value="DESC" selected="selected" /> Date: Descending
					</label>
					<label>
						<input type="checkbox" name="featured_image" /> Only posts with featured image
					</label>
					<button>Apply filter</button>
					<input type="hidden" name="action" value="myfilter">
				</form>


			</div>
		</div>
	</div>
</div>
</div>


<?php get_footer (); ?>  	 