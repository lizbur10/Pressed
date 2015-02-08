<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo ('name'); ?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
</head>
	<body>
		<header>
			<h1><?php bloginfo('name'); ?>*</h1>
			<nav>
				<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul>
			</nav>
		</header>
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
		<footer>
			<h1>Contact Us</h1>
			<p>Pressed and Squeezed</p>
			<p>2525 Orange Way, Orchard, CA 91104</p>
			<p>Phone: (800) 424-3232</p>
		</footer>
	</body>
</html>