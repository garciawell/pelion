<?php $titan = TitanFramework::getInstance( 'pelion' ); ?>
<footer id="footer" class="site-footer" role="contentinfo">	
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
					<p><?php echo $mySavedValue2 = $titan->getOption( 'copyright' ); ?></p>
				</div> 	
				<div class="col-12 col-md-6 col-sm-8">
					<p class="pull-right"><?php echo $mySavedValue2 = $titan->getOption( 'aditional' ); ?></p>
				
				</div> 
			</div> 
		</div> 
	</div> 


</footer><!-- .site-footer -->
<script type="text/javascript">
		jQuery(function($){
	$('#filter').submit(function(){
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('#response').html(data); // insert data
			}
		});
		return false;
	});
});
	
	
</script>
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>