<!DOCTYPE html>
<html>
<head>
  <title> <?php bloginfo('name'); ?><?php wp_title('|',true); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5, minimum-scale=0.5">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>"/>
	<style type="text/css">.tk-freight-sans-pro{font-family:"freight-sans-pro",sans-serif;}.tk-proxima-nova{font-family:"proxima-nova",sans-serif;}.tk-ff-meta-web-pro{font-family:"ff-meta-web-pro",sans-serif;}</style>
  <link href="<?php bloginfo('rss2_url'); ?>" rel="alternate" title="<?php _e('RSS'); ?>" type="application/rss+xml" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.png" />
  <?php add_action( 'wp_enqueue_scripts', 'main_css' );  ?>
  <?php  if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    wp_head();
 
    //wp_get_archives('type=monthly&format=link'); ?>
  <?php comments_popup_script(); ?>
	<?php $options = get_option ( 'svbtle_options' ); ?>
  <?php echo $options['google_analytics'];?>

<style type="text/css">
	a:hover,h2 a:hover,a.back_to_blog,span.next a,span.prev a,header h2,article blockquote { border-color: <?php echo $options['color']; ?>; color: <?php echo $options['color']; ?>;}
	a.back_to_blog:hover,span.next a:hover,span.prev a:hover,section#cover, figure#user_logo div.logo { background-color: <?php echo $options['color']; ?>;}
	::-moz-selection,::selection { background-color: <?php echo $options['color']; ?>}
	div.pullback a {color: <?php echo $options['color']; ?>; border-color: <?php echo $options['color']; ?>;}
	figure#user_logo div.pulse { border-color: <?php echo $options['color']; ?>;}
</style>
</head>
<body>

<?php if ( $options['cover'] ) { ?>
<section id="cover" class="fixed">
  <figure id="cover_logo">
    <div class="logo">&nbsp;</div>
  </figure>
  <h1 id="cover_user"><a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
</section>
<?php } ?>

<section id="sidebar" class="fixed">
  <figure id="user_logo">
    <a href="<?php echo site_url(); ?>">
			<?php if ( $options['pulse'] ) { ?><div class="pulse animate">&nbsp;</div><?php } ?>
      <div class="logo">&nbsp;</div>
    </a>
  </figure>

  <div class="user_meta">
    <h1 id="user"><a href="<?php echo site_url(); ?>" class=""><?php bloginfo( 'name' ); ?></a></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
		<?php get_sidebar(); ?>
  </div>
  <a href="http://svbtle.com" class="network_link">
    Original design by <span>Svbtle</span>.
  </a>
</section>
