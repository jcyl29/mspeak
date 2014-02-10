<?php
/*
Template Name: page
*/
get_header(); ?>
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        	<?php echo $wpdb->get_var("SELECT post_content FROM $wpdb->posts WHERE ID = $id"); //use this line to bypass WP preformatting?>
		<?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>      
    
    <br clear="all" />
    <?php get_footer(); ?>
