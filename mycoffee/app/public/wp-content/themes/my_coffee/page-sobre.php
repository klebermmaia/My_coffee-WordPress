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
				if(isset($historia)){ foreach($historia as $paragrafo){
			?>
				<p><?php $paragrafo['paragrafo'] ?></p>
			<?php } } ?>
			<p>O incentivo ao avanço tecnológico, assim como a mobilidade dos capitais internacionais auxilia a preparação e a composição dos níveis de motivação departamental.</p>
			<p>Gostaria de enfatizar que o desenvolvimento contínuo de distintas formas de atuação prepara-nos para enfrentar situações atípicas decorrentes do remanejamento dos quadros funcionais.</p>
			<h2>Visão</h2>
			<p>Não obstante, a expansão dos mercados mundiais faz parte de um processo de gerenciamento de alternativas às soluções ortodoxas.</p>
			<h2>Valores</h2>
			<p>O empenho em analisar a consolidação das estruturas apresenta tendências no sentido de aprovar a manutenção dos índices pretendidos.</p>
		</div>
	</section>

<?php endwhile; else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
		
<?php get_footer(); ?>