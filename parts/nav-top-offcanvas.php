<div class="sticky show-for-medium-up contain-to-grid topbar-style">
	<nav class="top-bar" data-topbar>
		<section class="top-bar-section text-center">
			<?php joints_top_nav(); ?>
		</section>
	</nav>
</div>

<div class="show-for-small-only">
	<nav class="tab-bar">
		<section class="middle tab-bar-section">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="tab-bar-link"><h1 class="title"><?php bloginfo('name'); ?></h1></a>
		</section>
		<section class="left-small">
			<a href="#" class="left-off-canvas-toggle menu-icon" ><span></span></a>
		</section>
	</nav>
</div>

<aside class="left-off-canvas-menu show-for-small-only">
	<ul class="off-canvas-list">
		<li><label>Navigation</label></li>
			<?php joints_off_canvas(); ?>
	</ul>
</aside>


<a class="exit-off-canvas"></a>
