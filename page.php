<?php the_post(); ?>
<?php get_header(); ?>

<article <?php post_class(); ?>>
	<div class="modifyme singlepage">
		<?php echo '<h2><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>'; ?>
		<hr class="before_content" />
		<?php the_content(); ?>
	</div>
</article>

<?php get_sidebar(); ?>
<?php get_footer();