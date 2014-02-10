<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
    
<h2><?php _e('Calendar'); ?></h2>
	<?php get_calendar(); ?>
	<?php wp_list_pages('depth=2&title_li=<h2>Pages</h2>'); ?>
<h2><?php _e('Categories'); ?></h2>
			<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
<h2><?php _e('Archives'); ?></h2>

        <?php wp_get_archives('type=monthly'); ?>

   <?php get_links_list(); ?>
   
<?php endif; ?>   