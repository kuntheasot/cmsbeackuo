<?php 
get_header();
	if(have_posts()):
		while(have_posts()): the_post(); ?>
		<article class="post">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="post-meta"><?php the_time('F jS, Y'); ?>|<?php the_author(); ?></p>
			<p><?php the_content(); ?></p>
		</article>
		<?php endwhile;
	else:
		echo '<p>No Post found</p>'; 
	endif;
get_footer();
?>

