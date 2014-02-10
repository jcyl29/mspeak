<?php
/*
Template Name: aboutus
*/
get_header(); ?>
<body>
<div id="center"> 
  <div id="elements"> 
    <div id="email"><a href="mailto:info@ovson.com"><img src="http://ovson.com/images/email.gif" border="0"/></a></div>
    <div id="header">
    	<a href="http://ovson.com/"><img src="http://ovson.com/images/email.gif" width="150" height="150" border="0" /></a> 
    	<div id="tagline"><?php bloginfo('description'); ?></div>
    </div>
    
    <div id="navigation">
      <div class="suckertreemenu">
        <ul id="treemenu1">
          <li ><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/training">training</a> 
            <ul>
              <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/training/training-series">By Series</a></li>
            </ul>
          </li>
          <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/facilitation">facilitation</a></li>
          <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/coaching">coaching</a></li>
          <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/speaking">speaking</a></li>
          <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/sigmunds-blog">sigmund's blog</a></li>
          <li class="current"><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/about-us">about us</a> 
            <ul>
              <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/about-us/clients">Client List</a></li>
              <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/about-us/testimonials">Testimonials</a></li>
              <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/about-us/press">Press Kit</a></li>
              <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/about-us/avkit">A/V Kit</a></li>
            </ul>
          </li>
          <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/downloads">downloads</a></li>
          <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/contact">contact us</a></li>
        </ul>
      </div>
    </div>
    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
		<script type="text/javascript">
        _uacct = "UA-4210135-1";
        urchinTracker();
        </script>

		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
           <?php the_content(); //copy div id=navigation up to closing div just before <br clear all> tag ?>
		<?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>      
    
    <br clear="all" />
    <?php get_footer(); ?>
</div>

</body>
</html>
