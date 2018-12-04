<?php
/* Template Name: Step2 */ 
get_header();
?>
<h1 class="step-title">Step 2: Collect Information</h1>
<div class="tutorial-grid">
	<div class='instructions-wrap'>
		<span id="instructions">
		<!-- Options here -->
			<form class="collect-form" method="post" action="<?php echo get_site_url() . '/step3'; ?>" onsubmit="return validateForm()">
				<div class="image-instructions">
					<div class="info-form">
						<span>Domain Name:</span><input class="domain" type="text" name="domain" />
						<span>Admin Username:</span><input class="username" type="text" name="username" />
						<span>Admin Password:</span><input class="password" type="text" name="password" />
						<span>This is my first domain on BYU Domains:</span><input class="first radio" type="radio" name="start" value="first" checked>
						<span>I already have a domain on BYU Domains:</span><input class="skip radio" type="radio" name="start" value="skip" >
					</div>
				</div>
				<div class="image-instructions">
					<h2>Proceed to Next Step</h2>
					<button id="subForm" class="button" type="submit" value="click" name="submit" >Continue to Next Step</button>
				</div>
			</form>
		<!-- End Options here -->
		</span>
		<div id="left" class="left next-button"><span class="next-text">Back</span></div>
		<div id="right" class="right next-button"><span class="next-text">Next</span></div>
	</div>
	<span class="grid-title"><span class="hint">Hint?</span></span>
	<div class="image-wrap">
		<div id="tutorial">
				<div class="image-url">	
					<div>Domain is the name you want for your site</div>	
					<div>Username and Password will be the admin account for Wordpress</div>	
					<div>If you don't know if you already have a domain with BYU Domains, then most likely This is your first domain</div>
					<div class="image--example" style="background-image: url('<?php echo get_attachment_url_by_slug('examplelogin1-1'); ?>');"></div>
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

function validateForm() {
	let d = $('.domain')[0].value;
	let u = $('.username')[0].value;
	let p = $('.password')[0].value;
	let f = $('.first')[0].checked;
	if (d === "" || u === "" || p === "" ) {
		alert("All areas must be filled out");
		return false;
	}
	else {
		if (!f) {
			$('.collect-form')[0].action = 'http://wordpresstutorial.courtneypoulsen.com/blog/step4/';
		}
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