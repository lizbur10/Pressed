	<?php get_header(); ?>
		<section>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/mandarin_oranges.jpg" />
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<section>
					<a href=" <?php the_permalink(); ?>"><h1><?php the_title_attribute(); ?></h1></a>
					<?php the_content(); ?>
				</section>
			<?php endwhile; else :?>
				<p><?php _e('Sorry, no content'); ?></p>
			<?php endif; ?>
			<p class="disclaimer">*may be an overstatement</p>
		</section>
		<?php get_footer(); ?>
