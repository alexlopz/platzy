<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('description'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_url)?>">

</head>
<body>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<h3><?php bloginfo('description'); ?></h3>
	</header>
	<section>
		<?php rewind_posts(); ?>
		<?php query_posts('order=Asc&cat=2') ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<header>
					<h3><?php the_title(); ?></h3>
					<strog><?php the_author(); ?></strong> -
					<small><?php the_date(); ?></small>	
				</header>
				<?php the_category(); ?>
				<?php the_excerpt(); ?>
				
				
			</article>

		<?php endwhile; ?>
		<?php else: ?>
			<h3>No hay mas entradas!</h3>
		<?php endif; ?> 
		

		

	</section>



</body>
</html>
