<?php
/*
Template Name: Process Page
*/

get_header(); ?>

			<div id="content">

				<header class="article-header">
					<div class="wrap">
						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
					</div>

				</header> <?php // end article header ?>

				<div id="inner-content" class="wrap cf">

					<?php if ( function_exists('get_field')) {
						
							if( have_rows('processes') ) {
								echo '<div class="process-tiles">';
							 	
							    while ( have_rows('processes') ) : the_row();
							    $slug = preg_replace('/\s+/', '', get_sub_field('process_title')); ?>

	        						<a class="process-title show" target="<?php echo $slug; ?>">
									    <img src="<?php the_sub_field('process_icon'); ?>" alt="<?php the_sub_field('process_title'); ?>" />
									     <h2><?php the_sub_field('process_title'); ?></h2>
									    <button class="button" href="">View Process</button>
									</a>

							    <?php 
							    endwhile;
							    echo '</div>';
							}
					} ?>

						<div id="main" class="main-content full cf" role="main">

							<?php if ( function_exists('get_field')) {
						
									if( have_rows('processes') ) {
																			 	
									    while ( have_rows('processes') ) : the_row();
									    $slug = preg_replace('/\s+/', '', get_sub_field('process_title')); ?>
			        					<div class="process-info" id="div<?php echo $slug; ?>">
										   
										    <a href="<?php the_sub_field('process_file'); ?>" target="_blank"><img src="<?php the_sub_field('process_image'); ?>" class="noborder" alt="<?php the_sub_field('process_title'); ?>" /></a>
									    </div>
									    <?php 
									    endwhile;
									    
									}
							} ?>

						</div>

				</div>

			</div>

<?php get_footer(); ?>
