<?php
/*
Template Name: Home Page
*/

get_header(); ?>

			<div id="content" class="widewrap">



				<?php 
				// check if the flexible content field has rows of data
				if( have_rows('home_content') ) {

				     // loop through the rows of data
				    while ( have_rows('home_content') ) : the_row();

				        if( get_row_layout() == 'full_image_block' ) { 
				        	$slug = preg_replace('/\s+/', '', get_sub_field('block_title'));
				        	if (get_sub_field ('image')) {
						        $fullbgimage = get_sub_field('image');
						        $height = $fullbgimage['height'];
						    }
				        	?>
					        <div class="scrollblock full-image-block <?php echo get_sub_field('style'); ?>" <?php if ($fullbgimage !== '' ) { ?> style="background-image:url('<?php echo $fullbgimage['url']; ?>'); height:<?php echo $height; ?>px;" <?php } ?> >
					        	<?php 
					        	if (get_sub_field ('text')) {
					        		echo '<div class="text"  id="' . $slug . '">' . get_sub_field('text') . '</div>';
					        	}
					        	?>
					        </div>
				        	<?php  $fullbgimage = '';  // flush fullbgimage variable ?>
				        
				        <?php } elseif( get_row_layout() == 'two_column_block' ) { 
					        $bgimage = get_sub_field('title_background_image');
					        $height = $bgimage['height'];
			       			$halfheight = $height/2 - 30; // line-height of the h3 is 60px, so subtract 30 to bring it precisely halfway down the header image
			       			$width = $bgimage['width'];
			       			$halfwidth = $width/4; // padding-left: 25%;
			       			$slug = preg_replace('/\s+/', '', get_sub_field('block_title'));
				       		?>
				       	<div class="scrollblock cf two-column-block <?php echo get_sub_field('style'); ?>" style="height:<?php echo $height; ?>px;">
				       		<?php 
				       		if (get_sub_field('block_title')) {
				       			 ?>
				       			<div id="<?php echo $slug; ?>" class="hometitle" style="background-image:url('<?php echo $bgimage['url']; ?>'); background-repeat:no-repeat; height:<?php echo $height; ?>px; width:<?php echo $width; ?>px;"><h3 style="padding-top:<?php echo $halfheight; ?>px;padding-left:<?php echo $halfwidth; ?>px;"><?php echo get_sub_field('block_title'); ?></h3></div>
				       		<?php }
					        	if (get_sub_field('block_content') ) {
					        		echo '<div class="homebody">' . get_sub_field('block_content');
					        		echo '</div>';

					        	}
					        ?>

				        </div>
				    <?php 	} 
				    endwhile;

				} else {

				    // no layouts found

				}
						?>

				<img src="<?php echo get_template_directory_uri(); ?>/library/images/bg-content.png" class="mainbgimg" />
			</div>

<?php get_footer(); ?>
