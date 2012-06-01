			<ol class="commentlist">
<?php wp_list_comments('type=comment&callback=svbtle_comment'); ?></ol>

<?php 

$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );

$svbtle_comment_fields = array(
'author' => 
	'<li class="text_field labeled ' . ( $req ? 'required' : '' ) .'">
	<input class="pane_input" id="author" name="author" type="text" placeholder="Author"
	value="' . esc_attr( $commenter['comment_author'] ) . '" size="auto"' . $aria_req . ' />
	<div class="insertion_point">&nbsp;</div></li>',
'email' =>
	'<li class="text_field labeled ' . ( $req ? 'required' : '' ) .'">
	<input class="pane_input" id="email" name="email" type="text" placeholder="Email"
	value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="auto"' . $aria_req . ' />
	<div class="insertion_point">&nbsp;</div></li>'

);

$svbtle_comments_args = array(
'fields' => 
	apply_filters( 'comment_form_default_fields', $svbtle_comment_fields ),
'title_reply' => 
	'Leave a Comment',
'comment_notes_before' => 
	'<p class="comment-notes">' . __( 'Your email address will not be published.' ) . ( $req ? __( ' Required fields are marked in red.' ) : '' ) . '</p>',
'comment_field' => 
	'<li class="text_field labeled area">
	<textarea class="pane_input" cols="auto" id="comment" name="comment" placeholder="What would you like to say?" 
	style="resize: none; overflow-y: hidden; height: 50px; " ' . $aria_req . ' /></textarea>
	<div class="insertion_point">&nbsp;</div></li>',
'comment_notes_after' => 
	''
);

echo '<ul class="content form comment">';
comment_form($svbtle_comments_args);
echo '</ul>';
?>