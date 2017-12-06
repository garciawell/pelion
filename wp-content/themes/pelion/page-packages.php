<?php get_header();  ?>
<?php 
   
   ?>
<div class="banner-full d-flex  text-center align-items-center" style="background-size:cover; background-image: url('<?php  if( get_field('banner') ): the_field('banner'); else: echo bloginfo(home) . '/wp-content/uploads/2017/10/banner-regioes.jpg';   endif;; ?>');">

   <div class="container">
      <h1 class="title-cat text-center"><?php the_title();  ?></h1>
           <span class="subtitle-cat text-center"> <?php the_field('description_pages'); ?> </span>
          <a class="ancora"  href="#content-main"><img src="<?php bloginfo('template_url'); ?>/img/icon-down.png"></a>  
   </div>
</div>
   <div id="content-main">
      <div class="container">
         <div class="row-pad-25 row order-resp">
            <div class="pad-25 col-12 col-lg-9 col-md-12 col-sm-12">
               <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope
                     itemtype="http://schema.org/ListItem"><a itemprop="item" class="breadcrumb-item" href="<?php bloginfo('home'); ?>"><span itemprop="name">Home</span></a></li>

                  <li itemprop="itemListElement" itemscope
                     itemtype="http://schema.org/ListItem"><span itemprop="item"  class="breadcrumb-item active" href="<?php bloginfo('home'); ?>/region"><span itemprop="name"><?php the_title();  ?></span></span>
                  </li>
               </ul>
                 <div class="desc-page">
                  <?php the_content(); ?>
               </div>
               <div id="main">
                  <p><?php the_field('description_large' , $queried_object);?> </p>
                    <div class="bloco-cats">

                      <div class="row">
                      <?php
                      $the_press = new WP_Query(array('post_type' => 'packages','posts_per_page' => 12,'paged'=> get_query_var('paged') ));
                        // The Loop
                      $n=1;   while ($the_press->have_posts()) : $the_press->the_post();
                      $count = $the_press->post_count;
                      ?>
                        <?php   get_template_part("templates/loop", "post"); ?>
                      <?php  if( $n % 7 == 6 ) {  ?>
      
                      <div class="col-12 personalized"> <?php echo  do_shortcode('[personalized]'); ?></div> 
                      <?php   } ?>

                      <?php $n++; endwhile; ?> 
                      </div>
                      <?php if(function_exists('wp_pagenavi')) { ?>
                      <div class="pagination-pd"> <?php  wp_pagenavi(array('query'=> $the_press)); ?> </div>
                      <?php  } else {
                      echo '</div>'; 
                      }?>
                    <?php wp_reset_postdata();?>
                    </div>
      
               <?php 
                  $images = get_field('galeria' , $queried_object);
                                        $size = 'padrao'; // (thumbnail, medium, large, full or custom size)
                  
                                        if( $images ): ?>
               <div class="galeria-cat">
                  <h3 class="title-main">PHOTO GALERY</h3>
                  <ul class="row">
                     <?php foreach( $images as $image ): ?>
                     <li class="col-4 col-md-4 col-sm-6"> 
                        <a href="<?php echo $image['url']; ?>" data-rel="lightbox">
                        <img src="<?php echo $image['sizes']['padrao']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                     </li>
                     <?php endforeach; ?>
                  </ul>
               </div>
               <?php endif; ?>
               <?php //include('bloco-build.php'); ?>
            </div>
            </div>
            <div class="pad-25 col-12 col-lg-3 col-md-12 col-sm-12">
               <?php get_sidebar('region');?>
            </div><!---->
         </div>
      </div>
   </div>

<?php get_footer (); ?>