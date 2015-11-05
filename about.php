<?php /* Template Name: About Template */ ?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row">

				    <div id="main-content" class="small-12 columns aboutme-container" role="main">

					  <!-- To see additional archive styles, visit the /parts directory -->
							<div class="column small-12 text-center">
								<h1 id="aboutme-title">About Me</h1>
							</div>
							<div class="column small-12 content-divider">
							</div>
					    <?php
								if (have_posts()) :
								   while (have_posts()) :
								      the_post();
								         the_content();
								   endwhile;
								endif;
							?>

				    </div> <!-- end #main -->


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
