<?php 
/*
Template Name: homepage_new
*/

//To bypass the wordpress autoformatting, I have used a MySQL query to fetch the content of the post instead of calling the_content() function
//This template uses the original the_content function
get_header(); ?>
<script type='text/javascript' src='http://www.h324.com/wp-content/themes/mspeak_theme/js/jquery.cross-slide.js?ver=2.7.1'></script>
<script type='text/javascript'>
	$(document).ready(function() {
		$('#client_slideshow').attr("title","Click to see all testmonials")
			.crossSlide(
				{sleep: 4, fade: 1.5},
				[{src: 'http://www.h324.com/wp-content/themes/mspeak_theme/images/clientshow/1.gif'},{src: 'http://www.h324.com/wp-content/themes/mspeak_theme/images/clientshow/2.gif'},{src: 'http://www.h324.com/wp-content/themes/mspeak_theme/images/clientshow/4.gif'},{src: 'http://www.h324.com/wp-content/themes/mspeak_theme/images/clientshow/5.gif'}])
			.css("cursor","pointer")
			.bind('click',function() {window.location="http://www.h324.com/client-results/";});
	});
</script>

			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
               		<?php the_content(); //copy div id=navigation up to closing div just before <br clear all> tag ?>
            	<?php endwhile; ?>
            	<?php else : ?>
            <?php endif; ?>      
    <br clear="all" />
            
<?php get_footer(); ?>
