<?php get_header();  ?>
<?php 
   // vars
   $queried_object = get_queried_object(); 
   $taxonomy = $queried_object->taxonomy;
   $term_id = $queried_object->term_id;  
   
   ?>
   <div class="banner-full d-flex  text-center align-items-center" style="background-size:cover; background-image: url('<?php  if( get_field('large_category' , $queried_object) ): the_field('large_category' , $queried_object); else:  echo bloginfo(home) . '/wp-content/uploads/2017/10/banner-regioes.jpg';   endif;; ?>');">





<?php if( get_field('video_url'  , $queried_object) ): ?>

<div class="video-background">
    <div class="video-foreground">
    
    </div>
  </div>
<script>
//YOUTUBE VIDEO
function getId(url) {
    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);

    if (match && match[2].length == 11) {
        return match[2];
    } else {
        return 'error';
    }
}
  var map_url = '<?php  the_field('video_url' , $queried_object);?>';
var myId = getId(map_url);

$('#myId').html(myId);

$('.video-foreground').html('<iframe src="//www.youtube.com/embed/'+myId+'?controls=0&autohide=1&disablekb=1&showinfo=0&rel=0&mute=1&autoplay=1&loop=1&playlist='+myId+'" allowfullscreen></iframe>');
 </script> 

<?php endif; ?>

   <div class="container">
      <h1 class="title-cat text-center"><?php single_cat_title();  ?></h1>
      <span class="subtitle-cat text-center"><?php echo category_description(); ?> </span>
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
                     itemtype="http://schema.org/ListItem"><a itemprop="item"  class="breadcrumb-item" href="<?php bloginfo('home'); ?>/region"><span itemprop="name">Regions</span></a>
                  </li>
                  <li itemprop="itemListElement" itemscope
                     itemtype="http://schema.org/ListItem"><span itemprop="item"  class="breadcrumb-item active" href="<?php bloginfo('home'); ?>/region"><span itemprop="name"><?php single_cat_title(); ?></span></span>
                  </li>
               </ul>
               <div id="main">
                  <p><?php the_field('description_large' , $queried_object);?> </p>
                  <div class="bloco-cats">
                     <?php 
                        $term = get_queried_object();
                        
                        $children = get_terms( $term->taxonomy, array(
                        'parent'    => $term->term_id,
                        'hide_empty' => false
                        ) );
                        // print_r($children); // uncomment to examine for debugging
                        if($children) { ?>
                     <?php
                        // List posts by the terms for a custom taxonomy of any post type
                        
                        
                        $tax = 'regions';
                        $tax_args = array( 
                        'order' => 'DESC',
                        'parent' => 0,
                        );
                        // get all the first level terms only
                        $tax_terms = get_terms( $tax, $tax_args );
                        if ($tax_terms) {
                        ?>
                     <h4 class="parent-term"><?php echo $tax_term->name; ?></h4>
                     <?php
                        // get all its children
                        $child_terms = ""; // first ensure this var is empty
                        $child_terms = get_terms ( $tax, array('order' => 'DESC', 'parent' => $tax_term = $term_id,) );
                        // store an array of child terms slug
                        $child_terms_array = array();
                        foreach ($child_terms as $child_term){
                        $child_terms_array[] = $child_term->slug;
                        }
                        
                        
                        // if any, foreach child term, query the posts
                        if ( !empty($child_terms) ){  
                        foreach ($child_terms as $child_term){
                        $child_args=""; 
                        $child_args = array(
                        'post_type' => $post_type,
                        'tax_query' => array(
                        array(
                        'taxonomy' => $tax, 
                        'field' => 'slug', 
                        'terms' => $child_term->slug, 
                        'include_children' => false, 
                        'operator' => 'IN' 
                        )
                        ),
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'order' => 'ASC',
                        );
                        // query the posts  
                        $child_query = null;
                        $child_query = new WP_Query($child_args);
                        
                        if( $child_query->have_posts() ) : ?>
                     <div class="full-cat">
                       <div class="row aling-items-cente header-cat">
                          <div class="col-12 col-lg-6">
                             <h2 class="title-main">
                                <?php echo $child_term->name; ?> 
                             </h2>
                          </div>
                          <div class="col-12 col-lg-6">
                              <?php 
                             $term_slug = $queried_object->slug;  
                              ?>
                             <a href="<?php bloginfo('home'); ?>/region/<?php echo  $term_slug ."/".$child_term->slug ?>" class="pull-right btn btn-outline-success">SEE ALL</a>
                          </div>
                       </div>
                       <div class="row">
                          <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
                          <?php   get_template_part("templates/loop", "post"); ?>
                          <?php endwhile; // end of loop ?>
                       </div>
                     </div>
                     <?php endif; // if have_posts()
                        wp_reset_query();
                        } // end foreach #child_terms
                        }
                        }
                        ?>
                     <?php }  else { ?>
                     <div class="row">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php   get_template_part("templates/loop", "post"); ?>
                   
                     <?php endwhile; endif; 

                      echo '</div>';  }
                        ?>

                  </div>
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
            <div class="pad-25 col-12 col-lg-3 col-md-12 col-sm-12">
               <?php get_sidebar('region');?>
            </div><!---->
         </div>
      </div>
   </div>

<?php get_footer (); ?>