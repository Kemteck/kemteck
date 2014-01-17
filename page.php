<?php get_header(); ?>

<div class="column twelve">
<?php wp_link_pages(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
<div class="column ten center"> 
	<h1 class="title"><?php the_title(); ?></h1>
</div>
<div class="column ten center content">
	<?php the_content(); ?>
</div>
<?php endwhile;
else: echo '<p>Sorry, no posts matched your criteria.</p>';endif; ?>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</div>

<?php get_footer();?> 
