<?php
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
	'name'          => 'Default Sidebar',
	'description'   => 'For the Blog, and all other pages excluding the home page' ));
	register_sidebar(array(
	'name'          => 'Boot Camp Sidebar',
	'description'   => 'Create a new text widget, do not include a title, and paste html in the widget.  See sidebar-custom.php',
	'before_widget' => ' ',
	'after_widget'  => ' ',
	'before_title'  => ' ',
	'after_title'   => ' ' ));
}
	
function is_type_page() { // Check if the current post is a page, from: http://wordpress.org/support/topic/176278
	global $post;

	if ($post->post_type == 'page') {
		return true;
	} else {
		return false;
	}
}
?>