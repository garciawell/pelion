	<!DOCTYPE html> 
	<html <?php language_attributes(); ?> class="no-js">
	<head>
		<title><?php wp_title(); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
			<meta name="viewport" content="initial-scale=1, maximum-scale=1">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
			<!--[if lt IE 9]>
				<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
			<![endif]-->
			<?php wp_head(); ?> 
			
		</head>
		
		<body <?php body_class(); ?>>
			<div id="my-wrapper">

			<?php $titan = TitanFramework::getInstance( 'pelion' ); ?>

			<header id="header" >

				<div class="barra-topo">
					<div class="container">
						<div class="row">
							<div class="col-6">
								<ul class="menu-topo-links">
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<a class="left" href="mailto:<?php echo $tel = $titan->getOption( 'telefone' ); ?>"> <?php echo $tel = $titan->getOption( 'telefone' ); ?></a> | 
										<a href="tel:<?php echo $tel2 = $titan->getOption( 'telefone2' ); ?>"><?php echo $tel2 = $titan->getOption( 'telefone2' ); ?></a>
									</li>			
								</ul>


							</div>					
							<div class="col-6">
								<div class="pull-right topo-search">
									<i class="fa fa-search" aria-hidden="true"></i>
									<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
										<label>
											<input type="search" class="search-field"
											placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
											value="<?php echo get_search_query() ?>" name="s"
											title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
										</label>
										<input type="submit" class="search-submit"
										value="OK" />
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="menu-topo ">

					<nav class="navbar-topo">
						<div class="container">
							
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
								<a href="#my-menu" class="menu-button" id="open-button"></a>
							</div>
							
						</div>
					</nav>


				</div>


				<nav id="my-menu" class="menu-resp">
					<ul>
						<?php   wp_nav_menu_no_ul(); ?>
					</ul>
				</nav>


			</header><!-- .site-header -->

			<div id="content" class="site-content <?php if ( is_singular('product')) { echo 'mg-topo'; } ?>">
