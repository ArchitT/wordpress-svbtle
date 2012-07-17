<?php get_header(); ?>
<section id="river">
	<header id="begin">
		<time id="top_time"><?php echo date(get_option('date_format')); ?></time>
	</header>
<?php $options = get_option ( 'svbtle_options' ); ?>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
<?php } ?>
<?php while ( have_posts() ) : the_post() ?>
		<article id="<?php the_ID(); ?>" class="post">
			<h2>
				<?php print_post_title() ?>
			</h2>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
			
			<h2><?php //echo get_the_category_list(', '); ?></h2>
		</article>
<?php endwhile; ?>
<nav class="pagination">
	<?php single_content_nav( 'nav-below' ); ?>
</nav>
</section>
<?php get_footer(); ?>