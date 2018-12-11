<?php
/* Template Name: input */ 
get_header();
?>
<h1 class="step-title">Collect Information</h1>
<div class="tutorial-grid">
	<div class='instructions-wrap'>
		<span id="instructions">
		<!-- Options here -->
			<form class="collect-form" method="post" action="<?php echo get_site_url() . '/register'; ?>">
				<div class="image-instructions" style="display: grid; grid-template-columns: 50% 50%;">
					<h2>If this is your first BYU domain website</h2>
					<h2>If you already have a BYU domain</h2>
					<button style="width: fit-content; margin: auto;" id="subForm" class="button" type="submit" value="click" name="submit" >Create Domain</button>
					<button style="width: fit-content; margin: auto;" id="secondForm" class="button" type="submit" value="click" name="submit" >Install Wordpress</button>
				</div>
			</form>
		<!-- End Options here -->
		</span>
		<div id="left" style="width: 13%;" class="left next-button"><span class="next-text">Back</span></div>
		<div id="right" class="right next-button"><span class="next-text">Next</span></div>
	</div>
	<span class="grid-title"><span class="hint">Hint?</span></span>
	<div class="image-wrap">
		<div id="tutorial">
				<div class="image-url">	
					<div>If you are unsure which option to choose, then this is most likely your first domain. Please create a domain</div>
					<div class="image--example" style="background-image: url('<?php echo get_attachment_url_by_slug('step2-2'); ?>');"></div>
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
$(".right").hide();
function updateImage() {
		tutorialInstructions.hide();
		$(tutorialInstructions[imageIndex]).show();
		if (imageIndex == images.length + 1) {
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

// $('#right').click( function() {
// 	if (validateForm()) {
// 		imageIndex++;
// 		if (imageIndex == images.length) {
// 			$('#right').hide();
// 		}
// 		$('#left').show();
// 		updateImage();
// 	}
// });
// $('#left').click( function() {
// 	imageIndex--;
// 	if (imageIndex == 0) {
// 		$('#left').hide();
// 	}
// 	$('#right').show();
// 	updateImage();
// });
hint.click(function () {
	wrap.show();
});
wrap.click( function () {
	wrap.hide();
});
</script>
<?php get_footer();