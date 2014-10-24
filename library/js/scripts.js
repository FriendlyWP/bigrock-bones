/*
 * Bones Scripts File
*/

jQuery(document).ready(function($) {

  // ADD CLASS TO LINKS CONTAINING IMAGES
  $('a:has(img)').addClass('imglink');

	// Show / hide function used in tmpl-processes.php
	$('.process-info').hide();
	$('.show').click(function () {
	    $('.process-info').hide("slow");
	    $('#div' + $(this).attr('target')).show("slow");
	});

	// Active/inactive styles for process titles in tmpl-processes.php
	$('.process-title').on('click',function(){
		$('.process-title').removeClass('active');
	    $(this).addClass('active');
	});

	//SCROLLMAGIC

	var scrollorama = $.scrollorama({
        blocks:'.scrollblock',
        enablePin:false
    });

    scrollorama.animate('#OurMission',{
	    duration:300, delay:100, property:'left', start:-500, end:0, easing:'easeInCubic'
	});

    scrollorama.animate('#WhoWeAre',{
	    duration:1000, delay:0, property:'left', start:-600, end:0, easing:'easeInCubic'
	});
	scrollorama.animate('#OurServices',{
	    duration:600, delay:100, property:'left', start:-500, end:0, easing:'easeInCubic'
	});
	scrollorama.animate('#FollowUs',{
	    duration:600, delay:100, property:'left', start:-500, end:0, easing:'easeInCubic'
	});
	

}); /* end of as page load scripts */
