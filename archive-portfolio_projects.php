<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row">

				    <div id="main-port" class="large-12 medium-12 columns" role="main">

							<h1 class="text-center">My Portfolio</h2>

						<!-- To see additional archive styles, visit the /parts directory -->
					    <?php get_template_part( 'parts/loop', 'archive-portfolio' ); ?>

				    </div> <!-- end #main -->


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
