<?php
/*
Template Name: homepage
*/

// Client Slideshow settings
// $sleep = number of seconds image displays before transition occurs
// $fade = number of seconds of the image fade duration
// place all pictures in the directory as defined in the $dir_path variable
// make sure they are all the same dimensions, see styles.css under #testimonials for details
// The images will appear in alphanumeric order, so best to name pictures like 1.gif, 2.gif, etc
$sleep=4; $fade=1.5;
$dir_path = 'wp-content/themes/mspeak_theme/images/clientshow/';

// DO NOT EDIT THIS CODE
	$list=array();
	if ($handle = opendir($dir_path)) { //get all files in dir, i.e. the pic files
		while (false !== ($file = readdir($handle))) {
			if ($file != "." && $file != ".." && $file != "Thumbs.db" ) $list[]=$file; //store in this array
		}
		sort($list);
		closedir($handle);
	}
	for ($i=0;$i<count($list);$i++) {
		$jquery_code.= "{src: '" . get_bloginfo('template_url') . "/images/clientshow/" . $list[$i] . "'},";
	}
	$jquery_code=substr_replace($jquery_code,"",-1); //get rid of last comma from for loop

//begin output
get_header(); ?>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.cross-slide.js?ver=2.7.1'></script>
<script type='text/javascript'>
	$(document).ready(function() {
		$('#client_slideshow').attr("title","Click to see all testmonials")
			// .crossSlide(
			// 	{sleep: <?php echo $sleep;?>, fade: <?php echo $fade;?>},
			// 	[<?php echo $jquery_code;?>])
			.css("cursor","pointer")
			.bind('click',function() {window.location="<?php echo get_permalink(8); //page id for testimonials 

?>";});
	});
</script>

<div id="headliner">
    	<p><?php bloginfo('description'); ?></p>
    </div>
    <div id="client_slideshow">
    	<a href="<?php echo get_permalink(11); ?>" title="Click to See Our Complete Client List" ><img src="<?php bloginfo

('template_url'); ?>/images/clientshow/1.gif" alt="testimonials" border="0" height="191" width="253" /></a>
    </div>
	<div class="section_top"></div>

    <div id="workshops">
           <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <?php the_content();?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>  
	<div style="float: left; width: 50%; padding-top: 7px">
<?php //dd_google1_generate('Compact (15px)') ?> 
<!-- Place this tag where you want the +1 button to render 
<g:plusone size="small"></g:plusone>

Place this render call where appropriate
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
-->
      <span style="text-decoration: underline; font-weight: bold; font-size: 15px">Benefits to Individuals / 

Professionals</span>





      <ul>
      	<li>
Increase your income and communicate with power</li>
        <li>Present information with confidence to get more of what you want</li>
        <li>Eliminate your public speaking fear and anxiety and take control of any situation</li>
        <li>Communicate to get recognition for your ideas, thoughts and proposals</li>
		<li>Get video-feedback and individualized laser focused coaching</li>
      </ul>
    </div>
    <div style="float: left; width: 50%;  padding-top: 7px">
       <span style="text-decoration: underline; font-weight: bold; font-size: 15px">Benefits to Companies / Organizations</span>
      <ul>
      	<li>Get engaging and experienced trainers to insure that your people 
		listen, laugh and learn public speaking and presentation skills 
		efficiently</li>
        <li>Increase employee’s ability to sell ideas, products or services more effectively</li>
        <li>Maximize employee’s confidence and communication impact</li>
        <li>Develop influential and persuasive leaders in your organization</li>
      </ul>
    </div>  
    <br clear="all" />
   	<h1>Public Speaking Trainings and Workshops</h1>
        <div id="bootcamp">
        	<a href="<?php echo get_permalink(13); ?>"><img src="<?php bloginfo('template_url'); ?>/images/thebootcamp.jpg" alt="<?php echo get_the_title(13); ?>" title="<?php echo get_the_title(13); ?>" /></a>
            <h2>Project Confidence and Communicate with Power (1 day training):
			<span style="font-weight: 400">
			<a href="<?php echo get_permalink(13); ?>"  title="Public Speaking Training Boot Camp">More info...</a></span></h2>
            <ul>
				<li>Speak with clarity and authority</li>
				<li>Articulate your ideas effectively in front of others</li>
				<li>Use practical tools to deal with public speaking fear, 
				stress and anxiety</li>
				<li>Maximize audience connection, engagement and impact using 
				body language, hand gestures and eye contact</li>
			</ul>
      		</div>  
        
      <div id="a_bootcamp">
        	<a href="<?php echo get_permalink(15); ?>"><img src="<?php bloginfo('template_url'); ?>/images/a_bootcamp.jpg" alt="<?php echo get_the_title(15); ?>" width="285" height="189" title="<?php echo get_the_title(15); ?>" /></a>
            <h2>Create and Deliver High-Impact Presentations:
			<span style="font-weight: 400">
			<a href="<?php echo get_permalink(15); ?>" title="Public Speaking Boot Camp">
			More info...</a></span></h2>
            <ul>
            	<li>Learn to create clear and well-structured presentations</li>
				<li>Produce excellent presentations in a fraction of the time</li>
				<li>Present to influence, educate, engage, and lead</li>
				
           	</ul>
      		</div> 
      <div id="c_bootcamp">
        	<a href="<?php echo get_permalink(16); ?>"><img src="<?php bloginfo('template_url'); ?>/images/c_bootcamp.jpg" alt="<?php echo get_the_title(16); ?>" width="285" height="189" title="<?php echo get_the_title

(16); ?>" /></a>
            <h2>Get Customizable Onsite Trainings for Your Organization:
			<span style="font-weight: 400">
			<a href="<?php echo get_permalink(16); ?>" title="Customized Public Speaking Boot Camp">
			More info...</a></span></h2>
            <ul>
            	<li>1 hour - 3 full days</li>
                <li>Groups of 5 to 20 professionals</li>
           	</ul>
            <h2>Topics most requested</h2>
            <ul>
            	<li>Fundamentals of Presentations</li>
                <li>Sales Presentations</li>
                <li>Business Presentations</li>
                <li>Technical Presentations</li>                                
           	</ul>
            <h2>Partial Client List:</h2>
            <p>Sony, Merrill Lynch, US Army, ISM, Cal CPA Foundation</p>
      </div>     
      <p style="font-size: 20px; padding-top: 10px; text-align: center; font-weight: bold">ALL OUR&nbsp; WORKSHOPS ARE BACKED BY 

A 100% SATISFACTION GUARANTEE</p>
	</div>
	<div class="section_bottom"></div>
    
   	<div class="section_top"></div>
    <div id="o_resource">
    	<h2>Other Public Speaking Resources</h2>
        <ul>
        	<li><a href="http://www.methodspeaking.com/blog/" title="Public Speaking Tips &amp; Presentation Analysis Blog">Public Speaking Tips and Presentation Analysis Blog</a></li>
            <li><a href="http://www.methodspeaking.com/biweekly-public-speaking-classes/" title="Biweekly Public Speaking Classes">Biweekly Public Speaking Classes</a><br />(San Jose, San Francisco, San Mateo and more)</li>
            <li><a href="http://www.methodspeaking.com/public-speaking-coaching/" title="One On One Public Speaking &amp; Presentation Coaching">One-On-One Public Speaking and Presentation Coaching </a></li>
        </ul>
<!-- Homepage Content -->
<div style="text-align:justify; height:470px; width:920px; font-family: Arial,Helvetica,sans-serif; font-size:12px; line-height:16px;">
<h1 style="font-size:15px;">Master Public Speaking</h1>
MethodSpeaking is a specialized public speaking training organization that offers tools, courses and workshops to increase public speaking skills, speaking confidence and presentation effectiveness.  The presentation training courses are highly interactive and well designed. All participants receive coaching, support, and presentation techniques that build their skills that help them become more effective leaders and communicators in the workplace. Public speaking school classes are held both at MethodSpeaking offices or on-site for organizations and companies. On-site assessments, consultations, and customized training programs are available for organizations that want to arm their teams and future leaders with the latest public speaking tools and presentation skills.

<h2 style="font-size:15px;margin-bottom:0;padding-bottom:0;">Build Your Public Speaking Skills</h2>
Public speaking skills open the door to career opportunities that help participants climb the corporate ladder with ease and speed. With public speaking and presentation skills and abilities you can get your message across with power and clarity, communicate in front of groups and gain respect, and easily overcome natural fears and anxieties of public speaking.  Our public speaking classes can help arm you with the latest speaking and presenting tools that will turn you into an effective communicator in front of any size audience.
  
<h2 style="font-size:15px;margin-bottom:0;padding-bottom:0;">Individuals &amp; Professionals</h2>
The presentation and public speaking coaching we provide, will significantly help individuals and professionals master communication skills in front of an audiences of two to few hundred.  We use individualized public speaking exercises, video feedback and coaching technologies. Our communication skills workshop give participants real time speaking experiences, increased confidence, and the personal coaching they need to develop persuasive and commanding presentation skills.  Participants will receive individualized &ldquo;fear of public speaking tips&rdquo; and laser focused coaching to eliminate specific obstacles standing in their way. All coaching is private and confidential and guaranteed to get you to the next level.

<h2 style="font-size:15px;margin-bottom:0;padding-bottom:0;">Companies &amp; Organizations</h2>
We bring public speaking seminars, presentation skills workshops and speaking boot camps into your organization. Our certified trainers will help your key people increase their communication skills, leadership presence, ability to think on their feet, and persuasion skills through our full-day trainings and follow up workshops.

<h2 style="font-size:15px;margin-bottom:0;padding-bottom:0;">Contact MethodSpeaking</h2>
For more information about our Public Speaking Training San Francisco services or to schedule your FREE, no obligation 15 minute phone consultation, call us today at 415.974.6322, email <a href="mailto:support@methodspeaking.com">support@methodspeaking.com</a> or fill out our convenient online <a href="http://www.methodspeaking.com/contact-us/" title="Request Form">request form</a>.
</div>

    </div>
    <div class="section_bottom"></div>

    
    <?php get_footer(); ?>