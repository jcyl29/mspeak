<?php 
/*
Template Name: Generic 2 column page
*/

//To bypass the wordpress autoformatting, I have used a MySQL query to fetch the content of the post instead of calling the_content() function
//This template uses the original the_content function
get_header(); ?>
	<div id="two_col_top"></div>
    <div id="two_col_wrapper" >
        <div id="two_col_content" >
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <?php the_title('<h1>', '</h1>'); ?>
            <?php the_content();?>
        <?php endwhile; ?>
        <?php else : ?>
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
