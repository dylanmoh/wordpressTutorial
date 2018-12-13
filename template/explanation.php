<?php
/* Template Name: explanation */ 
get_header();
?>
<h1 class="step-title">Explaination</h1>
<div class="tutorial-grid">
	<div class='instructions-wrap'>
		<span id="instructions">
		<!-- Options here -->
				<div class="image-instructions"><div>This is where you'll find instructions</div><div>Click the arrow on the right to receive the next instruction</div></div>
				<div class="image-instructions"><div>Below the Help button is a portal to BYU Domains</div><div>These instructions will tell you how to navigate BYU Domains</div></div>
				<div class="image-instructions"><div>BYU domains sometimes has trouble loading</div><div>If the portal endlessly loads, refresh the page</div></div>
				<div class="image-instructions">
					<form method="post" action="<?php echo get_site_url() . '/input'; ?>">
						<div>Now that you understand how the site works</div>
						<button class="button" type="submit" value="click" name="submit">Let's get started</button>
					</form>
				</div>
		<!-- End Options here -->
		</span>
		<div id="left" class="left next-button"><span class="next-text"><</span></div>
		<div id="right" class="right next-button"><span class="next-text">></span></div>
	</div>
	<span class="grid-title"><span class="hint">Help</span></span>
	<div class="image-wrap">
		<div id="tutorial">
				<div class="image-url">	
					<div class='help-box help--explanation-1'><div class="help-text">Here is the Next button</div></div>
				</div>
				<div class="image-url">	
					<div class='help-box help--explanation-1'><div class="help-text">Click Next when ready</div></div>
					<div class='help-box help--explanation-2'><div class="help-text">Here is where the portal will be</div></div>
				</div>
				<div class="image-url">	
					<div class='help-box help--explanation-1'><div class="help-text">Click Next when ready</div></div>
				</div>
		</div>
	</div>
	<div id="loading" style="position: relative; background-image: url(<?php echo get_attachment_url_by_slug('explain1-1'); ?>); background-size: cover;"><div class="explain1-1">This is just an image of what it might look like if loaded correctly</div></div>
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

$('#secondForm').click(function(e) {
	$('.collect-form')[0].action = 'http://wordpresstutorial.courtneypoulsen.com/blog/install/';
})

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
$('.step-title').click( function () {
	wrap.hide();
});
$('.instructions-wrap').click( function () {
	wrap.hide();
});
$('.explain1-1').click( function () {
	wrap.hide();
});
</script>
<?php get_footer();