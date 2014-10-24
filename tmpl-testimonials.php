<?php
/*
Template Name: Testimonials Page
*/

 get_header(); ?>

			<div id="content">

				<header class="article-header">
					<div class="wrap">
						<h1 class="page-title" itemprop="headline">Testimonials</h1>
					</div>

				</header> <?php // end article header ?>

				<div id="inner-content" class="wrap cf">

					<div id="main" class="main-content full cf" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="testimonial-pagination">
							<span class="next"><?php next_post_link('%link', '<i title="Next Testimonial" class="fa fa-angle-right"></i>'); ?></span>
							<span class="previous"><?php previous_post_link('%link', '<i title="Previous Testimonial" class="fa fa-angle-left"></i>'); ?></span> 
						</div>

							<?php if (function_exists('get_field') && get_field('quote')) { 
								echo '<blockquote class="testimonial">';
									the_field('quote');
									echo '<hr />';
									echo '<span class="person">' . get_the_title() . '</span>';
									if (get_field('attribution_company')) {
										echo '<span class="company">' . get_field('attribution_company') . '</span>';
									}
								echo '</blockquote>';
							}
							?>


						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
