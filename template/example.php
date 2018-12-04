<?php
/* Template Name: Example */ 
get_header();
?>
<script>
function dashboardInit() {
	$('#dashboard').show();
	$('#loading').hide();
	$('.loading--example').html("<h1 class="step-title">You're Good to Go</h1>");
}

</script>
<h1 class="step-title">Explanation </h1>
<div class="tutorial-grid">
	<div class='instructions-wrap'>
		<span id="instructions">
		<!-- Options here -->
			<div class="image-instructions">Here's an example instruction: click Next to move on</div>
			<div class="image-instructions">Here's an example instruction: click Hint for a hint, then click next</div>
			<div class="image-instructions">
				<form method="post" action="<?php echo get_site_url() . '/step1'; ?>">
					<h2>Proceed to Step 1</h2>
					<button class="button" type="submit" value="click" name="submit">Continue to Step 1</button>
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
					<span>The Next button looks like this. Click anywhere to close Hint, and then click Next to move on</span>	
					<div class="next-button--example right next-button"><span class="next-text">Next</span></div>
				</div>
				<div class="image-url">	
					<span>Sometimes BYU domains has trouble loading, refresh the page if the loading icon doesn't go away</span>	
					<div class="loading--example" style="background-image: url(<?php echo get_attachment_url_by_slug('loading'); ?>)"></div>
				</div>
		</div>
	</div>
	<div id="loading" style="background-image: url(<?php echo get_attachment_url_by_slug('loading'); ?>)"></div>
	<iframe onload="dashboardInit()" id="dashboard" src="https://domains.byu.edu/dashboard/#domains-header"></iframe>
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