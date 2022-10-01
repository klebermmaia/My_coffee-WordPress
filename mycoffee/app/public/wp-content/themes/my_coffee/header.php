<?php
	$contato = get_page_by_title('contato')->ID;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="<?php bloginfo('name'); ?> - <?php wp_title('titulo-seo'); ?> <?php the_field('descricao-seo'); ?>">
		<title><?php bloginfo('name'); ?> | <?php wp_title(''); ?> - <?php the_field('titulo-seo'); ?></title>

		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		<?php wp_head(); ?>
	</head>

	<body>
		
		<header>
			<nav>
				<?php
					$args = array(
						'menu' => 'principal',
						'container' => false
					);
					wp_nav_menu( $args );
				?>
			</nav>

			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/my-coffee.png" alt="Rest"></h1>

			<p><?php the_field('rua', $contato); ?> – <?php the_field('cidade', $contato); ?></p>
			<p class="telefone"><?php the_field('telefone', $contato); ?></p>
		</header>