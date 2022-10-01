<?php
function get_field($key, $page_id = 0) {
	$id = $page_id !== 0 ? $page_id : get_the_ID();
	return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0) {
	echo get_field($key, $page_id);
}

add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home() {
	$cmb = new_cmb2_box([
		'id' => 'home_box',
		'title' => 'Pagina Home',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-home.php',
		],
	]);
    $cmb->add_field([
        'name' => 'Titulo da pagina',
        'id' => 'title-page',
        'type' => 'text',
    ]);
    
    $cmb->add_field([
        'name' => 'Titulo do meno a esquerda',
        'id' => 'titulo-menu-left',
        'type' => 'text',
    ]);
    
    $cmb->add_field([
        'name' => 'Titulo do meno a direita',
        'id' => 'titulo-menu-right',
        'type' => 'text',
    ]);

	$menuLeft = $cmb->add_field([
		'name' => 'Menu - esquerda',
		'id' => 'menu-left',
		'type' => 'group',
		'repeatable' => true,
		'options' => [
			'group_title' => 'item - {#}',
			'add_button' => 'Adicionar item',
			'remove_button' => 'Remover item',
			'sortable' => true,
		]
	]);

	$cmb->add_group_field($menuLeft, [
		'name' => 'Nome',
		'id' => 'nome',
		'type' => 'text',
	]);

	$cmb->add_group_field($menuLeft, [
		'name' => 'Descrição',
		'id' => 'descricao',
		'type' => 'text',
	]);

	$cmb->add_group_field($menuLeft, [
		'name' => 'Preço',
		'id' => 'preco',
		'type' => 'text_money',
        'before_field'=>'R$',
	]);

    $menuRight = $cmb->add_field([
		'name' => 'Menu - direita',
		'id' => 'menu-right',
		'type' => 'group',
		'repeatable' => true,
		'options' => [
			'group_title' => 'item - {#}',
			'add_button' => 'Adicionar item',
			'remove_button' => 'Remover item',
			'sortable' => true,
		]
	]);

	$cmb->add_group_field($menuRight, [
		'name' => 'Nome',
		'id' => 'nome',
		'type' => 'text',
	]);

	$cmb->add_group_field($menuRight, [
		'name' => 'Descrição',
		'id' => 'descricao',
		'type' => 'text',
	]);

	$cmb->add_group_field($menuRight, [
		'name' => 'Preço',
		'id' => 'preco',
		'type' => 'text_money',
        'before_field'=>'R$',
	]);


}

add_action('cmb2_admin_init', 'cmb2_fields_contato');
function cmb2_fields_contato() {
	$cmb = new_cmb2_box([
		'id' => 'contato_box',
		'title' => 'Pagina Contato',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-contato.php',
		],
	]);
    $cmb->add_field([
        'name' => 'Titulo da pagina',
        'id' => 'title-page',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Imagem do mapa',
        'id' => 'img-map',
        'type' => 'file',
        'options'=>[
            'url'=> false,
        ],
    ]);
    $cmb->add_field([
        'name' => 'URL da Google maps',
        'id' => 'url-map',
        'type' => 'text_url',
    ]);
    $cmb->add_field([
        'name' => 'Texto alternativo',
        'id' => 'alt-map',
        'type' => 'text',
        'description' => 'Texto alternatico no caso da imagem não carrege.'
    ]);
    $cmb->add_field([
        'name' => 'Telefone',
        'id' => 'telefone',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Email',
        'id' => 'email',
        'type' => 'text_email',
    ]);
    $cmb->add_field([
        'name' => 'Rua - Endereço',
        'id' => 'rua',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Cidade - Endereço',
        'id' => 'cidade',
        'type' => 'text',
    ]);
    $redesSociais = $cmb->add_field([
		'name' => 'Redes sociais',
		'id' => 'redes-sociais',
		'type' => 'group',
		'repeatable' => true,
		'options' => [
			'group_title' => 'Rede social - {#}',
			'add_button' => 'Adicionar',
			'remove_button' => 'Remover',
			'sortable' => true,
		]
	]);
    $cmb->add_group_field($redesSociais, [
        'name' => 'Nome da rede social',
        'id' => 'nome-rede-social',
        'type' => 'text',
    ]);
    $cmb->add_group_field($redesSociais, [
        'name' => 'URL da rede social',
        'id' => 'url-rede-social',
        'type' => 'text_url',
    ]);

    $horarios = $cmb->add_field([
		'name' => 'Horarios de funcionamento',
		'id' => 'horarios',
		'type' => 'group',
		'repeatable' => true,
		'options' => [
			'group_title' => 'Horario - {#}',
			'add_button' => 'Adicionar',
			'remove_button' => 'Remover',
			'sortable' => true,
		]
	]);
    $cmb->add_group_field($horarios, [
        'name' => 'Horario',
        'id' => 'horario',
        'type' => 'text',
    ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_sobre');
function cmb2_fields_sobre() {
	$cmb = new_cmb2_box([
		'id' => 'sobre_box',
		'title' => 'Pagina Sobre',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-sobre.php',
		],
	]);
    $cmb->add_field([
        'name' => 'Titulo da pagina',
        'id' => 'title-page',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Imagem da fachada',
        'id' => 'img-fachada',
        'type' => 'file',
        'options'=>[
            'url'=> false,
        ],
    ]);

    $cmb->add_field([
        'name' => 'Historia',
        'id' => 'historia',
        'type' => 'textarea',
    ]);
    // $horarios = $cmb->add_field([
	// 	'name' => 'Horarios de funcionamento',
	// 	'id' => 'horarios',
	// 	'type' => 'group',
	// 	'repeatable' => true,
	// 	'options' => [
	// 		'group_title' => 'Horario - {#}',
	// 		'add_button' => 'Adicionar',
	// 		'remove_button' => 'Remover',
	// 		'sortable' => true,
	// 	]
	// ]);
}


















remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
?>