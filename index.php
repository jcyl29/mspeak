<?php get_header(); ?>
	<div id="two_col_top"></div>
    <div id="two_col_wrapper" >
        <div id="two_col_content" >
        <h1>H324 Blog</h1>
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
    	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <p class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></p>
            <p style="font-style:italic">Posted on: <?php the_date(); ?> at <?php the_time(); ?></p>
            <div class="entry">
               	<?php the_content("Continue reading " . the_title('', '', false)); ?>
				<p class="postmetadata">
				<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ' &#187; '); ?>
				</p>
            </div>
        </div>
		<?php endwhile; ?>
            <div class="navigation">
                <?php posts_nav_link(' &#171; &#187; ' , 'Previous page', 'next page' ); ?>
            </div>
        <?php else : ?>
            <div id="post-<?php the_ID(); ?>" class="post">
                <p>Could not find any posts.  Sorry, but you looking for something that isn't here</p>
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
