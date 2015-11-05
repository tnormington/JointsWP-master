
<div class="row">
	<h3 class="text-center cat-title">Web Design</h3>
	<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
	<?php

	$webQuery = new WP_query( 'categories=web-design' );

	if ($webQuery->have_posts()) : while ($webQuery->have_posts()) : $webQuery->the_post(); ?>

		<li class="web-item">
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
				<header class="article-header text-center">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h2>
				</header> <!-- end article header -->

				<section class="entry-content" itemprop="articleBody">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>

				</section> <!-- end article section -->

				<footer class="project-footer">
			    	<!-- <p class="category"><?php
							 							$terms = get_the_terms($post->ID, 'Categories' );
														if ($terms && ! is_wp_error($terms)) :
															$term_slugs_arr = array();
															foreach ($terms as $term) {
																$term_slugs_arr[] = $term->name;
															}
															$terms_slug_str = join( " - ", $term_slugs_arr);
															echo $terms_slug_str;
														endif;
													?>
						</p> -->
				</footer> <!-- end article footer -->
			</article> <!-- end article -->
		</li>

	<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part( 'parts/content', 'missing' ); ?>
	<?php endif; ?>
</ul>
</div>


<div class="row">
	<h3 class="text-center cat-title">Sketchbook</h3>
	<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
	<?php

	$webQuery = new WP_query( 'categories=sketchbook' );


		if ($webQuery->have_posts()) : while ($webQuery->have_posts()) : $webQuery->the_post(); ?>

			<li class="sketch-item">
				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
					<header class="article-header text-center">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
					</header> <!-- end article header -->

					<section class="entry-content" itemprop="articleBody">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>

					</section> <!-- end article section -->

					<footer class="project-footer">
				    	<!-- <p class="category"><?php
								 							$terms = get_the_terms($post->ID, 'Categories' );
															if ($terms && ! is_wp_error($terms)) :
																$term_slugs_arr = array();
																foreach ($terms as $term) {
																	$term_slugs_arr[] = $term->name;
																}
																$terms_slug_str = join( " - ", $term_slugs_arr);
																echo $terms_slug_str;
															endif;
														?>
							</p> -->
					</footer> <!-- end article footer -->
				</article> <!-- end article -->
			</li>

		<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'parts/content', 'missing' ); ?>
		<?php endif; ?>
	</ul>
</div>

<div class="row">
	<h3 class="text-center cat-title">Graphic Design</h3>
	<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
	<?php

	$webQuery = new WP_query( 'categories=graphic-design' );

	if ($webQuery->have_posts()) : while ($webQuery->have_posts()) : $webQuery->the_post(); ?>

		<li class="graphic-design-item">
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
				<header class="article-header text-center">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h2>
				</header> <!-- end article header -->

				<section class="entry-content" itemprop="articleBody">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>

				</section> <!-- end article section -->

				<footer class="project-footer">
			    	<!-- <p class="category"><?php
							 							$terms = get_the_terms($post->ID, 'Categories' );
														if ($terms && ! is_wp_error($terms)) :
															$term_slugs_arr = array();
															foreach ($terms as $term) {
																$term_slugs_arr[] = $term->name;
															}
															$terms_slug_str = join( " - ", $term_slugs_arr);
															echo $terms_slug_str;
														endif;
													?>
						</p> -->
				</footer> <!-- end article footer -->
			</article> <!-- end article -->
		</li>

	<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part( 'parts/content', 'missing' ); ?>
	<?php endif; ?>
</ul>
</div>
