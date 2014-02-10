    <div id="footer">
	    <form action="<?php bloginfo('home'); ?>/" method="get" id="search_box">
			<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="33" /><br />   
		</form>
        <div class="footer_nav">
       		<strong>Disclaimers</strong><br />
            <ul>
                <li><a href="<?php echo get_permalink(121); ?>" title="Privacy Policy"><?php echo get_the_title(121) ?></a></li>
                <li><a href="<?php echo get_permalink(127); ?>" title="Terms &amp; Conditions"><?php echo get_the_title(127) ?></a></li>
                <li><?php wp_loginout(); ?></li>
				<li><?php wp_register('', ''); ?></li>
            </ul>
        </div>
        <div class="footer_nav">
       		<strong>Our Courses</strong><br />
            <ul>
                <li><a href="<?php echo get_permalink(13); ?>" title="Boot Camp I"><?php echo get_the_title(13) ?></a></li>
                <li><a href="<?php echo get_permalink(15); ?>" title="Boot Camp II"><?php echo get_the_title(15) ?></a></li>
		<li><a href="<?php echo get_permalink(1336); ?>" title="Boot Camp III"><?php echo get_the_title(1336) ?></a></li>
                <li><a href="<?php echo get_permalink(16); ?>" title="The Customized Boot Camp"><?php echo get_the_title(16) ?></a></li>
                <li><a href="<?php echo get_permalink(176); ?>" title="Weekly Public Speaking Classes"><?php echo get_the_title(176) ?></a></li>
                <li><a href="<?php echo get_permalink(166); ?>" title="Public Speaking Coaching"><?php echo get_the_title(166) ?></a></li>
            </ul>
        </div>
        <div class="footer_nav">
       		<strong>Our Company</strong><br />
            <ul>
                <li><a href="<?php echo get_permalink(7); ?>" title="About H324"><?php echo get_the_title(7) ?></a></li>
                <li><a href="<?php echo get_permalink(100); ?>" title="H324 Team"><?php echo get_the_title(100) ?></a></li>
                <li><a href="<?php echo get_permalink(152); ?>" title="Blog"><?php echo get_the_title(152) ?></a></li>
             
                <li><a href="<?php echo get_permalink(9); ?>" title="Testimonials"><?php echo get_the_title(9) ?></a></li>
                <li><a href="<?php echo get_permalink(10); ?>" title="Contact Us"><?php echo get_the_title(10) ?></a></li>
				<li><a href="http://www.H324.com/site-map/" title="Sitemap">Sitemap</a></li>
			</ul>
        </div>
        <div id="copyright">
        <div itemscope itemtype="http://schema.org/LocalBusiness" style="font-style:normal;">
   <span itemprop="name">H324: Master Public Speaking</span>
   <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
     <span itemprop="streetAddress">350 Townsend St, Suite 206</span><br />
     <span itemprop="addressLocality">San Francisco</span>,
     <span itemprop="addressRegion">CA </span>
     <span itemprop="postalCode">94107</span>
   </div>
   Tel No: <span itemprop="telephone">415.690.8468</span><br />
   E-mail ID:<span itemprop="email"><a href="mailto:Support@H324.com">Support@H324.com</a></span>
</div>
        <br />
        	&copy; 2008-2013 H324 LLC. All Rights Reserved.<br />
          
        </div>
    </div>
</div>
<!-- Google Analytics -->
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
<!-- end google analytics -->
<?php wp_footer(); ?>
</body>
</html>