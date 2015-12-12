<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package seniorsoutdoors
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<p class="copyright">&copy; 2015 Seniors Outdoors!</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" charset="utf-8">

//Initial placement of images
var numberOfImages = $("#header-slider div").length,
	counter = 0,
	totalWidth = 0,
	currentImage,
	currentImageId,
	currentImageWidth,
	firstImageId,
	firstImage,
	firstImageWidth,
	slideAmount;
while (counter < numberOfImages) {
	counter++;
	currentImageId = "galleryImage" + counter;
	currentImage = document.getElementById(currentImageId);
	currentImageWidth = Math.floor(((240/currentImage.naturalHeight) * currentImage.naturalWidth));
	console.log(currentImageWidth);
	$("#" + currentImageId).parent().css("left",totalWidth);
	totalWidth = totalWidth + currentImageWidth;
}
//End initial placement

//Slider
counter = 1;

window.setInterval(runSlider, 5000);

function runSlider() {
	firstImageId = "galleryImage" + counter;
	firstImage = document.getElementById(firstImageId);
	slideAmount = firstImage.clientWidth + 1;
//Code below adapted from: http://jsfiddle.net/jtbowden/ykbgT/2/
	$("#header-slider div").animate({
		left: '-=' + slideAmount
    }, 500, function() {
        $(firstImage).parent().css('left', totalWidth-slideAmount);
        $(firstImage).parent().appendTo('#header-slider');
    });
	counter++;
	if (counter > numberOfImages) { counter = 1; }
}

</script> 

</body>
</html>
