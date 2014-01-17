<?php get_header(); ?>

<div class="column twelve">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
<div class="column ten center"> 
	<h1 class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
</div>
<div class="column ten center content">
	<?php if ( has_post_thumbnail() ) && !(is_post_type('project')) {the_post_thumbnail();} ?>
	<?php the_content(); ?>
</div>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;  ?>

<div class="sidebar">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</div>

<?php get_footer(); ?>