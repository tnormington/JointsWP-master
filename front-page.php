<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row full-width">

				    <div id="main" class="small-12 columns" role="main">

              <div class="row text-center" id="header-cover">
                <div class="column small-12">
                  <h1>Welcome</h1>
                  <p>I’m Tim Normington, and I am a Designer</p>
                </div>
              </div>
              <div class="row portrait">
                <div class="column small-12">
                  <a href="<?php echo bloginfo('url'); ?>"><img alt="Portrait of Me" id="self-portrait" src="<?php echo get_template_directory_uri(); ?>/assets/images/me_500x.jpg" /></a>
                </div>
              </div>
              <div class="row portland text-center">
                <div class="column small-12">
                  <p>I live in Portland, Oregon. But most of the time I try to get out of the city.</p>
                </div>
                <div class="column small-12 about-btn">
									<?php $about = get_post(11); ?>
									<a href="<?php echo bloginfo('url'); ?>/about"><div class="button radius">About</div></a>
                </div>
              </div>
              <div class="row front-portfolio">
                <div class="row portfolio-title text-center">
                  <h2>I like to make things that are fun to look at...</h2>
                </div>
                <?php get_template_part('gallery', 'fun'); ?>
                <div class="row web-title text-center">
                  <h2>...Along with things that are functional.</h2>
                </div>
                <?php get_template_part('gallery', 'web'); ?>
              </div>
              <!-- <div class="row work-list">
                <div class="column large-4 large-offset-4 medium-6 medium-offset-3 small-10 small-offset-1 lfw-container text-center">
                  <h2>Looking for design work?</h2>
                  <ul>
                    <li>Web Design</li>
                    <li>Logo Design</li>
                    <li>Graphic Design</li>
                    <li>Business Cards</li>
                    <li>Advertisements</li>
                    <li>Tattoo Concepts</li>
                  </ul>
                  <a href="<?php //echo bloginfo('url'); ?>/portfolio"><div class="button radius">Portfolio</div></a>
                </div>
              </div> -->
              <!-- <div class="row form">
								<div class="row">
									<div class="column small-12 text-center">
										<h2>Want to talk?</h2>
									</div>
								</div>
								<div class="column small-10 small-offset-1 medium-8 medium-offset-2 large-4 large-offset-4">
                	<?php //echo do_shortcode('[contact-form-7 id="54" title="NameEmail"]'); ?>
								</div>
              </div> -->


				    </div> <!-- end #main -->


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
