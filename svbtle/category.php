<?php get_header(); ?>
<section id="river">
	<header id="begin">
		<time id="top_time"><?php echo date(get_option('date_format')); ?></time>
	</header>
<?php $options = get_option ( 'svbtle_options' ); ?>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
<?php } ?>

	<article id="archive">
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2>&#8216;<?php single_cat_title(); ?>&#8217; archive</h2>
      <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
      <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2>Archive for <?php the_time('F jS, Y'); ?>:</h2>
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2>Archive for <?php the_time('F, Y'); ?>:</h2>
      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2>Archive for <?php the_time('Y'); ?>:</h2>
      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2>Author Archive</h2>
      <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2>Blog Archives</h2>
    <?php } ?>
    </article>

<?php while ( have_posts() ) : the_post() ?>
		<article id="<?php the_ID(); ?>" class="post">
			<h2>
				<?php print_post_title() ?>
			</h2>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'theme' )  ); ?>
			
			<h1><?php //echo get_the_category_list(', '); ?></h1>
		</article>
<?php endwhile; ?>
	<nav class="pagination">
		<?php content_nav( 'nav-below' ); ?>
	</nav>
</section>
<?php get_footer(); ?>