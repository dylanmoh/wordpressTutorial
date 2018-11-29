<?php
/* Template Name: Step3old */ 
get_header();
$userinfo = array(
	'domain' => $_POST['domain'],
	'website' => $_POST['website'],
	'admin' => $_POST['username'],
	'password' => $_POST['password'],
	'email' => $_POST['email']
);
//var_dump($userinfo);
?>
<script>
function dashboardInit() {
	let iframe = $('#dashboard');
	console.log(iframe);
	iframe.click( function () {
		console.log(iframe);
	});
}

</script>
<h1>Step 4</h1>
<h2>Install Wordpress</h2>
<div class="tutorial-images">
	<p class="image-instructions">INPUT "<?php echo $userinfo['domain']; ?>" into the textbox and CLICK check availability. If requested domain is available, CLICK continue.</p>
	<p class="image-url"><?php echo get_attachment_url_by_slug('step3-1'); ?></p>
	<p class="image-instructions">REVIEW the information and CLICK on "Register Now"</p>
	<p class="image-url"><?php echo get_attachment_url_by_slug('step3-2'); ?></p>
</div>
<div class="tutorial-grid">
	<span class="grid-title">Tutorial</span>
	<span class="grid-title">BYU Domains</span>
	<div>
		<span id="instructions"></span>
		<div id="tutorial"><div class="next-button">Next Instruction</div></div>
		<form method="post" action="<?php echo get_site_url() . '/step4'; ?>">
				<input type="hidden" name="domain" value="<?php echo $userinfo['domain'] ?>" />
				<input type="hidden" name="website" value="<?php echo $userinfo['website'] ?>" />
				<input type="hidden" name="username" value="<?php echo $userinfo['username'] ?>" />
				<input type="hidden" name="password" value="<?php echo $userinfo['password'] ?>" />
				<input type="hidden" name="email" value="<?php echo $userinfo['email'] ?>" />
			<h2>Proceed to Step 4</h2>
			<button type="submit" value="click" name="submit">Continue to Step 4</button>
		</form>
	</div>
	<iframe onload="dashboardInit()" id="dashboard" src="https://domains.byu.edu/dashboard/#domains-header"></iframe>
</div>

<script>
let imageIndex = 0;
let tutorial = $('#tutorial');
let tutorialInstructions = $('#instructions');
let form = $('.tutorial-grid form');
let instructions = $('.tutorial-images').find('.image-instructions');
let images = $('.tutorial-images').find('.image-url');
updateImage();
function updateImage() {
	if ( imageIndex >= images.length ) {
		tutorial.hide();
		tutorialInstructions.hide();
		form.show();
		tutorialInstructions.html("");
	}
	else {
		tutorial.show();
		tutorialInstructions.show();
		form.hide();
		tutorial.css("background-image", "url(" + images[imageIndex].innerText + ")");
		tutorialInstructions.html(instructions[imageIndex].innerText);
	}
	
}

$('.next-button').click( function() {
	imageIndex++;
	updateImage();
});
</script>
<?php get_footer();