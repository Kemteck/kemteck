<?php get_header(); ?>
<?php wp_link_pages(); ?>

<div class="archive-left">
<ul>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
	</li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
	<?php the_excerpt(); ?>	</li>
<?php endwhile; endif;?>	
</ul>	
</div>

<div class="archive">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
<?php the_title(); the_content(); endwhile;
else: echo '<p>Sorry, no posts matched your criteria.</p>';endif; ?>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</div>

<?php get_footer();?> 