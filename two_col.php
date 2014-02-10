<?php 
/*
Template Name: 2 column page for bootcamps
*/

switch (TRUE) {
    case is_page('13'): //boot camp page
        $leftwrapper_top = 'leftwrapper_top_blue';
    	$sidebar_top = 'sidebar_top_blue';
        $sidebar_content = 'sidebar_content_blue';
		$sidebar_bot = 'sidebar_bot_blue';
        break;
    case is_page('15'): //advanced boot camp page
        $leftwrapper_top = 'leftwrapper_top_gold';
    	$sidebar_top = 'sidebar_top_gold';
        $sidebar_content = 'sidebar_content_gold';
		$sidebar_bot = 'sidebar_bot_gold';
        break;
    case is_page('16'): //customized boot camp page
        $leftwrapper_top = 'leftwrapper_top_green';
    	$sidebar_top = 'sidebar_top_green';
        $sidebar_content = 'sidebar_content_green';
		$sidebar_bot = 'sidebar_bot_green';
        break;
    case is_page('1336'): //red
        $leftwrapper_top = 'leftwrapper_top_red';
        $sidebar_top = 'sidebar_top_red';
        $sidebar_content = 'sidebar_content_red';
        $sidebar_bot = 'sidebar_bot_red';
        break;
}
//To bypass the wordpress autoformatting, I have used a MySQL query to fetch the content of the post instead of calling the_content() function
//This template uses the original the_content function
get_header(); ?>
	<div id="leftwrapper">
        <div id="<?php echo $leftwrapper_top;?>">
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            	<?php the_title('<h1>', '</h1>'); ?>
        </div>
        <div id="leftcontent">
               <?php the_content();?>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>      
        </div>   
        <div id="leftwrapper_bot"></div>
	</div>
    <div id="sidebar">
    	<div id="<?php echo $sidebar_top;?>"></div>
        <div id="<?php echo $sidebar_content;?>">
	    	<?php get_sidebar ('custom'); //get content from boot camp sidebar ?>
        </div>
        <div id="<?php echo $sidebar_bot;?>"></div>
    </div>   
    <br clear="all" />
   
<?php get_footer(); ?>
