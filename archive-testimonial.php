<?php get_header(); ?>

			<div id="content">

				<header class="article-header">
					<div class="wrap">
						<h1 class="page-title" itemprop="headline">Testimonials</h1>
					</div>

				</header> <?php // end article header ?>

				<div id="inner-content" class="wrap cf">

						<div id="main" class="main-content full cf" role="main">


							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<section class="entry-content cf">

									<?php if ( has_post_thumbnail() ) {
										echo '<a href="' . get_permalink() . '" title="' . the_title_attribute("echo=0") . '">';
											the_post_thumbnail( 'medium', array( 'class' => 'noborder entry-title' ) );
										echo '</a>';
									} else { ?>
										<h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<?php } ?>

									<div class="excerpt">
										<?php the_excerpt(); ?>
									</div>

								</section>

								<hr />

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

				</div>

			</div>

<?php get_footer(); ?>
