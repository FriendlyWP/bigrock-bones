/*
 * Bones Scripts File
*/

jQuery(document).ready(function($) {

  // ADD CLASS TO LINKS CONTAINING IMAGES
  $('a:has(img)').addClass('imglink');


	$('.process-title').on('click',function(){
   $('.process-title').removeClass('active');
    $(this).addClass('active');
});
	

}); /* end of as page load scripts */
