<?php $titan = TitanFramework::getInstance( 'inundaweb' ); ?>
<footer id="footer" class="site-footer" role="contentinfo">	
	<div class="newsletter">
		<div class="container">
			<div class="row align-items-center box-news"> 
				<div class="col-md-6 col-sm-12"> 
					<div class="row align-items-center"> 
						<div class="col-md-4"> 

							<img src="<?php bloginfo( 'template_url' )?>/img/icon-mail.png" alt="Cadastro Newsletter">
						</div>	
						<div class="col-md-8"> 
							<span class="title-news">Newsletter</span><p>Receba promoções e notícias</p>

						</div>			
					</div>			
				</div>			
				<div class="col-md-6 col-sm-12"> 
					<?php echo do_shortcode('[contact-form-7 id="330" title="Newsletter"]');?>
				</div>
			</div>
		</div>
	</div>


	<div class="main-rodape">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12">
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
				<div class="col-md-3 col-sm-12">
					<?php
					if(is_active_sidebar('rodape-4')){
						dynamic_sidebar('rodape-4');
					}
					?>
				</div> 
			</div> 
		</div> 
	</div> 
	<div class="copyright">
		<div class="container">
			<div class="row align-items-center"> 
				<div class="col-12 col-md-6 col-sm-4">
					<ul class="midias-rodape">
						<?php $var1 = $titan->getOption( 'face' ); if ($var1 != NULL){ ?><li><a href="<?php echo $var = $titan->getOption( 'face' ); ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li><?php } ?>	 
						<?php $var2 = $titan->getOption( 'insta' ); if ($var2 != NULL){ ?><li><a href="<?php echo $var2 = $titan->getOption( 'insta' ); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php } ?>	
						<?php $var3 = $titan->getOption( 'twitter' ); if ($var3 != NULL){ ?><li><a href="<?php echo  $var3; ?>" target="_blank"></a><i class="fa fa-twitter-square" aria-hidden="true"></i></li><?php } ?>					
					</ul> 
					
				</div> 	
				<div class="col-12 col-md-6 col-sm-8">
					
					<p><?php echo $mySavedValue2 = $titan->getOption( 'copyright' ); ?></p>
				</div> 
			</div> 
		</div> 
	</div> 


</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>