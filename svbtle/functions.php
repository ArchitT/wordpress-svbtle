<?php

remove_action ('wp_head', 'wp_generator');

function main_css()  
{
	wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), '20120417', 'all' );

	wp_enqueue_style( 'style' );
}

add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup() {
	global $wp_version;
	if (version_compare($wp_version, '3.4' , '>=')){ 
		add_theme_support( 'custom-header', array(
			// Header image default
			'default-image'			=> get_template_directory_uri() . '/images/icons/bolt_large.png',
			'header-text'			=> false,
			'default-text-color'		=> '000',
			'width'				=> '100',
			'flex-width'                    => true,
			'height'			=> '100',
			'flex-height'                   => true,
			'random-default'		=> true,
			'wp-head-callback'		=> 'theme_header_style',
			'admin-head-callback'		=> 'theme_admin_header_style',
			'admin-preview-callback'	=> 'theme_admin_header_image'
		) );
	} else {
		add_theme_support( 'custom-header', array( 'random-default' => true ) );
		//WP Custom Header - random roation by default
		define( 'HEADER_TEXTCOLOR', '' );
		define( 'HEADER_IMAGE', '%s/images/icons/bolt_large.png' );
		define( 'HEADER_IMAGE_HEIGHT', '100' );
		define( 'HEADER_IMAGE_WIDTH', '100' );
		define('NO_HEADER_TEXT', true );
		add_custom_image_header( 'theme_header_style', 'theme_admin_header_style', 'theme_admin_header_image' );
	}
	register_default_headers( array(
		'atom' => array(
			'url' => '%s/images/icons/atom_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/atom.png',
			'description' => 'atom'
		),
		'bear' => array(
			'url' => '%s/images/icons/bear_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/bear.png',
			'description' => 'bear'
		),
		'beer' => array(
			'url' => '%s/images/icons/beer_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/beer.png',
			'description' => 'beer'
		),
		'bolt' => array(
			'url' => '%s/images/icons/bolt_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/bolt.png',
			'description' => 'bolt'
		),
		'bullhorn' => array(
			'url' => '%s/images/icons/bullhorn_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/bullhorn.png',
			'description' => 'bullhorn'
		),
		'business_man' => array(
			'url' => '%s/images/icons/business_man_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/business_man.png',
			'description' => 'business_man'
		),
		'cassette' => array(
			'url' => '%s/images/icons/cassette_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/cassette.png',
			'description' => 'cassette'
		),
		'cell_phone' => array(
			'url' => '%s/images/icons/cell_phone_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/cell_phone.png',
			'description' => 'cell_phone'
		),
		'chain_link' => array(
			'url' => '%s/images/icons/chain_link_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/chain_link.png',
			'description' => 'chain_link'
		),
		'coffee' => array(
			'url' => '%s/images/icons/coffee_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/coffee.png',
			'description' => 'coffee'
		),
		'cog_head' => array(
			'url' => '%s/images/icons/cog_head_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/cog_head.png',
			'description' => 'cog_head'
		),
		'crab' => array(
			'url' => '%s/images/icons/crab_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/crab.png',
			'description' => 'crab'
		),
		'day_night' => array(
			'url' => '%s/images/icons/day_night_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/day_night.png',
			'description' => 'day_night'
		),
		'disapprove' => array(
			'url' => '%s/images/icons/disapprove_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/disapprove.png',
			'description' => 'disapprove'
		),
		'dog' => array(
			'url' => '%s/images/icons/dog_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/dog.png',
			'description' => 'dog'
		),
		'eye' => array(
			'url' => '%s/images/icons/eye_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/eye.png',
			'description' => 'eye'
		),
		'film' => array(
			'url' => '%s/images/icons/film_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/film.png',
			'description' => 'film'
		),
		'flask' => array(
			'url' => '%s/images/icons/flask_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/flask.png',
			'description' => 'flask'
		),
		'ghost' => array(
			'url' => '%s/images/icons/ghost_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/ghost.png',
			'description' => 'ghost'
		),
		'glasses' => array(
			'url' => '%s/images/icons/glasses_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/glasses.png',
			'description' => 'glasses'
		),
		'glider' => array(
			'url' => '%s/images/icons/glider_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/glider.png',
			'description' => 'glider'
		),
		'hand' => array(
			'url' => '%s/images/icons/hand_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/hand.png',
			'description' => 'hand'
		),
		'hat' => array(
			'url' => '%s/images/icons/hat_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/hat.png',
			'description' => 'hat'
		),
		'heart' => array(
			'url' => '%s/images/icons/heart_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/heart.png',
			'description' => 'heart'
		),
		'infection' => array(
			'url' => '%s/images/icons/infection_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/infection.png',
			'description' => 'infection'
		),
		'infinity' => array(
			'url' => '%s/images/icons/infinity_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/infinity.png',
			'description' => 'infinity'
		),
		'iphone' => array(
			'url' => '%s/images/icons/iphone_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/iphone.png',
			'description' => 'iphone'
		),
		'lemon' => array(
			'url' => '%s/images/icons/lemon_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/lemon.png',
			'description' => 'lemon'
		),
		'like' => array(
			'url' => '%s/images/icons/like_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/like.png',
			'description' => 'like'
		),
		'lotus' => array(
			'url' => '%s/images/icons/lotus_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/lotus.png',
			'description' => 'lotus'
		),
		'man_stairs' => array(
			'url' => '%s/images/icons/man_stairs_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/man_stairs.png',
			'description' => 'man_stairs'
		),
		'mine_cross' => array(
			'url' => '%s/images/icons/mine_cross_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/mine_cross.png',
			'description' => 'mine_cross'
		),
		'motorcycle' => array(
			'url' => '%s/images/icons/motorcycle_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/motorcycle.png',
			'description' => 'motorcycle'
		),
		'mustache' => array(
			'url' => '%s/images/icons/mustache_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/mustache.png',
			'description' => 'mustache'
		),
		'no_smoking' => array(
			'url' => '%s/images/icons/no_smoking_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/no_smoking.png',
			'description' => 'no_smoking'
		),
		'pan_ui' => array(
			'url' => '%s/images/icons/pan_ui_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/pan_ui.png',
			'description' => 'pan_ui'
		),
		'quotes' => array(
			'url' => '%s/images/icons/quotes_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/quotes.png',
			'description' => 'quotes'
		),
		'radio' => array(
			'url' => '%s/images/icons/radio_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/radio.png',
			'description' => 'radio'
		),
		'rain' => array(
			'url' => '%s/images/icons/rain_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/rain.png',
			'description' => 'rain'
		),
		'robot_square' => array(
			'url' => '%s/images/icons/robot_square_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/robot_square.png',
			'description' => 'robot_square'
		),
		'scenic_viewpoint' => array(
			'url' => '%s/images/icons/scenic_viewpoint_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/scenic_viewpoint.png',
			'description' => 'scenic_viewpoint'
		),
		'soccer_shoe' => array(
			'url' => '%s/images/icons/soccer_shoe_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/soccer_shoe.png',
			'description' => 'soccer_shoe'
		),
		'star' => array(
			'url' => '%s/images/icons/star_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/star.png',
			'description' => 'star'
		),
		'stress' => array(
			'url' => '%s/images/icons/stress_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/stress.png',
			'description' => 'stress'
		),
		'sunrise' => array(
			'url' => '%s/images/icons/sunrise_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/sunrise.png',
			'description' => 'sunrise'
		),
		'wrench' => array(
			'url' => '%s/images/icons/wrench_large.png',
			'thumbnail_url' => '%s/images/icons/thumbs/wrench.png',
			'description' => 'wrench'
		)
	) );
}

function theme_header_style() {
    ?><style type="text/css">
        figure#user_logo div.logo, article a.kudos.completed div.circle div.filled, figure#cover_logo{background-image: url(<?php header_image(); ?>);}
    </style><?php
}
function theme_admin_header_style() {
    ?><style type="text/css">
        figure#user_logo div.logo, article a.kudos.completed div.circle div.filled, figure#cover_logo{background-image: url(<?php header_image(); ?>);}
    </style><?php
}
function theme_admin_header_image() {
   	?><div style="display:inline-block;height:50px;background-color:#000;"><img src=<?php header_image(); ?> height="50px"></div>
    <?php
}

function print_post_title() {
	global $post;
	$thePostID = $post->ID;
	$post_id = get_post($thePostID);
	$title = $post_id->post_title;
	$perm = get_permalink($post_id);
	$post_keys = array(); 
	$post_val = array();
	$post_keys = get_post_custom_keys($thePostID);

	if (!empty($post_keys)) {
		foreach ($post_keys as $pkey) {
			if ($pkey=='wp_svbtle_external_url') {
				$post_val = get_post_custom_values($pkey);
			}
		}
		if (empty($post_val)) {
			$link = $perm;
			$class = "class=no-link";
		} else {
			$link = $post_val[0];
			$class = "";
			$anchor = "<span class=anchor><a href='$perm'>&#9875;</a></span>";
		}
	} else {
		$link = $perm;
		$class = "class=no-link";
	}
	echo '<a href="'.$link.'" '.$class.'>'.$title.'</a>'.$anchor;
}

/*function widgets_init() {
	register_sidebar(array(
		'name' => __( 'Sidebar', 's' ),
		'id' => 'sidebar',
		'before_widget' => '<li>',
		'after_widget' => '</li>',
		'before_title' => '',
		'after_title' => '',
	));
}
add_action( 'init', 'widgets_init' );*/

function content_nav( $nav_id ) {
	global $wp_query;
		if ( $wp_query->max_num_pages > 1 ) : ?>
	<nav class="pagination">
		<span class="prev"><?php previous_posts_link( '←   Newer' ); ?></span>
		<span class="next"><?php next_posts_link( __( 'Continue   →') ); ?></span>
  </nav>
		<?php endif;
}

function single_content_nav( $nav_id ) {
	?>
	<a href="<?php echo home_url(); ?>" class="back_to_blog">←&nbsp;&nbsp;&nbsp;Back to blog</a>
	<?php 
}

function register_custom_menu() {
	register_nav_menu('custom_menu', __('Svbtle Menu'));
}
add_action('init', 'register_custom_menu');

require_once ( get_stylesheet_directory() . '/theme-options.php' );


add_action('init', 'load_theme_scripts');
function load_theme_scripts() {
	if ( is_admin() ) {
	    wp_enqueue_style( 'farbtastic' );
	    wp_enqueue_script( 'farbtastic' );
	}
}

date_default_timezone_set(get_option('timezone_string'));

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 520, 180, true ); // Normal page thumbnails
add_image_size( 'single-post-thumbnail', 520, 180 );

function svbtle_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
         <?php echo get_avatar( $comment->comment_author_email, 48 ); ?>

         <?php printf(__('<cite class="fn">%s</cite> <span class="says">:</span>'), get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <?php comment_text() ?>
      
      <div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

      <div class="reply">
         <?php 	//Removed threaded comments reply link until css is cleaned up
         		//comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
<?php
}
?>