<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie6styles.css" media="screen" />
    <![endif]-->
    <link rel="Shortcut Icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
    <?php wp_head(); //may not need?>
    <?php if (!is_page()) : //If not the blog page?> 
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_get_archives('type=monthly&format=link'); ?>
        <?php //comments_popup_script(); // off by default ?>
    <?php endif; ?>
<meta name="google-site-verification" content="cyPQhwJcAHS1lpHfOmDnphQZbCZmqemIafXWt10vFr4" />
<meta name="google-site-verification" content="cyPQhwJcAHS1lpHfOmDnphQZbCZmqemIafXWt10vFr4" />
<!--<a href="https://plus.google.com/109707233437297572942" rel="publisher">Google+</a>-->
<meta name="y_key" content="e48fac86365ea523" />
<meta name="msvalidate.01" content="A006AD751FC5E093C8764778424CC9AB" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36972114-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript" >
	$(document).ready(function() {
		// $('#s').example('Type search words, press Enter');
	});
</script>
<input type="checkbox" class="main-nav-check" id="main-nav-check" />
<nav class="main-nav" id="main-nav">
    <a href="<?php echo get_permalink(8); ?>" title="Home"><?php echo get_the_title(8) ?></a>
    <a href="<?php echo get_permalink(7); ?>" title="About H324"><?php echo get_the_title(7) ?></a>
    <a href="<?php echo get_permalink(9); ?>" title="Testimonials"><?php echo get_the_title(9) ?></a>
    <a href="<?php echo get_permalink(152); ?>" title="Blog"><?php echo get_the_title(152) ?></a>
    <a href="<?php echo get_permalink(10); ?>" title="Contact Us"><?php echo get_the_title(10); ?></a>

    <form method="post" action="http://www.aweber.com/scripts/addlead.pl">
        <input type="hidden" name="meta_web_form_id" value="243814305" />
        <input type="hidden" name="meta_split_id" value="" />
        <input type="hidden" name="listname" value="h324" />
        <input type="hidden" name="redirect" value="http://www.aweber.com/thankyou-coi.htm?m=video" id="redirect_dc8f5d86a22c0ab1d2aadf45c83b4ceb" />
        <input type="hidden" name="meta_adtracking" value="H324header" />
        <input type="hidden" name="meta_message" value="1" />
        <input type="hidden" name="meta_required" value="email" />
        <input type="hidden" name="meta_forward_vars" value="" />
        <input type="hidden" name="meta_tooltip" value="" />
        <h2>Get a Free Presentation Tip Every Tuesday!</h2>
        <p>Upgrade Your Skills Weekly</p>
        <input type="text" name="email" size="10" id="awf_field-6768882" placeholder="Enter email" />
        <button type="submit">Sign me up!</button>
        <div style="display: none;"><img src="http://forms.aweber.com/form/displays.htm?id=TCzMHIwszAys" alt="" /></div>
    </form> 

</nav>
<div id="wrapper">
	<div id="header">
        <label for="main-nav-check" class="toggle-menu">☰</label>
        <a href="<?php bloginfo('url');?>"></a>
        <ul id="banner_links">
	        <li><a href="<?php echo get_permalink(8); ?>" title="Home"><?php echo get_the_title(8) ?></a></li>
        	<li><a href="<?php echo get_permalink(7); ?>" title="About H324"><?php echo get_the_title(7) ?></a></li>
            <li><a href="<?php echo get_permalink(9); ?>" title="Testimonials"><?php echo get_the_title(9) ?></a></li>
            <li><a href="<?php echo get_permalink(152); ?>" title="Blog"><?php echo get_the_title(152) ?></a></li>
            <li><a href="<?php echo get_permalink(10); ?>" title="Contact Us"><?php echo get_the_title(10); ?></a></li>
        </ul>       
    	<form method="post" action="http://www.aweber.com/scripts/addlead.pl" id="signup_form">
        	<input type="hidden" name="meta_web_form_id" value="243814305" />
            <input type="hidden" name="meta_split_id" value="" />
            <input type="hidden" name="listname" value="h324" />
            <input type="hidden" name="redirect" value="http://www.aweber.com/thankyou-coi.htm?m=video" id="redirect_dc8f5d86a22c0ab1d2aadf45c83b4ceb" />
            <input type="hidden" name="meta_adtracking" value="H324header" />
            <input type="hidden" name="meta_message" value="1" />
            <input type="hidden" name="meta_required" value="email" />
            <input type="hidden" name="meta_forward_vars" value="" />
            <input type="hidden" name="meta_tooltip" value="" />
        	<h2>Get a Free  Presentation Tip Every Tuesday!</h2>
            <p>Upgrade Your Skills Weekly</p>
<input type="text" name="email" size="22" id="awf_field-6768882" placeholder="Enter your email here" />
          <div style="display: none;"><img src="http://forms.aweber.com/form/displays.htm?id=TCzMHIwszAys" alt="" /></div>
        </form> 
    </div>