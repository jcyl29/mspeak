<?php get_header(); ?>
	<div id="two_col_top"></div>
    <div id="two_col_wrapper" >
        <div id="two_col_content" >
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
  <p style="font-style:italic"> by <?php the_author(); ?></p>
                <p class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
               
                <div class="entry">
                    <?php the_content("Continue reading " . the_title('', '', false)); ?>
                    <p class="postmetadata">
                    <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ' &#187; '); ?>
                    </p>
                </div>
                <div class="comments-template">
                    <?php comments_template(); ?>
                </div>
            </div>
		<?php endwhile; ?>
            <div class="navigation">
                <?php posts_nav_link(' &#171; &#187; ' , 'Previous page', 'next page' ); ?>
            </div>
        <?php else : ?>
            <div id="post-<?php the_ID(); ?>" class="post">
                <p>Sorry, but you are looking for something that isn't here.  Try the search bar on the bottom.</p>
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