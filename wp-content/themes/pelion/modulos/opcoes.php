<?php add_action( 'tf_create_options', 'mytheme_create_options' );




function mytheme_create_options() {


	$titan = TitanFramework::getInstance( 'pelion' );
	$adminPanel = $titan->createAdminPanel( array(
		'name' => 'Opções Gerais',
		'id' => 'opcoes_gerais',
		'position' => '2',
		'icon' => 'dashicons-admin-generic',
		'capability' => 'edit_posts', 




	) );

	/****************Cabeçalho*************************/
	$generalTab = $adminPanel->createTab( array(
		'name' => 'Cabeçalho',
		'id' => 'cabecalho',
	) );



	$generalTab->createOption( array(
		'name' => 'Logo Topo',
		'id' => 'logo_topo',
		'type' => 'upload',
		'placeholder' => 'clique aqui para adicionar uma imagem',
		'desc' => 'enviar arquivo'
	) );

	$generalTab->createOption( array(
		'name' => 'Phone',
		'id' => 'telefone',
		'type' => 'text',
		'placeholder' => '(41) 3333-3333',
		'desc' => ''
	) );

	$generalTab->createOption( array(
		'name' => 'Phone2',
		'id' => 'telefone2',
		'type' => 'text',
		'placeholder' => '(41) 3333-3333',
		'desc' => ''
	) );





	$generalTab->createOption( array(
		'type' => 'save',
		'save' => 'SALVAR',
		'use_reset' => false
	) ); 

	/**************Fim Cabeçalho*************************/





	/****************Rodapé*************************/

	$generalTab2 = $adminPanel->createTab( array(
		'name' => 'Rodapé',
		'id' => 'rodape',
	) );
/*
	$generalTab2->createOption( array(
		'name' => 'Logo Rodapé',
		'id' => 'logo_rodape',
		'size' => 'full',
		'type' => 'upload',
		'placeholder' => 'clique aqui para adicionar uma imagem',
		'desc' => 'enviar arquivo'
	) );
*/
/*

	$generalTab2->createOption( array(
		'name' => 'Facebook',
		'id' => 'face',
		'type' => 'text',
		'placeholder' => 'https://www.facebook.com/',
	) );	

	$generalTab2->createOption( array(
		'name' => 'Twitter',
		'id' => 'twitter',
		'type' => 'text',
		'placeholder' => 'https://www.twitter.com/',
	) );
	$generalTab2->createOption( array(
		'name' => 'Instagram',
		'id' => 'insta',
		'type' => 'text',
		'placeholder' => 'https://www.insta.com/',
	) );
*/



	$generalTab2->createOption( array(
		'name' => 'Copyright',
		'id' => 'copyright',
		'type' => 'text',
		'placeholder' => '© Copyright',
	) );

	$generalTab2->createOption( array(
		'name' => 'Aditional',
		'id' => 'aditional',
		'type' => 'text',
		'placeholder' => '',
	) );
	$generalTab2->createOption( array(
		'name' => 'Maps Footer',
		'id' => 'maps-footer',
		'type' => 'textarea',
		'placeholder' => '',
	) );

	$generalTab2->createOption( array(
		'type' => 'save',
		'save' => 'SALVAR',
		'use_reset' => false
	) ); 

	/************Fim*Rodapé*************************/

} 