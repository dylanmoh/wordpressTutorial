<?php
/* Template Name: Step3 */ 
get_header();
$userinfo = array(
	'domain' => $_POST['domain'],
	'website' => $_POST['website'],
	'admin' => $_POST['username'],
	'password' => $_POST['password'],
	'email' => $_POST['email']
);
?>
<script>
function dashboardInit() {
	$('#dashboard').show();
	$('#loading').hide();
}

</script>
<h1>Create a new domain</h1>
<div class="tutorial-images">
	<p class="image-instructions">INPUT "<?php echo $userinfo['domain']; ?>" into the textbox and CLICK check availability. If requested domain is available, CLICK continue.</p>
	<p class="image-url"><?php echo get_attachment_url_by_slug('step3-1'); ?></p>
	<p class="image-instructions">REVIEW the information and CLICK on "Register Now"</p>
	<p class="image-url"><?php echo get_attachment_url_by_slug('step3-2'); ?></p>
	<p class="image-instructions">A verification email may be sent to you. Verify your account then click NEXT.</p>
	<p class="image-url"><?php echo get_attachment_url_by_slug('step3-3'); ?></p>
</div>
<div class="tutorial-grid">
	<div class='instructions-wrap'><span id="instructions"></span><div class="left next-button"><span class="next-text">Back</span></div><div class="right next-button"><span class="next-text">Next</span></div></div>
	<span class="grid-title">Tutorial</span>
	<span class="grid-title">BYU Domains</span>
	<div>
		<div id="tutorial"></div>
		<form method="post" action="<?php echo get_site_url() . '/step4'; ?>">
				<input type="hidden" name="domain" value="<?php echo $userinfo['domain'] ?>" />
				<input type="hidden" name="username" value="<?php echo $userinfo['admin'] ?>" />
				<input type="hidden" name="password" value="<?php echo $userinfo['password'] ?>" />
			<h2>Proceed to Step 4</h2>
			<button type="submit" value="click" name="submit">Continue to Step 4</button>
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