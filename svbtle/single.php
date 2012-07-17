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
			<?php 
				/*if ( has_post_thumbnail()) {
					the_post_thumbnail('single-post-thumbnail');
				} */
			?>
			<h2>
				<?php print_post_title() ?>
			</h2>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'theme' )  ); ?>
			<?php $kudos = get_post_meta($post->ID, '_wp-svbtle-kudos', true); 
						if ($kudos > "") { $kudos = $kudos; } else { $kudos = "0"; } ?>

			<aside class="kudo kudoable" id="<?php the_ID(); ?>">
				<a href="?" class="kudobject">
					<div class="opening clearfix">
						<span class="circle">&nbsp;</span>
					</div>
				</a>

				<a href="?" class="counter">
					<span class="num"><?php echo $kudos; ?></span>
					<span class="txt">Kudos</span>
				</a>
			</aside>
			<h2><?php //echo get_the_category_list(', '); ?></h2>
			<h2><?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></h2>
			<div class="comments-template">
				<?php comments_template(); ?>
       </div>
		</article>
<?php endwhile; ?>
	<nav class="pagination">
		<?php single_content_nav( 'nav-below' ); ?>
	</nav>
</section>
<?php get_footer(); ?>