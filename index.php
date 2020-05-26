<?php
/*
Template Name: Home __TEMPLATE__
*/
?>

<?php get_header(); ?>

		<section class="bodyMain">
			<?php if( get_field('my_rate') ): ?>
				<div class="my-rate-btn">
					<span class="top">View My Rate</span>
					<span class="bottom">
						<?php the_field( 'my_rate' ); ?>
					</span>
				</div>
			<?php endif; ?>
			<div class="small-12 medium-4 large-2 columns bodyMainLeft">
				<img src="<?php bloginfo( 'template_directory' ); ?>/img/aboutMePhoto.png" alt="Gil Tattooing">
			</div>

			<div class="small-12 medium-8 large-10 columns bodyMainRight">
				<div class="homePageBody">
					<h1 class="medium-12 large-9 columns">
						<?php if( get_field('page_title') ): ?>
							<?php the_field( 'page_title' ); ?>
						<?php endif; ?>
					</h1>

					<section class="medium-12 large-3 columns">
						<button href="#" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" class="button btn-outline small dropdown">View Galleries</button><br>
						<ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true" tabindex="-1">
						  <li><a href="tattoos">Tattoos</a></li>
						  <li><a href="bigwork">Big Work</a></li>
							<li><a href="americantraditional">American Traditional</a></li>
						  <li><a href="sleeves">Sleeves</a></li>
						  <li><a href="covers">Covers</a></li>
						  <li><a href="portraits">Portraits</a></li>
						  <li><a href="artwork">Paintings & Crafts</a></li>
						</ul>
					</section>

					<p class="body-content">
						<?php if( get_field('page_body_content') ): ?>
							<?php the_field( 'page_body_content' ); ?>
						<?php endif; ?>
					</p>
				</div>
			</div>
		</section>
		<section class="instagram-carousel">
			<a href="https://www.instagram.com/besttattoogil/?hl=en" class="instagram-icon" target="_blank">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
					<style type="text/css">
					.st0{clip-path:url(#SVGID_2_);}
					.st1{clip-path:url(#SVGID_4_);enable-background:new    ;}
					.st2{clip-path:url(#SVGID_6_);}
					.st3{clip-path:url(#SVGID_8_);}
					.st4{clip-path:url(#SVGID_10_);fill:#FF7B0F;}
					.st5{clip-path:url(#SVGID_12_);}
					.st6{clip-path:url(#SVGID_14_);fill:#FF7B0F;}
					.st7{clip-path:url(#SVGID_16_);}
					.st8{clip-path:url(#SVGID_18_);fill:#FF7B0F;}
					</style>
					<g>
						<defs>
							<rect id="SVGID_1_" x="3.5" y="2.4" width="93.3" height="95.2"/>
						</defs>
						<clipPath id="SVGID_2_">
							<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st0">
							<defs>
								<rect id="SVGID_3_" x="-4" y="-5.3" width="108.3" height="115.7"/>
							</defs>
							<clipPath id="SVGID_4_">
								<use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
							</clipPath>
							<g class="st1">
								<g>
									<defs>
										<rect id="SVGID_5_" x="3.5" y="2.2" width="93.3" height="97.1"/>
									</defs>
									<clipPath id="SVGID_6_">
										<use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
									</clipPath>
									<g class="st2">
										<defs>
											<path id="SVGID_7_" d="M50.1,11c12.5,0,13.9,0,18.9,0.3c4.5,0.2,7,1,8.7,1.6c2.2,0.9,3.7,1.9,5.4,3.6c1.6,1.7,2.6,3.3,3.5,5.5
											c0.6,1.7,1.4,4.2,1.6,8.8c0.2,5,0.3,6.5,0.3,19.2c0,12.7,0,14.2-0.3,19.2c-0.2,4.6-1,7.2-1.6,8.8c-0.8,2.2-1.9,3.8-3.5,5.5
											c-1.6,1.7-3.2,2.7-5.4,3.6c-1.6,0.7-4.1,1.4-8.7,1.6C64.1,89,62.6,89,50.1,89c-12.5,0-13.9,0-18.9-0.3c-4.5-0.2-7-1-8.7-1.6
											c-2.2-0.9-3.7-1.9-5.4-3.6c-1.6-1.7-2.6-3.3-3.5-5.5c-0.6-1.7-1.4-4.2-1.6-8.8c-0.2-5-0.3-6.5-0.3-19.2
											c0-12.7,0-14.2,0.3-19.2c0.2-4.6,1-7.2,1.6-8.8c0.8-2.2,1.9-3.8,3.5-5.5c1.6-1.7,3.2-2.7,5.4-3.6c1.6-0.7,4.1-1.4,8.7-1.6
											C36.2,11,37.7,11,50.1,11 M50.1,2.4c-12.7,0-14.3,0.1-19.2,0.3c-5,0.2-8.4,1-11.3,2.2c-3.1,1.2-5.7,2.8-8.3,5.5
											c-2.6,2.6-4.2,5.3-5.4,8.4c-1.2,3-1.9,6.5-2.2,11.6C3.5,35.4,3.5,37.1,3.5,50c0,12.9,0.1,14.6,0.3,19.6
											c0.2,5.1,1,8.5,2.2,11.6c1.2,3.1,2.8,5.8,5.4,8.4c2.6,2.6,5.2,4.3,8.3,5.5c3,1.2,6.4,2,11.3,2.2c5,0.2,6.6,0.3,19.2,0.3
											c12.7,0,14.3-0.1,19.2-0.3c5-0.2,8.4-1,11.3-2.2c3.1-1.2,5.7-2.8,8.3-5.5c2.6-2.6,4.2-5.3,5.4-8.4c1.2-3,1.9-6.5,2.2-11.6
											c0.2-5.1,0.3-6.7,0.3-19.6c0-12.9-0.1-14.6-0.3-19.6c-0.2-5.1-1-8.5-2.2-11.6c-1.2-3.1-2.8-5.8-5.4-8.4
											c-2.6-2.6-5.2-4.3-8.3-5.5c-3-1.2-6.4-2-11.3-2.2C64.4,2.4,62.8,2.4,50.1,2.4"/>
										</defs>
										<clipPath id="SVGID_8_">
											<use xlink:href="#SVGID_7_"  style="overflow:visible;"/>
										</clipPath>
										<g class="st3">
											<defs>
												<rect id="SVGID_9_" x="3.5" y="2.2" width="93.3" height="97.1"/>
											</defs>
											<clipPath id="SVGID_10_">
												<use xlink:href="#SVGID_9_"  style="overflow:visible;"/>
											</clipPath>
											<rect x="-15.2" y="-16.3" class="st4" width="130.7" height="132.6"/>
										</g>
									</g>
								</g>
							</g>
						</g>
					</g>
					<g>
						<defs>
							<path id="SVGID_11_" d="M50.1,25.5c-13.2,0-24,10.9-24,24.4c0,13.5,10.7,24.4,24,24.4c13.2,0,24-10.9,24-24.4
							C74.1,36.5,63.4,25.5,50.1,25.5 M50.1,65.9c-8.6,0-15.6-7.1-15.6-15.9s7-15.9,15.6-15.9c8.6,0,15.6,7.1,15.6,15.9
							C65.7,58.8,58.7,65.9,50.1,65.9"/>
						</defs>
						<clipPath id="SVGID_12_">
							<use xlink:href="#SVGID_11_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st5">
							<defs>
								<rect id="SVGID_13_" x="-4" y="-5.3" width="108.3" height="115.7"/>
							</defs>
							<clipPath id="SVGID_14_">
								<use xlink:href="#SVGID_13_"  style="overflow:visible;"/>
							</clipPath>
							<rect x="7.5" y="6.9" class="st6" width="85.3" height="86.2"/>
						</g>
					</g>
					<g>
						<defs>
							<path id="SVGID_15_" d="M80.7,24.6c0,3.2-2.5,5.7-5.6,5.7c-3.1,0-5.6-2.6-5.6-5.7s2.5-5.7,5.6-5.7C78.1,18.9,80.7,21.4,80.7,24.6"
							/>
						</defs>
						<clipPath id="SVGID_16_">
							<use xlink:href="#SVGID_15_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st7">
							<defs>
								<rect id="SVGID_17_" x="-4" y="-5.3" width="108.3" height="115.7"/>
							</defs>
							<clipPath id="SVGID_18_">
								<use xlink:href="#SVGID_17_"  style="overflow:visible;"/>
							</clipPath>
							<rect x="50.8" y="0.2" class="st8" width="48.5" height="48.8"/>
						</g>
					</g>
					</svg>
					<p class="instagram-hashtag">besttattoogil</p>
					</a>
					
			<div class="instagram-feed">
				<?php get_sidebar(); ?>
			</div>
		</section>

		<section class="portfolioLinksMain">
			<h3 class="small-12 large-12 columns">Check out my recent work:</h3>
			<h2 class="small-12 large-12 columns">TATTOO GALLERIES</h2>

			<ul class="portfolio-links">
			  <li><a href="tattoos"><img data-other-src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_tattoos.jpg" src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_tattoos_bw.jpg" alt="Tattoos"></a></li>
			  <li><a href="bigwork"><img data-other-src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_bigwork.jpg" src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_bigwork_bw.jpg" alt="Big Work"></a></li>
				<li><a href="americantraditional"><img data-other-src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_americantraditional.jpg" src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_americantraditional_bw.jpg" alt="American Traditional"></a></li>
			  <li><a href="sleeves"><img data-other-src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_sleeves.jpg" src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_sleeves_bw.jpg" alt="Sleeves"></a></li>
			  <li><a href="covers"><img data-other-src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_covers.jpg" src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_covers_bw.jpg" alt="Cover Work"></a></li>
			  <li><a href="portraits"><img data-other-src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_portraits.jpg" src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_portraits_bw.jpg" alt="Portraits"></a></li>
			  <li><a href="artwork"><img data-other-src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_paintings.jpg" src="<?php bloginfo( 'template_directory' ); ?>/img/portfolioLink_paintings_bw.jpg" alt="Artwork"></a></li>
			</ul>

		</section>

		<section class="row contactMe">
			<h3 class="small-12 large-12 columns">Currently tattooing at:</h3>
			<h2 class="small-12 large-12 columns">HAVANA STREET TATTOO</h2>
			<p class="small-12 large-12 columns">2712 South Havana Street </br> Aurora, Colorado</p>
			<a href="tel:+3033695025" class="small-12 large-12 columns phone-number">(303) 369.5025</a>
		</section>

		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3071.218683428817!2d-104.86604439999999!3d39.667295100000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c87f374eb90e1%3A0x6b88bb02fbe7e3c2!2s2712+S+Havana+St%2C+Aurora%2C+CO+80014!5e0!3m2!1sen!2sus!4v1409510827381" width="100%" height="300" frameborder="0"></iframe>
	</section>

  <script>
    $(document).foundation();
  </script>

<?php get_footer(); ?>
