<?php get_header(); /* Template Name: Home*/ ?>
<section class="slider">
   <?php echo do_shortcode('[rev_slider alias="home"]');?>     
</section>


<section class="inf-home-tp container-full">
   <div class="container">
      <?php the_content(); ?>
   </div>
</section>

<div class="bloco-grid">
   <?php 
         // check if the flexible content field has rows of data
   if( have_rows('items')  ): ?>
      <?php // loop through the rows of data
      while ( have_rows('items') ) : the_row();

        if( get_row_layout() == 'template_packages' ): ?>
        <section class="container-full grey">
         <div class="container">
            <div class="full-cat-front">
               <div class="row aling-items-center header-cat">
                  <div class="col">
                     <h3><?php the_sub_field('title'); ?></h3>
                  </div>
                  <div class="col">
                     <a href="<?php the_sub_field('link'); ?>" class="pull-right btn btn-outline-success">SEE ALL</a>
                  </div>
               </div>
               <div class="row loop-items-in"><?php
               $posts = get_sub_field('blocks');

               if( $posts ): ?>
               <?php  foreach( $posts as $post):  ?>
                  <?php   get_template_part("templates/loop", "post-4"); ?>
               <?php endforeach; ?>
            <?php  endif; wp_reset_postdata();   ?>
         </div>
      </div>
   </div>
</section>


<?php elseif( get_row_layout() == 'template_regions' ):  ?>  
  <section class="container-full grey">
      <div class="container">

         <div class="full-reg-front">
            <div class="row aling-items-center header-cat">
               <div class="col">
                  <h3><?php the_sub_field('title'); ?></h3>
               </div>
               <div class="col">
                  <a href="<?php the_sub_field('link'); ?>" class="pull-right btn btn-outline-success">SEE ALL</a>
               </div>
            </div>


               <?php 

               $terms = get_sub_field('blocks');

               if( $terms ): ?>

                  <div class="row">

                  <?php foreach( $terms as $term ): ?>

                     <div class="col-12 col-md-3"">
                        <div class="col-in" style="background-image: url('<?php  echo $custom_field = get_field('imagem_categoria', $term ); ?>');">
                        
                              <span class="subtitle-cat"><?php the_field('subtitle', $term ); ?></span>

                              <h2 class="title-cat-pag"><?php echo  $term->name; ?></h2>
                        
                        </div>
                     </div>

                  <?php endforeach; ?>

                  </div>

               <?php endif; ?>


         </div> 
      </div>
   </section>

<?php  endif; ?>


<?php  endwhile; endif; ?>


</div>

<?php get_footer (); ?>