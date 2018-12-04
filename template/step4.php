<?php
/* Template Name: Step4 */ 
get_header();
$userinfo = array(
	'domain' => $_POST['domain'],
	'admin' => $_POST['username'],
	'password' => $_POST['password'],
);
?>
<script>
function dashboardInit() {
	$('#dashboard').show();
	$('#loading').hide();
}

</script>
<h1 class="step-title">Step 4: Install Wordpress</h1>
<div class="tutorial-grid">
	<div class='instructions-wrap'>
		<span id="instructions">
		<!-- Options here -->
			<div class="image-instructions">CLICK "Wordpress" under Applications</div>
			<div class="image-instructions">CLICK "Install this application"</div>
			<div class="image-instructions">
				<div>INPUT "<?php echo $userinfo['admin']; ?>" under Administrator Username.</div>
				<div>INPUT "<?php echo $userinfo['password']; ?>" under Administrator Password.</div>
			</div>
			<div class="image-instructions">SCROLL to the bottom and CLICK install</div>
			<div class="image-instructions">Wait for the install to reach 100%</div>
			<div class="image-instructions">
				<form method="post" action="<?php echo 'https://' . $userinfo['domain'] . '.com/blog'; ?>">
					<h2>You're Done! Proceed to your new site!</h2>
					<button class="button" type="submit" value="click" name="submit">Continue to your site</button>
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
					<span>Look for the Applications area, and Wordpress will be the first item listed</span>
					<div class="image--example" style="background-image: url('<?php echo get_attachment_url_by_slug('step4-1'); ?>');"></div>
				</div>
				<div class="image-url">	
					<div class="image--example" style="background-image: url('<?php echo get_attachment_url_by_slug('step4-2'); ?>');"></div>
				</div>
				<div class="image-url">	
					<span>Under the settings area, there will be 2 text boxes to input username and password</span>
					<div class="image--example" style="background-image: url('<?php echo get_attachment_url_by_slug('step4-3'); ?>');"></div>
				</div>
				<div class="image-url">	
					<div class="image--example" style="background-image: url('<?php echo get_attachment_url_by_slug('step4-4'); ?>');"></div>
				</div>
				<div class="image-url">	
					<span>Wait for this to reach 100%</span>
					<div class="image--example" style="background-image: url('<?php echo get_attachment_url_by_slug('step4-5'); ?>');"></div>
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