<?php
// Template Name: Sobre
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="container sobre">
		<h2 class="subtitulo"><?php the_field('title-page'); ?></h2>

		<div class="grid-8">
			<img src="<?php the_field('img-fachada') ?>" alt="Fachada do Rest">
		</div>

		<div class="grid-8">
			<h2>História</h2>
			<?php 
				$historia = get_field('historia');
				if ( isset($historia ) ) { foreach ( $historia as $paragrafo ){
			?>
				<p><?php echo $paragrafo['paragrafo']; ?></p>
			<?php } } ?>

			<h2>Visão</h2>
			<?php 
				$visao = get_field('visao');
				if ( isset($visao ) ) { foreach ( $visao as $paragrafo ){
			?>
				<p><?php echo $paragrafo['paragrafo']; ?></p>
			<?php } } ?>

			<h2>Valores</h2>
			<?php 
				$valores = get_field('valores');
				if ( isset($valores ) ) { foreach ( $valores as $paragrafo ){
			?>
				<p><?php echo $paragrafo['paragrafo']; ?></p>
			<?php } } ?>
		</div>
	</section>

<?php endwhile; else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
		
<?php get_footer(); ?>