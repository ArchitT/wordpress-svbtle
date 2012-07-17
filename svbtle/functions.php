<?php

remove_action ('wp_head', 'wp_generator');

function main_css()  
{
	$version = filemtime(realpath(dirname(__FILE__)).'/style.css');
	wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), $version, 'all' );

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
    ?><style type="text/css">aside#logo div a,aside.kudo.complete span.circle {background-image: url(<?php header_image(); ?>);}</style><?php
}
function theme_admin_header_style() {
    ?><style type="text/css">aside#logo div a,aside.kudo.complete span.circle {background-image: url(<?php header_image(); ?>);}</style><?php
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
			if ($pkey=='_wp_svbtle_external_url') {
				$post_val = get_post_custom_values($pkey);
			}
		}
		if (empty($post_val)) {
			$link = $perm;
			$class = "class='no-link title'";
		} else {
			$link = $post_val[0];
			$class = "class='title'";
			$anchor = "<a href='$perm' class='anchor'>
			<img src='".get_template_directory_uri()."/images/anchor_gray.svg' class='scalable'></a>";
		}
	} else {
		$link = $perm;
		$class = "class='no-link title'";
	}
	echo '<a href="'.$link.'" '.$class.'>'.$title.'</a>'.$anchor;
}

function widgets_init() {
	register_sidebar(array(
		'name' => __( 'Sidebar', 's' ),
		'id' => 'sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>',
	));
}
add_action( 'init', 'widgets_init' );

function my_wp_nav_menu_args( $args = '' )
{
	$args['container'] = false;
	$args['menu'] = 'custom_menu';
	$args['menu_id'] = 'hidden';
	$args['link_before'] = '<span class="link_logo"><span class="link_logo_inside">X</span></span>';
	$args['items_wrap'] = '<li class="%2$s">%3$s</li>';
	return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

function content_nav( $nav_id ) {
	global $wp_query;
		if ( $wp_query->max_num_pages > 1 ) : ?>
		<span class="prev"><?php previous_posts_link( '←   Newer' ); ?></span>
		<span class="next"><?php next_posts_link( __( 'Continue   →') ); ?></span>
		<?php endif;
}

function single_content_nav( $nav_id ) {
	?>
		<span class="prev">
			<a href="<?php echo home_url(); ?>" class="back_to_blog">←&nbsp;&nbsp;&nbsp;Back to blog</a>
		</span>
	<?php 
}

function register_custom_menu() {
	register_nav_menu('custom_menu', __('Svbtle Menu'));
}
add_action('init', 'register_custom_menu');

require_once ( get_stylesheet_directory() . '/theme-options.php' );
add_action( 'load-post.php', 'svbtle_post_meta_boxes_setup' );
add_action( 'load-post-new.php', 'svbtle_post_meta_boxes_setup' );

add_action( 'load-post.php', 'svbtle_post_meta_boxes_setup' );
add_action( 'load-post-new.php', 'svbtle_post_meta_boxes_setup' );

function svbtle_post_meta_boxes_setup() {
	add_action( 'add_meta_boxes', 'svbtle_add_post_meta_boxes' );
	add_action( 'save_post', 'svbtle_save_post_class_meta', 10, 2 );
}

function svbtle_add_post_meta_boxes() {
	add_meta_box(
		'svbtle-post-class',
		esc_html__( 'Extra options for Post', 'example' ),
		'_wp_svbtle_external_url_meta_box',
		'post',
		'side',
		'core'
	);
}

function _wp_svbtle_external_url_meta_box( $object, $box ) { ?>
	<?php wp_nonce_field( basename( __FILE__ ), '_wp_svbtle_external_url_nonce' ); ?>
	<p>
		<label for="svbtle-post-class"><?php _e( "Click Through URL on Post Title:", 'example' ); ?></label>
		<br />
		<input class="widefat" type="text" name="svbtle-post-class" id="svbtle-post-class" value="<?php echo esc_attr( get_post_meta( $object->ID, '_wp_svbtle_external_url', true ) ); ?>" size="30" />
	</p>
<?php }

function svbtle_save_post_class_meta( $post_id, $post ) {

	if ( !isset( $_POST['_wp_svbtle_external_url_nonce'] ) || !wp_verify_nonce( $_POST['_wp_svbtle_external_url_nonce'], basename( __FILE__ ) ) )
		return $post_id;

	$post_type = get_post_type_object( $post->post_type );

	if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
		return $post_id;

	$new_meta_value = ( isset( $_POST['svbtle-post-class'] ) ? esc_url_raw( $_POST['svbtle-post-class'] ) : '' );

	$meta_key = '_wp_svbtle_external_url';
	$meta_value = get_post_meta( $post_id, $meta_key, true );

	if ( $new_meta_value && '' == $meta_value )
		add_post_meta( $post_id, $meta_key, $new_meta_value, true );
	elseif ( $new_meta_value && $new_meta_value != $meta_value )
		update_post_meta( $post_id, $meta_key, $new_meta_value );
	elseif ( '' == $new_meta_value && $meta_value )
		delete_post_meta( $post_id, $meta_key, $meta_value );
}

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
add_image_size( 'single-post-thumbnail', 520, 180, true );

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

function send_kudos() {
	global $wpdb;
	$post_id = mysql_real_escape_string($_POST['article']);
	$kudos = get_post_meta( $post_id , '_wp-svbtle-kudos', true );
	$new_kudos = $kudos + 1;
	add_post_meta( $post_id, '_wp-svbtle-kudos', 1, true ) or update_post_meta( $post_id, '_wp-svbtle-kudos', $new_kudos );
	header('HTTP/1.1 200 OK');
}
add_action('wp_ajax_kudos', 'send_kudos');
add_action('wp_ajax_nopriv_kudos', 'send_kudos');

function search_form( $form ) {
    $form = '<li><form role="search" method="get" id="search" action="' . home_url( '/' ) . '" >
    <input type="text" placeholder="search..." value="' . get_search_query() . '" name="s" id="s" />
    </form></li>';
    return $form;
}
add_filter( 'get_search_form', 'search_form' );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
?>