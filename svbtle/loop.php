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
			<?php 
			if ( has_post_thumbnail()) {
				echo '<a href="' . get_permalink($post->ID) . '" >';
				the_post_thumbnail('index_thumb');
			  echo '</a>'; 
			}  else {
				the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); 
			} ?>
			<?php $kudos = get_post_meta($post->ID, '_wp-svbtle-kudos', true); 
						if ($kudos > "") { $kudos = $kudos; } else { $kudos = "0"; } ?>
			<figure class="kudo">	
				<a class="kudos kudoable animate" id="<?php the_ID(); ?>">
					<div class="circle"><div class="filled">&nbsp;</div></div>
					<p class="count"><?php echo $kudos; ?> <span class="identifier">Kudos</p>
				</a>
				<div class="pbar"><div class="progress">&nbsp;</div></div>
			</figure>
			<h1><?php //echo get_the_category_list(', '); ?></h1>
		</article>
<?php endwhile; ?>
<footer id="paginate">
	<?php content_nav( 'nav-below' ); ?>
</footer>
</section>