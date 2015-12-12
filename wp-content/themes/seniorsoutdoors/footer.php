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
//	$("#header-slider").find("div:first").addClass("current").next().addClass("next"); 

//Initial placement of images
	var numberOfImages = $("#header-slider div").length,
		counter = 0,
		totalWidth = 0,
		currentImage,
		currentImageId,
		currentImageWidth,
		setWidth,
		firstImageId,
		firstImage,
		firstImageWidth,
		nextImageID,
		nextImage,
		nextImageWidth;
	while (totalWidth < 1000) {
		counter++;
		currentImageId = "galleryImage" + counter;
		currentImage = document.getElementById(currentImageId);
		currentImageWidth = currentImage.clientWidth;
		totalWidth = totalWidth + currentImageWidth; 
		if (totalWidth < 1000) {
			$("#" + currentImageId).parent().removeClass("invisible").addClass("visible");
		} else {
			setWidth = totalWidth - currentImageWidth;
			counter = counter - 1;
			break;
		}
	}
//End inital placement

window.setInterval(runSlider, 5000);

/*$('.slides').click(function() {

    $(this).parent().animate({
        left: '-50%'
    }, 500, function() {
        $(this).css('left', '150%');
        $(this).appendTo('#header-slider');
    });

    $(this).parent().next().animate({
        left: '50%'
    }, 500);
});
*/
function runSlider() {
	if (counter >= 3) {
		firstImageId = "galleryImage" + (counter - 2);
	} else {
		firstImageId = "galleryImage" + (numberOfImages + counter - 2);
	}
	firstImage = document.getElementById(firstImageId);
	firstImageWidth = firstImage.clientWidth;
	setWidth = setWidth - firstImageWidth;
	$(firstImage).parent().removeClass("visible").addClass("invisible").css("display","none");
	if (counter < numberOfImages) {
		nextImageID = "galleryImage" + (counter + 1);
	} else {
		nextImageID = "galleryImage1";
		counter = 0; 
	}
	nextImage = document.getElementById(nextImageID); 
//	$("#" + nextImageID).parent().css("display","block");
	nextImageWidth = nextImage.clientWidth;
//	$("#" + nextImageID).parent().css("display","none");
	console.log(nextImageWidth);
	setWidth = setWidth + nextImageWidth;
//	if (setWidth < 1000) {
		$("#" + nextImageID).parent().removeClass("invisible").addClass("visible").css("display","block");
//	}

	counter ++;
//	}
}
//		slideAmount = "-" + firstImage.clientWidth + "px";
//		$(firstImage).addClass("test").animate({left: slideAmount}, 500);
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
