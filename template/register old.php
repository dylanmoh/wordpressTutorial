<?php
/* Template Name: registerold */ 
get_header();
?>
<script>
function dashboardInit() {
	$('#dashboard').show();
	$('#loading').hide();
	updateIframe();
}

</script>
<h1 class="step-title">Step 3: Create a new domain</h1>
<div class="tutorial-grid">
	<div class='instructions-wrap'>
		<span id="instructions">
		<!-- Options here -->
			<div class="image-instructions">
				<div>INPUT "domain name" into the textbox and CLICK check availability.</div>
				<div>If the requested domain is available, CLICK continue.</div>
			</div>
			<div class="image-instructions">REVIEW the information and CLICK on "Register Now"</div>
			<div class="image-instructions">
				<form method="post" action="<?php echo get_site_url() . '/step4'; ?>">
					<input type="hidden" name="domain" value="<?php echo $userinfo['domain'] ?>" />
					<input type="hidden" name="username" value="<?php echo $userinfo['admin'] ?>" />
					<input type="hidden" name="password" value="<?php echo $userinfo['password'] ?>" />
					<h2>Proceed to Step 4</h2>
					<button class="button" type="submit" value="click" name="submit">Continue to Step 4</button>
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
					<span>Enter as shown, then click check availability</span>
					<div class="domainoptions">
						<div class="option optionselected">
							<label><input type="radio" name="domainoption" value="register" id="selregister" checked="checked">Register a new domain</label>
							<div class="domainreginput" id="domainregister" style="display: flex;">
							www. <input type="text" id="registersld" size="30" value="<?php echo $userinfo['domain']; ?>"> 
							<select id="registertld">
								<option>.com</option>
							</select>
							&nbsp; 
							<input type="submit" value="Check Availability" class="btn btn-primary">
							</div>
							</div>
							<div class="option">
							<label><input type="radio" name="domainoption" value="owndomain" id="selowndomain">I will use my existing domain and update my nameservers</label>
							<div class="domainreginput" id="domainowndomain" style="display: none;">
							www. <input type="text" id="owndomainsld" size="30" value=""> . <input type="text" id="owndomaintld" size="5" value="">&nbsp; <input type="submit" value="Click to Continue >>" class="btn btn-primary">
							</div>
						</div>
					</div>
				</div>
				<div class="image-url">	
					<span>Scroll to the bottom and click on the Green Register Now button</span>
					<div class="image--example" style="background-image: url('<?php echo get_attachment_url_by_slug('step3-2'); ?>');"></div>
				</div>
		</div>
	</div>
	<div id="loading" style="background-image: url(<?php echo get_attachment_url_by_slug('loading'); ?>)"></div>
	<div class="iframe-wrap"><iframe onload="dashboardInit()" id="dashboard" src="https://domains.byu.edu/dashboard/#domains-header"></iframe></div>
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
	updateIframe();
});
$('#left').click( function() {
	imageIndex--;
	if (imageIndex == 0) {
		$('#left').hide();
	}
	$('#right').show();
	updateImage();
	updateIframe();
});
hint.click(function () {
	wrap.show();
});
wrap.click( function () {
	wrap.hide();
});
</script>
<?php get_footer();