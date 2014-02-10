<?php 
/*
Template Name: Single Column Template
*/

//To bypass the wordpress autoformatting, I have used a MySQL query to fetch the content of the post instead of calling the_content() function
//This template uses the original the_content function
get_header(); ?>
   	<div class="section_top"></div>
	    <div id="section_content">
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            	<?php the_title('<h1>', '</h1>'); ?>
               <?php the_content(); //copy div id=navigation up to closing div just before <br clear all> tag ?>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>      
	    </div>
    <div class="section_bottom"></div>
<?php get_footer(); ?>
