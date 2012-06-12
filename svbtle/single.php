<?php get_header(); ?>
<section id="posts">
	<header>
		<h3 class="date">POSTED <?php the_time('F d, Y'); ?></h3>
	</header>
<?php $options = get_option ( 'svbtle_options' ); ?>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
<?php } ?>
<?php while ( have_posts() ) : the_post() ?>
		<article id="<?php the_ID(); ?>">
			<?php 
				if ( has_post_thumbnail()) {
					the_post_thumbnail('single-post-thumbnail');
				} 
			?>
			<h2>
				<?php print_post_title() ?>
			</h2>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
			<?php $kudos = get_post_meta($post->ID, '_wp-svbtle-kudos', true); 
						if ($kudos > "") { $kudos = $kudos; } else { $kudos = "0"; } ?>
			<figure class="kudo">	
				<a class="kudos kudoable animate" id="<?php the_ID(); ?>">
					<div class="circle"><div class="filled">&nbsp;</div></div>
					<p class="count"><?php echo $kudos; ?> <span class="identifier">Kudos</p>
				</a>
				<div class="pbar"><div class="progress">&nbsp;</div></div>
			</figure>
			<h2><?php //echo get_the_category_list(', '); ?></h2>
			<h2><?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></h2>
			<div class="comments-template">
                <?php comments_template(); ?>
            </div>
		</article>
<?php endwhile; ?>
<footer id="paginate">
	<?php single_content_nav( 'nav-below' ); ?>
</footer>
</section>
<?php get_footer(); ?>