<?php get_header(); ?>
<section id="posts">
	<header>
		<h3 class="date"><?php echo date(get_option('date_format')); ?></h3>
	</header>
<?php $options = get_option ( 'svbtle_options' ); ?>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
<?php } ?>
<?php while ( have_posts() ) : the_post() ?>
		<article id="<?php the_ID(); ?>">
			<h2>
				<a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
				<?php if ( $options['anchor'] ) { ?><span class="anchor"><a href="<?php echo home_url('/'); ?>?p=<?php the_ID(); ?>">&#9875;</a></span><?php } ?>
			</h2>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
			
			<h1><?php //echo get_the_category_list(', '); ?></h1>
		</article>
<?php endwhile; ?>
<footer id="paginate">
	<?php single_content_nav( 'nav-below' ); ?>
</footer>
</section>
<?php get_footer(); ?>