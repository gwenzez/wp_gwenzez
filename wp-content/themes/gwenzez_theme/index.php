<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="home clearfix" id="index">	
		<div class="title">
			<div class="wrapper">
				<h1>Gwen Zezulka</h1>
				<h2>&sol;Front-end web developer</h2>
				<h2>&sol;Social media junkie</h2>
			</div><!--wrapper-->
		</div>
	</div><!--home-->

	<div class="about" id="about">
		<div class="wrapper">
			<h3>&sol;About Me</h3>
			<img src="images/profilePicSm.jpg" alt="Gwen Zezulka profile picture">
			<h5><span>Developer</span><span>Photographer</span><span>Writer</span><span>Blogger</span></h5>
			<p>I'm a Toronto based front-end web developer, photographer and content creator. I build websites with HTML5, CSS3, jQuery, JavaScript, and WordPress. I have a hard time <span>not</span> taking pictures and I see stories in everything. In a nutshell, I love to make things.</p><p>When creating anything, whether it is a website for a client or a sandwich for my kids, understanding balance is the key. Beauty and function. Work and family. Professional and fun. </p>
			<p>Outside of the interwebs, I am an avid cook and cocktail maker. I live with my two kids and four furry creatures. That's about one creature away from crazy.</p>
		</div><!--wrapper-->
	</div><!--about-->

	<div class="portfolio" id="portfolio">
		<div class="wrapper">
		<h3>&sol;Portfolio</h3>
			<div class="gallery clearfix">
				<div class="slide clearfix">
					<img src="images/coffee.png" alt="Coffee + Code picture">
					<div class="slideText clearfix">
						<h4>coffeeandcode.ca</h4>
						<h5><span> HTML5 </span>  <span> CSS3 </span>  <span> jQuery </span> <span> Responsive </span></h5>
						<p>I am co-founder and lead developer of this boutique web design and development agency. Coffee + Code strives to help small businesses grow to their full potential by developing a strong online presence. As the techie half of the company, I build websites, and help clients develop a strong social media strategy. I also built this beautiful site. ;)</p>
						<a href="http://www.coffeeandcode.ca" target="_blank" class="ani">Visit live site</a>
					</div><!-- slideText -->			
				</div><!--slide-->
				<div class="slide clearfix">
					<img src="images/gedalof.png" alt="Gedalof Mediation Arbitration">
					<div class="slideText">
						<h4>gedalofmedarb.com</h4>
						<h5><span> HTML5 </span>  <span> CSS3 </span>  <span> jQuery </span> <span> Responsive </span></h5>
						<p>"Gwen did a fantastic job putting together my website. I had a vague idea of the image I wanted to project with the site, but very few ideas. Gwen asked clear and intelligent questions and presented me with several options for the site. The end product and the experience of working with Gwen was excellent, and I would recommend unequivocally her services to anybody."<br> - Eli Gedalof</p>
						<a href="http://http://www.gedalofmedarb.com/" target="_blank" class="ani">Visit live site</a>
					</div><!-- slideText -->
				</div><!--slide-->
				<div class="slide clearfix">
					<img src="images/roundhouse.png" alt="Roundhouse Pediatrician picture">
					<div class="slideText">
						<h4>roundhousepediatrics.com</h4>
						<h5><span> HTML5 </span>  <span> CSS3 </span>  <span> jQuery </span> <span> Responsive </span></h5>
						<p>"Gwen was amazing to work with. She was meticulous in problem solving and she ensured that the site ran well across all platforms. It was so easy to work with Gwen, and she never said no to a request, but often had solutions that were superior to the original idea proposed.  I absolutely love my website and would recommend Gwen's web development skills to anyone."<br> - Rahul Saxena</p>
						<a href="http://www.roundhousepediatrics.com" target="_blank" class="ani">Visit live site</a>
					</div><!-- slideText -->
				</div><!--slide-->
				<div class="slide clearfix">
					<img src="images/holiday.png" alt="Holiday Spirit Meter">
					<div class="slideText">
						<h4>Holiday e-card</h4>
						<h5><span> JavaScript </span>  <span> jQuery </span>  <span> HTML5 </span> <span> CSS3 </span></h5>
						<p>This "Holiday Spirit Meter" was a fun project built as a tongue-in-cheek holiday e-card for clients. Having a get together with family? Let us calculate the necessary holiday spirits!</p>
						<a href="http://www.coffeeandcode.ca/holidayspirits" target="_blank" class="ani">Visit live site</a>
					</div><!-- slideText -->
				</div><!--slide-->
			</div><!--gallery-->
		</div><!--wrapper-->
	</div><!--portfolio-->

	<!-- <div class="blog" id="blog">
		<div class="wrapper">
			<h3>&sol;Blog</h3>
		</div> --><!--wrapper-->
	<!-- </div> --><!--blog-->

	<div class="contact" id="contact">
		<div class="wrapper">
		<h3>&sol;Contact</h3>
			<p>Follow my "coder-mom" adventures on Twitter. <span class="break"><br></span>See my photography addiction on Instagram.</p><p>Check out my credentials on LinkedIn. <span class="break"><br></span>Talk to me via email.</p><p>Thanks for visiting! Talk soon.</p>
			<div class="links">
				<ul class="clearfix">
					<li>
						<a href="https://twitter.com/gwenzez" target="_blank">
							<img src="images/twitter.svg" class="socialLink" alt="Twitter icon">
						</a>
					</li>
					<li>
						<a href="http://instagram.com/gwenzez/" target="_blank">
							<img src="images/instagram.svg" class="socialLink" alt="Instagram icon">
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/profile/view?id=206180366&trk=nav_responsive_tab_profile_pic" target="_blank">
							<img src="images/linkedin.svg" class="socialLink" alt="Linkedin icon">
						</a>
					</li>
					<li>
						<a href="mailto:gwenzez@gmail.com">
							<img src="images/email.svg" class="socialLink" alt="Mail icon">
						</a>
					</li>
				</ul>
			</div><!--links-->
		</div><!--wrapper-->
	</div><!--contact-->

<?php get_footer(); ?>