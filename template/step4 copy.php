<?php
/* Template Name: StepOld */ 
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
<h1 class="step-title">Create a new domain</h1>
<div class="tutorial-images">
	<p class="image-instructions">CLICK "Wordpress" under Applications</p>
	<p class="image-url"><?php echo get_attachment_url_by_slug('step4-1'); ?></p>
	<p class="image-instructions">CLICK "Install this application"</p>
	<p class="image-url"><?php echo get_attachment_url_by_slug('step4-2'); ?></p>
	<p class="image-instructions">INPUT "<?php echo $userinfo['admin']; ?>" under Administrator Username. And INPUT "<?php echo $userinfo['password']; ?>" under Administrator Password.</p>
	<p class="image-url"><?php echo get_attachment_url_by_slug('step4-3'); ?></p>
	<p class="image-instructions">SCROLL to the bottom and CLICK install</p>
	<p class="image-url"><?php echo get_attachment_url_by_slug('step4-4'); ?></p>
	<p class="image-instructions">Once the install reaches 100%, click Next</p>
	<p class="image-url"><?php echo get_attachment_url_by_slug('step4-5'); ?></p>
</div>
<div class="tutorial-grid">
	<div class='instructions-wrap'><span id="instructions"></span><div class="left next-button"><span class="next-text">Back</span></div><div class="right next-button"><span class="next-text">Next</span></div></div>
	<span class="grid-title">Tutorial</span>
	<span class="grid-title">BYU Domains</span>
	<div>
		<div id="tutorial"></div>
		<form method="post" action="<?php echo 'https://' . $userinfo['domain'] . '.com/blog'; ?>">
			<h2>You're Done! Proceed to your new site!</h2>
			<button class="button" type="submit" value="click" name="submit">Continue to your site</button>
		</form>
	</div>
	<div id="loading" style="background-image: url(<?php echo get_attachment_url_by_slug('loading'); ?>)"></div>
	<iframe onload="dashboardInit()" id="dashboard" src="https://domains.byu.edu/dashboard/#domains-header"></iframe>
</div>
<script>
let imageIndex = 0;
let tutorial = $('#tutorial');
let tutorialInstructions = $('#instructions');
let form = $('.tutorial-grid form');
let instructions = $('.tutorial-images').find('.image-instructions');
let images = $('.tutorial-images').find('.image-url');
$('#dashboard').hide();
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