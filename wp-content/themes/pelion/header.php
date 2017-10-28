	<!DOCTYPE html> 
	<html <?php language_attributes(); ?> class="no-js">
	<head>
		<title><?php wp_title(); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">


		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
			<!--[if lt IE 9]>
				<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
			<![endif]-->
			<?php wp_head(); ?> 
			

		</head>
		
		<body <?php body_class(); ?>>
			<?php $titan = TitanFramework::getInstance( 'pelion' ); ?>

			<div class="menu-wrap">
				<nav class="menu">
					<button class="close-button" id="close-button">
						Close Menu
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button> 
					<div class="icon-list">
						<span class="title-menu-resp">Navegação</span>
						<?php   wp_nav_menu_no_ul(); ?>

						<div class="bloc-menu-resp">
							<a class="inf-topo" href="mailto:<?php echo $tel = $titan->getOption( 'email' ); ?>"> <?php echo $tel = $titan->getOption( 'email' ); ?></a>
							<a class="inf-topo" href="tel:<?php echo $tel = $titan->getOption( 'telefone' ); ?>"><?php echo $tel = $titan->getOption( 'telefone' ); ?></a>
							<ul class="midias-rodape">
								<?php $var1 = $titan->getOption( 'face' ); if ($var1 != NULL){ ?><li><a href="<?php echo $var = $titan->getOption( 'face' ); ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li><?php } ?>	 
								<?php $var2 = $titan->getOption( 'insta' ); if ($var2 != NULL){ ?><li><a href="<?php echo $var2 = $titan->getOption( 'insta' ); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php } ?>	
								<?php $var3 = $titan->getOption( 'twitter' ); if ($var3 != NULL){ ?><li><a href="<?php echo  $var3; ?>" target="_blank"></a><i class="fa fa-twitter-square" aria-hidden="true"></i></li><?php } ?>					
							</ul> 
						</div>
					</div>
				</nav>

			</div>
			<header id="header" >

				<div class="barra-topo">
					<div class="container">
						<div class="row">
							<div class="col-6">
								<ul class="menu-topo-links">
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<a href="mailto:<?php echo $tel = $titan->getOption( 'telefone' ); ?>"> <?php echo $tel = $titan->getOption( 'telefone' ); ?></a> | 
										<a href="tel:<?php echo $tel2 = $titan->getOption( 'telefone2' ); ?>"><?php echo $tel2 = $titan->getOption( 'telefone2' ); ?></a>
									</li>			
								</ul>


							</div>					
							<div class="col-6">
								<div class="pull-right topo-search">
									<i class="fa fa-search" aria-hidden="true"></i>

								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="menu-topo">

					<nav class="navbar-topo">
						<div class="container no-padding">
							
							<div class="row no-gutters no-padding container-fluid align-items-center"> 
								<div class="col-md-3 navbar-header">
									<?php if ( is_home() || is_front_page() ) { ?>
									<h1>
										<a class="logo" href="<?php bloginfo('home')?>"> 
											<?php
											$imageID = $titan->getOption( 'logo_topo' );$imageSrc = $imageID;if ( is_numeric( $imageID ) ) {$imageAttachment = wp_get_attachment_image_src( $imageID );$imageSrc = $imageAttachment[0];} ?>
											<img src='<?php echo esc_url( $imageSrc ); ?>' alt="<?php echo get_bloginfo( 'description' ); ?>"> 
										</a>
									</h1>

									<?php } else { ?>
									<span>
										<a class="logo" href="<?php bloginfo('home')?>"> 
											<?php
											$imageID = $titan->getOption( 'logo_topo' );$imageSrc = $imageID;if ( is_numeric( $imageID ) ) {$imageAttachment = wp_get_attachment_image_src( $imageID );$imageSrc = $imageAttachment[0];} ?>
											<img src='<?php echo esc_url( $imageSrc ); ?>'> 
										</a>
									</span> 
									<?php }
									?>



								</div> 
								<div id="navbar-menu" class="col-md-9">
									<?php wp_nav_menu( array( 'menu' => 'Menu Principal', 'container'=>'', 'menu_class'=> 'pull-right' ) ); ?> 



								</div>
								<button class="menu-button" id="open-button">Open Menu</button>
							</div>
							
						</div>
					</nav>


				</div>


			</header><!-- .site-header -->


			<div id="content" class="site-content <?php if ( is_singular('product')) { echo 'mg-topo'; } ?>">
