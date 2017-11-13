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
        <section class="container-full"  style="background:<?php the_sub_field('background'); ?>">
         <div class="container">
            <div class="full-cat-front">
               <div class="row aling-items-center header-cat">
                  <div class="col">
                     <h3 class="title-main"><?php the_sub_field('title'); ?></h3>
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
  <section class="container-full" style="background:<?php the_sub_field('background'); ?>">
   <div class="container">

      <div class="full-reg-front">
         <div class="row aling-items-center header-cat">
            <div class="col">
               <h3 class="title-main"><?php the_sub_field('title'); ?></h3>
               <p><?php the_sub_field('desc'); ?></p>
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

<?php elseif( get_row_layout() == 'template_banner' ):  ?>  
  <section class="container-full template-banner">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-12 col-sm-6">
            <h4><?php the_sub_field('title'); ?></h4>
            <p class="p-17"><?php the_sub_field('desc'); ?></p>
            <div class="bottom-btn">

               <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-outline-secondary"><?php the_sub_field('button_text'); ?></a>


               <a href="<?php the_sub_field('button_link_2'); ?>" class="btn btn-secondary "><?php the_sub_field('button_text_2'); ?></a>

            </div>
         </div>           
         <div class="col-12 col-sm-6">
            <ul class="list-items-in">
               <?php if( have_rows('list_items') ):  while ( have_rows('list_items') ) : the_row(); ?>
                  <li>
                     <div class="row align-items-center">
                        <div class="col-12 col-sm-2">
                          <figure><img src="<?php the_sub_field('icon'); ?>"></figure> 
                       </div> 
                       <div class="col-12 col-sm-10">

                        <span><?php the_sub_field('text'); ?></span>
                     </div>

                  </div>
               </li>

            <?php endwhile; endif; ?>
         </ul>
      </div>

   </div>
</div>
</section>





<?php elseif( get_row_layout() == 'template_offers' ):  ?>  
  <section class="container-full" style="background:<?php the_sub_field('background'); ?>">
   <div class="container">

      <div class="full-reg-front">
         <div class="row aling-items-center header-cat">
            <div class="col">
               <h3 class="title-main"><?php the_sub_field('title'); ?></h3>
               <p><?php the_sub_field('desc'); ?></p>
            </div>
            <div class="col">
               <a href="<?php the_sub_field('link'); ?>" class="pull-right btn btn-outline-success">SEE ALL</a>
            </div>
         </div>


         <?php if( have_rows('blocks') ): ?>

          <div class="row">
             <?php  while ( have_rows('blocks') ) : the_row(); ?>

               <div class="col-12 col-md-3">
                  <?php 
                  $attachment_id = get_sub_field('imagem');
                     $size = "padrao-md"; // (thumbnail, medium, large, full or custom size)
                     $image = wp_get_attachment_image_src( $attachment_id, $size );
                     ?>
                     <div class="col-in" style="background-image: url('<?php echo $image[0]; ?>');">

                        <span class="subtitle-cat"><?php the_sub_field('subtitle'); ?></span>

                        <h4 class="title-cat-pag"><?php the_sub_field('title'); ?></h4>

                     </div>
                  </div> 

               <?php endwhile; ?>
            </div> 
         <?php endif; ?>

      </div>




   </div> 
</div>
</section>


<?php  endif; ?>


<?php  endwhile; endif; ?>


</div>

<?php get_footer (); ?>