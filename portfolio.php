<?php /* Template Name: Portfolio Template */ ?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row">

				    <div id="main-content" class="small-12 columns" role="main">
							<div class="row portfolio-title text-center">
								<div class="column small-12">
									<h1>Portfolio</h1>
								</div>
								<div class="column small-12">
									<div data-magellan-expedition="" class="mag-wrap">
									  <dl class="sub-nav row text-center">
									    <dd data-magellan-arrival="sketch" class="medium-3 small-6 column"><a href="#sketch">Sketch</a></dd>
									    <dd data-magellan-arrival="web" class="medium-3 small-6 column"><a href="#web">Web</a></dd>
											<dd data-magellan-arrival="digital" class="medium-3 small-6 column"><a href="#digital">Digital</a></dd>
											<dd data-magellan-arrival="3D" class="medium-3 small-6 column end"><a href="#3D">3D</a></dd>
									  </dl>
									</div>
								</div>
								<div class="column small-12 content-divider">
								</div>
							</div>
							<div class="row portfolio">
								<div class="column small-12 sub-title text-center" data-magellan-destination="sketch">
									<a name="sketch"></a>
									<h2>Sketchbook</h2>
								</div>
							  <ul class="large-block-grid-4 medium-block-grid-4 small-block-grid-2">
							    <li>
							      <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/crazy_hair-full.png" data-lightbox="crazy_hair-full" data-title="Crazy Hair"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/crazy_hair-th.png" /></a>
							    </li>

							    <li>
							      <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/color_circles-full.png" data-lightbox="color_circles-full" data-title="Colorful Circles"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/color_circles-th.png" /></a>
							    </li>

							    <li><a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/wurm-full.png" data-lightbox="wurm-full" data-title="Sub-surface Wurm"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/wurm-th.png" /></a></li>
							    <li><a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/abstract_teeth-full.png" data-lightbox="abstract_teeth-full" data-title="Abstract Teeth"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/abstract_teeth-th.png" /></a></li>
									<li><a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/elephant-full.png" data-lightbox="elephant-full" data-title="Elephant"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/elephant-th.png" /></a></li>
									<li><a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/foot-full.png" data-lightbox="foot-full" data-title="Foot"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/foot-th.png" /></a></li>
									<li><a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/sad_face-full.png" data-lightbox="sad_face-full" data-title="Sad Face"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/sad_face-th.png" /></a></li>
									<li><a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/abstract_wave-full.png" data-lightbox="abstract_wave-full" data-title="Abstract Wave"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/abstract_wave-th.png" /></a></li>
									<li><a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/gdead-full.png" data-lightbox="gdead-full" data-title="Grateful Dead Head"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/sketch/gdead-th.png" /></a></li>
								</ul>
								<div class="column small-12 sub-title text-center" data-magellan-destination="web">
									<a name="web"></a>
									<h2>Web Design</h2>
								</div>
								<div class="column small-12 sub-title text-center" data-magellan-destination="digital">
									<a name="digital"></a>
									<h2>Digital Art</h2>
								</div>
								<div class="column small-12 sub-title text-center" data-magellan-destination="3D">
									<a name="3D"></a>
									<h2>3D Design</h2>
								</div>
							</div>

				    </div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
