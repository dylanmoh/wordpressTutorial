<?php
/* Template Name: explanation */ 
get_header();
?>
<h1 class="step-title">Explaination</h1>
<div class="tutorial-grid">
	<div class='instructions-wrap'>
		<span id="instructions">
		<!-- Options here -->
				<div class="image-instructions"><div>This is where instructions will be provided</div><div>Clicking next will show the Next instruction</div></div>
				<div class="image-instructions">This site provides instructions, but you will interact with another site (BYU Domains) below</div>
				<div class="image-instructions">
					<form method="post" action="<?php echo get_site_url() . '/input'; ?>">
						<h2>This site allows you to create a new domain with BYU Domains</h2>
						<h2>Once you have a domain, this site will then instruct you on how to install wordpress</h2>
						<button class="button" type="submit" value="click" name="submit">Continue</button>
					</form>
				</div>
		<!-- End Options here -->
		</span>
		<div id="left" style="width: 13%;" class="left next-button"><span class="next-text">Back</span></div>
		<div id="right" class="right next-button"><span class="next-text">Next</span></div>
	</div>
	<span class="grid-title"><span class="hint">Hint?</span></span>
	<div class="image-wrap">
		<div id="tutorial">
				<div class="image-url">	
					<span>The Next button looks like this.</span>
					<div>Click anywhere to close Hint Box, and then click Next to move on</div>	
					<div class="next-button--example right next-button"><span class="next-text">Next</span></div>
				</div>
				<div class="image-url">	
					<span>Sometimes BYU domains has trouble loading</span>
					<div>Refresh the page if the loading icon doesn't go away</div>
					<div>Below is what the icon looks like</div>
					<div class="loading--example" style="background-image: url(<?php echo get_attachment_url_by_slug('loading'); ?>)"></div>
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
		if (imageIndex == 1) {
			$('#loading').show();
		}
		else {
			$('#loading').hide();
		}
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
</script>
<?php get_footer();