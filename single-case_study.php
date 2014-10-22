<?php get_header(); ?>

			<div id="content">

				<header class="article-header">
					<div class="wrap">
						<h1 class="page-title" itemprop="headline">Case Studies</h1>
					</div>

				</header> <?php // end article header ?>

				<div id="inner-content" class="wrap cf">

						<div id="main" class="main-content full cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<div class="testimonial-pagination">
								<span class="next"><?php next_post_link('%link', '<i title="Next Case Study" class="fa fa-angle-right"></i>'); ?></span>
								<span class="previous"><?php previous_post_link('%link', '<i title="Previous Case Study" class="fa fa-angle-left"></i>'); ?></span> 
							</div>


							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf study-content' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<h1 class="entry-title"><?php the_title(); ?></h1>

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section> <?php // end article section ?>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

				</div>

			</div>

<?php get_footer(); ?>
