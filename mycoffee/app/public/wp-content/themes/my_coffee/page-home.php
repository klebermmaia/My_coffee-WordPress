<?php
// Template Name: Nosso menu
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="container">
		<h2 class="subtitulo"><?php the_field('title-page') ?></h2>

		<div class="item-menu grid-8">
			<h2><?php the_field('titulo-menu-left') ?></h2>
			<ul>
				<?php
					$menu = get_field('menu-left');
					if ( isset($menu) ) { foreach ( $menu as $item ) {
				?>
					<li>
						<span><sup>R$</sup><?php echo $item['preco'] ?></span>
						<div>
							<h3><?php echo $item['nome'] ?></h3>
							<p><?php echo $item['descricao'] ?></p>
						</div>
					</li>
				<?php } } ?>
			</ul>
		</div>

		<div class="item-menu grid-8">
		<h2><?php the_field('titulo-menu-right') ?></h2>
			<ul>
				<?php
					$menu = get_field('menu-right');
					if ( $menu ) { foreach ( $menu as $item ) {
				?>
					<li>
						<span><sup>R$</sup><?php echo $item['preco'] ?></span>
						<div>
							<h3><?php echo $item['nome'] ?></h3>
							<p><?php echo $item['descricao'] ?></p>
						</div>
					</li>
				<?php } } ?>
			</ul>
		</div>

	</section>
<?php endwhile; else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>