<?php get_header(); ?>






<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="page-module">
		<img src="" alt="Billede omkring event">
		<div class="page-content">
			<h1><?php the_title(); ?></h1>
			<small><?php the_time( get_option( 'date_format' ) ); ?></small>
			<?php the_content(); ?>
		</div>
	</section>
<?php endwhile; else : ?>
	<p><?php _e('Der er sket en fejl...') ?></p>
<?php endif; ?>






<?php get_footer(); ?>
