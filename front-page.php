<?php

/**
* Main template for displaying a static home page
*/

get_header(); ?>

<!-- Full Width Hero Image Section -->

<div id="ctd-home-image">
<div id="ctd-home-overlay">
<h1 class="ctd-home-title">Denver Website Design</h1>
<p class="ctd-overlay-subtitle">Small Business Website Solutions</p>
<p class="ctd-overlay-midline">Qualtiy Websites & Affordable Prices</p>
<a href="ctlocal2/new-website-request/"><p class="ctd-overlay-button">Get Started</p></a>
<!--<img src="http://localhost/ctdlocal/wp-content/uploads/2016/03/denver-background2.jpg">-->
</div>
</div>


<!-- Three Section Row for Featured Content -->
<div id="fp-content-wrapper">

<div id="ctd-featured-services">

<div class="ctd-featured-content">
	<img src="http://www.clicktimedesign.com/wp-content/uploads/2016/03/responsive-web-design.png" alt="Responsive Denver Website Design - Mobile Friendly">
	<h2>Mobile Design</h2>
    <p>Your website will be designed with phones and tablets in mind.  It’s widely accepted that over 50% of internet searches are performed on mobile devices.  Make sure your website is mobile ready when people are searching for your business online.</p>
</div>

<div class="ctd-featured-content">
	<img src="http://www.clicktimedesign.com/wp-content/uploads/2016/04/custom-wordpress-sites.png" alt="WordPress Content Management - Small Business Websites">
	<h2>WordPress Built</h2>
    <p>A WordPress website will allow you to be in control over your content.  Make regular blog updates to your website, adjust the content that is already there, or create a brand new page.  You will be able to log into your website when it’s convenient for you.</p>
</div>

<div class="ctd-featured-content-last">
	<img src="http://www.clicktimedesign.com/wp-content/uploads/2016/09/cust-suppport.png" alt="Ongoing Website Support Available">
	<h2>Ongoing Support</h2>
    <p>Questions will come up after your website is launched.  What if your hosting requirements change?  What if you need a new section created on your site?  You’ll receive the ongoing support you need long after your website is live on the internet.</p>
</div>
</div>


<!-- Text Section with Email Contact Form -->
<div id="ctd-featured-contact">

<div class="ctd-featured-contact-left">
<h3>Have a website project coming up?</h3>
<p>Thanks for taking the time to visit my small corner of the internet.</p>
<p>If you are thinking about a new website for your small business or having your current one redesigned, don’t hesitate to contact me.  Every project is unique and I would love to hear more about what you’re looking for.</p>
<p>Feel free to start with a quick email and we’ll talk more about your website over the phone or in person.  We’ll have to find out if you are looking to start a fun blog, display information about your long-standing business, or maybe start your own eCommerce venture. No matter what you have in mind I would love to hear about it.</p>
<p>Let’s find out if I am a match for your web design project, and if not, maybe I can give you some good advice that will help you out in the future.  Please use my contact form to start the conversation, or fill out my website request form.</p>
<p>Thank You</p>
</div>

<div class="ctd-featured-contact-right">
<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
</div>

</div>	

</div> <!-- fp-content-wrapper -->

<?php
get_footer();