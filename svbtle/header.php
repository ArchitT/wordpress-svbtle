<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> <?php bloginfo('name'); ?><?php wp_title('|',true); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5, minimum-scale=0.5">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>"/>
	<link href="<?php bloginfo('rss2_url'); ?>" rel="alternate" title="<?php _e('RSS'); ?>" type="application/rss+xml" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.png" />
  <?php add_action( 'wp_enqueue_scripts', 'main_css' );  ?>
  <?php if ( is_singular() && get_option( 'thread_comments' ) )
					wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
  <?php comments_popup_script(); ?>
	<?php $options = get_option ( 'svbtle_options' ); ?>
  <?php echo $options['google_analytics'];?>

	<style>
		blockquote {border-color: <?php echo $options['color']; ?>;}
		aside#logo,aside#logo div a,ul#user_meta a:hover span.link_logo_inside,ul#user_meta a:hover span.link_logo,aside.kudo.complete span.circle {background-color: <?php echo $options['color']; ?>;}
		section.preview header#begin h2,ul#user_meta a:hover,nav.pagination span.next a,nav.pagination span.prev a {color: <?php echo $options['color']; ?>;}
		ul#user_meta a:hover,nav.pagination span.next a,nav.pagination span.prev a {border-color: <?php echo $options['color']; ?>;}
		::-moz-selection { background: <?php echo $options['color']; ?>; color: #fff; text-shadow: none;}
		::selection { background: <?php echo $options['color']; ?>; color: #fff; text-shadow: none;}
	</style>
</head>
<body>

<header id="sidebar">
	<aside id="logo" class="clearfix">
		<div class="clearfix">
			<a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a>
		</div>
	</aside>
	<ul id="user_meta">
		<li class="blog_name">
			<h1 id="blog_name">
				<a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a>
			</h1>
		</li>
		<li class="tagline">
			<h2 id="tagline">
				<?php bloginfo( 'description' ); ?>
			</h2>
		</li>
		
		<?php get_sidebar(); ?>
	
	</ul>
	<?php /*<aside id="svbtle_linkback">
		<a href="http://svbtle.com">
			<span class="logo_square"><span class="logo_circle">&nbsp;</span></span>&nbsp;<span class="svbtle">Svbtle</span>
		</a>
	</aside> */ ?>
</header>
