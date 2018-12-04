<?php
/* Template Name: Step1 */ 
get_header();
?>
<h1 class="step-title">Step 1: Login to BYU CAS </h1>
<div class="tutorial-grid">
	<div class='instructions-wrap'>
		<span id="instructions">
		<!-- Options here -->
			<div class="image-instructions">Login to BYU CAS
				<a href="https://cas.byu.edu/cas/login" target="_blank"><span class="button">Open Login page</span></a>
			</div>
			<div class="image-instructions">
				<form method="post" action="<?php echo get_site_url() . '/step2'; ?>">
					<h2>Proceed to Step 2</h2>
					<button class="button" type="submit" value="click" name="submit">Continue to Step 2</button>
				</form>
			</div>
		<!-- End Options here -->
		</span>
		<div id="left" class="left next-button"><span class="next-text">Back</span></div>
		<div id="right" class="right next-button"><span class="next-text">Next</span></div>
	</div>
	<span class="grid-title"><span class="hint">Hint?</span></span>
	<div class="image-wrap">
		<div id="tutorial">
				<div class="image-url">	
					<span>Once the page looks like the image below, go ahead and close the login page and hit next</span>	
					<div class="image--example" style="background-image: url('<?php echo get_attachment_url_by_slug('step1-1'); ?>');"></div>
				</div>
		</div>
	</div>
</div>
<script>
let imageIndex = 0;
let tutorialImageDiv = $('#tutorial');
let tutorialInstructions = $('.image-instructions');
let images = $('.image-url');
let wrap = $('.image-wrap');
let hint = $('.hint');
$('#dashboard').hide();
$('.left').hide();
wrap.hide();
updateImage();
function updateImage() {
		tutorialInstructions.hide();
		$(tutorialInstructions[imageIndex]).show();
		if (imageIndex == images.length) {
			hint.hide();
		}
		else {
			hint.show();
			images.hide();
			$(images[imageIndex]).show();
		}
}

$('#right').click( function() {
	imageIndex++;
	if (imageIndex == images.length) {
		$('#right').hide();
	}
	$('#left').show();
	updateImage();
});
$('#left').click( function() {
	imageIndex--;
	if (imageIndex == 0) {
		$('#left').hide();
	}
	$('#right').show();
	updateImage();
});
hint.click(function () {
	wrap.show();
});
wrap.click( function () {
	wrap.hide();
});
</script>
<?php get_footer();