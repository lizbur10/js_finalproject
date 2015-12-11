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
	$("#header-slider").find("div:first").addClass("current").next().addClass("next"); 
	var numberOfImages = $("#header-slider div").length,
		currentImage,
		imageId,
		imageWidth,
		totalWidth = 0,
		firstImage,
		slideAmount;
	for (counter = 1; counter<=numberOfImages; counter++) {
		imageId = "galleryImage" + counter;
		currentImage = document.getElementById(imageId);
		imageWidth = currentImage.clientWidth;
		console.log(imageWidth);
		totalWidth = totalWidth + imageWidth; 
		if (totalWidth < 1080) {
			$("#" + imageId).parent().addClass("visible");
		}
	}
//	window.setInterval(runSlider, 3000);

//	function runSlider() {
		imageId = $(".visible:first").find("img").attr("id");
		firstImage = document.getElementById(imageId);
		slideAmount = "-" + firstImage.clientWidth + "px";
		console.log(slideAmount);
		$(firstImage).addClass("test").animate({left: slideAmount}, 500);
/*		if (counter < numberOfImages) {
			$(".current").css("display","block").next().addClass("next").css("display","block"); //change animation so everything right of #1 moves left imageWidth pixels; 
//			$(".current").slideUp(5000, function() {											//use z-index to make 1st image appear below the others
			$(".current").animate({width: "hide"},{duration: 5000, complete: function() {		//tricky part: getting new image to appear at the end seamlessly
				$(".current").removeClass("current");
				$(".next").removeClass("next").addClass("current");
				counter++;
				}
			});
		} else {
			$("#header-slider div:first").css("display","block");
			$(".current").slideUp(5000, function() {
				$(".current").removeClass("current");
				$("#header-slider div:first").addClass("current");
				counter=1;
			});
		}
		counter++;
		if (counter == numberOfImages) { counter = 1; }
	}
*/	
</script> 

</body>
</html>
