<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="container contato">
	<h2 class="subtitulo"><?php the_field('title-page'); ?></h2>
	
	<div class="grid-16">
		<a href="<?php the_field('url-map'); ?>" target="_blank"><img src="<?php the_field('img-map'); ?>" alt="<?php the_field('alt-map'); ?>"></a>
		</div>

		<div class="grid-1-3 contato-item">
			<h2>Dados</h2>
			<p>21 2422-9999</p>
			<p>contato@rest.com</p>
			<?php 
				$redes = get_field('redes-sociais');
				if (isset($redes) ) { foreach ( $redes as $item ) {
			?>
				<p><a href="<?php echo $item['url-rede-social']; ?>"><?php echo $item['nome-rede-social']; ?></a></p>
			<?php } } ?>
			
		</div>
		<div class="grid-1-3 contato-item">
			<h2>Horários</h2>
			<p>Segunda à Sexta: 10 às 23</p>
			<p>Sábado: 14 às 23</p>
			<p>Domingo: 14 às 22</p>
		</div>
		<div class="grid-1-3 contato-item">
			<h2>Endereço</h2>
			<p>Rua Marechal, 29</p>
			<p>Copacabana - Rio de Janeiro</p>
			<p>Brasil - Terra - Via Láctea</p>
		</div>
	</section>

<?php endwhile; else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>