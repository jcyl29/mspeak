<?php get_header(); ?>
	<div id="two_col_top"></div>
    <div id="two_col_wrapper" >
        <div id="two_col_content" >
    	<h2>Search results for "<?php echo $_GET['s'];?>"</h2>
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="post" id="post-<?php the_ID(); ?>">
                <p class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
                <div class="entry">
                    <?php the_excerpt(); ?>
                    <p class="postmetadata">
                    <?php if(!is_type_page()) : ?>
						<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ' &#187; '); ?>
                    <?php endif; ?>
                    </p>
                </div>
                <p class="searchURL"><?php the_permalink(); ?></p>
            </div>
            <?php endwhile; ?>
                <div class="navigation">
                    <?php posts_nav_link(' &#171; &#187; ' , 'Previous page', 'next page' ); ?>
                </div>
            <?php else : ?>
            <div id="post-<?php the_ID(); ?>" class="post">
                <p>Sorry, there are not any blog posts with the search term "<?php echo $_GET['s'];?>."</p>
            </div>
	        <?php endif; ?>      
        </div>
        <div id="sb_content_generic">
            <ul>
                <?php get_sidebar(1); ?>
            </ul>
        </div>   
    </div>
    <div id="two_col_bottom"></div>
<?php get_footer(); ?>