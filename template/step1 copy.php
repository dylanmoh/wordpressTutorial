<?php
/* Template Name: Step1old */ 
get_header();
?>
<script>

</script>
<h1 class="step-title">Login to BYU CAS</h1>
<div class="tutorial-images">
	<p class="image-instructions">Login to BYU CAS. Once the page looks like the image on the left, go ahead and close the login page and hit next</p>
	<p class="image-url"><?php echo get_attachment_url_by_slug('step1-1'); ?></p>
</div>
<div class="tutorial-grid">
	<div class='instructions-wrap'><span id="instructions"></span><div class="left next-button"><span class="next-text">Back</span></div><div class="right next-button"><span class="next-text">Next</span></div></div>
	<span class="grid-title">Tutorial</span>
	<span class="grid-title">BYU Domains</span>
	<div>
		<div id="tutorial"></div>
		<form method="post" action="<?php echo get_site_url() . '/step2'; ?>">
			<h2>Proceed to Step 2</h2>
			<button class="button" type="submit" value="click" name="submit">Continue to Step 2</button>
		</form>
	</div>
	<div id="dashboard"><a href="https://cas.byu.edu/cas/login" target="_blank"><span class="button">Open Login page</span></a></div>
</div>
<script>
let imageIndex = 0;
let tutorial = $('#tutorial');
let tutorialInstructions = $('#instructions');
let form = $('.tutorial-grid form');
let instructions = $('.tutorial-images').find('.image-instructions');
let images = $('.tutorial-images').find('.image-url');
$('.left').hide();
updateImage();
function updateImage() {
	if ( imageIndex >= images.length ) {
		tutorial.hide();
		form.show();
		tutorialInstructions.html("Proceed to next step");
	}
	else {
		tutorial.show();
		tutorialInstructions.show();
		form.hide();
		tutorial.css("background-image", "url(" + images[imageIndex].innerText + ")");
		tutorialInstructions.html(instructions[imageIndex].innerText);
	}
	
}

$('.right').click( function() {
	imageIndex++;
	if (imageIndex == images.length) {
		$('.right').hide();
	}
	$('.left').show();
	updateImage();
});
$('.left').click( function() {
	imageIndex--;
	if (imageIndex == 0) {
		$('.left').hide();
	}
	$('.right').show();
	updateImage();
});
</script>
<?php get_footer();
