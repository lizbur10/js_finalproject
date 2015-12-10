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
//	$("#header-slider div").css("display", "none");
	$("#header-slider").find("div:first").addClass("current").next().addClass("next");
	var numberOfImages = $("#header-slider div").length,
		counter = 1;
	window.setInterval(runSlider, 3000);

	function runSlider() {
//		$(".previous").removeClass("previous");
		if (counter < numberOfImages) {
			$(".current").css("display","block").next().addClass("next").css("display","block");
			$(".current").slideUp(1500, function() {
				$(".current").removeClass("current");
				$(".next").removeClass("next").addClass("current");
				counter++;
			});
/*			$(".next").addClass("current").removeClass("next");
			counter++;
*/		} else {
			$("#header-slider div:first").css("display","block");
			$(".current").slideUp(1500, function() {
				$(".current").removeClass("current");
				$("#header-slider div:first").addClass("current");
				counter=1;
			});
		}
	}
</script> 

</body>
</html>
