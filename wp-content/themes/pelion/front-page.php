<?php get_header(); /* Template Name: Home*/ ?>
<section class="slider">
   <?php echo do_shortcode('[rev_slider alias="video"]');?>     
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
                  <div class="col-12 col-lg-6">
                     <h3 class="title-main"><?php the_sub_field('title'); ?></h3>
                  </div>
                  <div class="col-12 col-lg-6">
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
         <div class="row aling-items-center header-cat items">
            <div class="col-12 col-md-12 col-lg-9 flex">
               <h3 class="title-main"><?php the_sub_field('title'); ?></h3>
               <p><?php the_sub_field('desc'); ?></p>
            </div>
            <div class="col-12 col-md-12 col-lg-3">
               <a href="<?php the_sub_field('link'); ?>" class="pull-right btn btn-outline-success">SEE ALL</a>
            </div>
         </div>


         <?php 

         $terms = get_sub_field('blocks');

         if( $terms ): ?>

         <div class="row">

            <?php foreach( $terms as $term ):
            $term_link = get_term_link( $term );
            ?>

            <div class="col-12 col-md-6 col-lg-3">
               <a href="<?php echo $term_link; ?>">
                  <div class="col-in effect-hover" style="background-image: url('<?php  echo $custom_field = get_field('imagem_categoria', $term ); ?>');">
                     <div class="in">


                        <span class="subtitle-cat"><?php the_field('subtitle', $term ); ?></span>

                        <h2 class="title-cat-pag"><?php echo  $term->name; ?></h2>

                     </div>
                  </div>
               </a>
            </div>

         <?php endforeach; ?>

      </div>

   <?php endif; ?>


</div> 
</div>
</section>

<?php elseif( get_row_layout() == 'template_banner' ):  ?>  
  <section class="container-full template-banner">
<svg class="uvc-tilt-left-seperator top" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#f5f5f5" width="100%" height="70" viewBox="0 0 4 0.266661" preserveAspectRatio="none" style="height: 70px;"><polygon class="fil0" points="4,0 4,0.266661 -0,0.266661 "></polygon></svg>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-12 col-md-6">
            <h4><?php the_sub_field('title'); ?></h4>
            <p class="p-17"><?php the_sub_field('desc'); ?></p>
            <div class="bottom-btn">

               <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-outline-secondary"><?php the_sub_field('button_text'); ?></a>


               <a href="<?php the_sub_field('button_link_2'); ?>" class="btn btn-secondary "><?php the_sub_field('button_text_2'); ?></a>

            </div>
         </div>           
         <div class="col-12 col-md-6">
            <ul class="list-items-in">
               <?php if( have_rows('list_items') ):  while ( have_rows('list_items') ) : the_row(); ?>
                  <li>
                     <div class="row align-items-center">
                        <div class="col-12 col-sm-12  col-md-3 col-lg-2">
                          <figure><img src="<?php the_sub_field('icon'); ?>"></figure> 
                       </div> 
                       <div class="col-12 col-sm-12  col-md-9 col-lg-10">

                        <span><?php the_sub_field('text'); ?></span>
                     </div>

                  </div>
               </li>

            <?php endwhile; endif; ?>
         </ul>
      </div>

   </div>
</div>

<svg class="uvc-tilt-left-seperator bottom" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#f5f5f5" width="100%" height="70" viewBox="0 0 4 0.266661" preserveAspectRatio="none" style="height: 70px;"><polygon class="fil0" points="4,0 4,0.266661 -0,0.266661 "></polygon></svg>
</section>





<?php elseif( get_row_layout() == 'template_offers' ):  ?>  
  <section class="container-full" style="background:<?php the_sub_field('background'); ?>">
   <div class="container">

      <div class="full-reg-front">
         <div class="row aling-items-center header-cat items">
            <div class="col-12 col-lg-9 col-md-12 flex">
               <h3 class="title-main"><?php the_sub_field('title'); ?></h3>
               <p><?php the_sub_field('desc'); ?></p>
            </div>
            <div class="col-1 col-md-12 col-lg-3">
               <a href="<?php the_sub_field('link'); ?>" class="pull-right btn btn-outline-success">SEE ALL</a>
            </div>
         </div>


         <?php if( have_rows('blocks') ): ?>

          <div class="row">
             <?php  while ( have_rows('blocks') ) : the_row(); ?>

                <div class="col-12 col-md-6 col-lg-3">
                 <a href="<?php the_sub_field('link');?>">
                  <?php 
                  $attachment_id = get_sub_field('imagem');
                        $size = "padrao-md"; // (thumbnail, medium, large, full or custom size)
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <div class="col-in effect-hover" style="background-image: url('<?php echo $image[0]; ?>');">
                          <div class="in">
                           <span class="subtitle-cat"><?php the_sub_field('subtitle'); ?></span>

                           <h4 class="title-cat-pag"><?php the_sub_field('title'); ?></h4>

                        </div>
                     </div>
                  </a>
               </div> 

            <?php endwhile; ?>
         </div> 
      <?php endif; ?>

   </div>




</div> 
</div>
</section>

<?php elseif( get_row_layout() == 'template_reviews' ):  ?>  
  <section class="container-full ct-reviews-home" >
   <svg class="uvc-tilt-left-seperator top" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#ffffff" width="100%" height="70" viewBox="0 0 4 0.266661" preserveAspectRatio="none" style="height: 70px;"><polygon class="fil0" points="4,0 4,0.266661 -0,0.266661 "></polygon></svg>
   <div class="container">

      <h3 class="title-white text-center">Reviews</h3>
      <?php 

      $posts = get_sub_field('items');
      if( $posts ): ?>
      <div class="row owl-carousel" id="owl-review">
         <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <div class="item">
               <figure class="icon-person"><img src="<?php bloginfo('template_url'); ?>/img/icon-person.png"></figure>
               <div class="col-review-home-in">
                  <?php setup_postdata($post); ?>


                  <p>"<?php echo excerpt(25);  ?>"</p>
                  <a href="<?php the_permalink(); ?>"><h4 class="title-rating">- <?php the_title(); ?></h4></a>
                  <?php if( get_field('review') == '1' ){ ?>
                  <ul class="rating">
                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                  </ul>
                  <?php } else if( get_field('review') == '2' ) { ?> 
                  <ul class="rating">
                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  </ul>
                  <?php } else if( get_field('review') == '3' ){  ?>
                  <ul class="rating">
                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  </ul>
                  <?php } else if( get_field('review') == '4' ){  ?>
                  <ul class="rating">
                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                     <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  </ul>
                  <?php } else if( get_field('review') == '5' ){  ?> 
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

                  <?php }?>   



               </div>
            </div>
         <?php endforeach; ?>

         <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      </div>
   <?php endif; ?>   
   <div class="text-center mg-tp-35">
     <a href="<?php bloginfo('home'); ?>/reviews" class="btn btn-outline-secondary">SEE ALL</a>   

  </div>
</div>
</section>



<?php elseif( get_row_layout() == 'template_text' ):  ?>  
  <section class="container-full ct-text" >
   <div class="container">
      <h3 class="noupper title-main text-center mg-bt-25"><?php the_sub_field('title'); ?></h3>
      <p class="p-17 text-center"><?php the_sub_field('desc'); ?></p>
   </div>
</section>



<?php  endif; ?>


<?php  endwhile; endif; ?>


</div>

<?php get_footer (); ?>