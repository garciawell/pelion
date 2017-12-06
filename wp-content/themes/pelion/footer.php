<?php $titan = TitanFramework::getInstance( 'pelion' ); ?>
<?php if ( !is_404() && !is_search() ) { ?>
<section class="maps-footer">
	<div class="inner">
		<?php echo $mySavedValue2 = $titan->getOption( 'maps-footer' ); ?>
	</div>
</section>
<?php } ?>
<footer id="footer" class="site-footer" role="contentinfo">	
	<div class="main-rodape">
		<div class="container">
			<div class="row">
				<div class="col-6 col-md-3 col-sm-6">
					<?php
					if(is_active_sidebar('rodape-1')){
						dynamic_sidebar('rodape-1');
					}
					?>
				</div> 			
				<div class="col-6 col-md-3 col-sm-6"> 
					<?php
					if(is_active_sidebar('rodape-2')){
						dynamic_sidebar('rodape-2');
					}
					?>
				</div> 	 
				<div class="col-6 col-md-3 col-sm-6">
					<?php
					if(is_active_sidebar('rodape-3')){
						dynamic_sidebar('rodape-3');
					}
					?>
				</div> 		
				<div class="col-6 col-md-3 col-sm-6">
					<?php
					if(is_active_sidebar('rodape-4')){
						dynamic_sidebar('rodape-4');
					}
					?>
				</div> 
			</div> 
		</div> 

		<button class="scroll-top" id="scroll-top"><img src="<?php bloginfo('template_url'); ?>/img/icon-up.png"></button>
	</div> 
	<div class="copyright">
		<div class="container">
			<div class="row align-items-center"> 
				<div class="col-12 col-md-6 col-sm-8">
					<p><?php echo $mySavedValue2 = $titan->getOption( 'copyright' ); ?></p>
				</div> 	
				<div class="col-12 col-md-6 col-sm-4">
					<a href="http://lehype.net/" target="_blank" class="pull-right"><?php echo $mySavedValue2 = $titan->getOption( 'aditional' ); ?></a>
				
				</div> 
			</div> 
		</div> 
	</div> 


</footer><!-- .site-footer -->


<script> 
   $(document).ready(function() {
      $("#my-menu").mmenu({
         // options
      }, {
         // configuration
         offCanvas: {
            pageSelector: "#my-wrapper"
         }
      });
   });

 
</script>
</div><!-- .content -->

</div><!-- .my-page -->
<?php wp_footer(); ?>

</body>
</html>