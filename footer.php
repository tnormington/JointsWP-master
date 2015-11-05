					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row full-width">
							<div class="footer-container">
								<div class="large-2 large-offset-4 medium-4 medium-offset-2 small-12 columns footer-nav text-center">
									<nav role="navigation">
			    						<?php joints_footer_links(); ?>
			    				</nav>
			    			</div>
								<div class="large-2 medium-4 small-12 columns footer-nav end text-center">
									<?php get_template_part('nav', 'social'); ?>
								</div>
							</div>
							<div class="large-12 medium-12 columns cw">
								<p class="source-org copyright text-center">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		</div> <!-- end .off-canvas-wrap -->
		<?php wp_footer(); ?>
		<a href="#" class="back-to-top"><i class="fa fa-chevron-circle-up fa-3x"></i></a>
	</body>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/min/lightbox.min.js"></script>
	<!--<script src="<?php echo get_template_directory_uri(); ?>/back-to-top/js/main.js"></script>-->
</html> <!-- end page -->
