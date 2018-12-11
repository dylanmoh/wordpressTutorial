<?php
/* Template Name: register */ 
get_header();
?>
<script>
function dashboardInit() {
	$('#dashboard').show();
	$('#loading').hide();
	updateIframe();
}

</script>
<h1 class="step-title">Creating a New Domain</h1>
<div class="tutorial-grid">
	<div class='instructions-wrap'>
		<span id="instructions">
		<!-- Options here -->
			<div class="image-instructions">
				<div>INPUT your desired domain name into the textbox and CLICK check availability.</div>
				<div>If the requested domain is available, CLICK continue.</div>
			</div>
			<div class="image-instructions">REVIEW the information and CLICK on "Register Now"</div>

			<div class="image-instructions">CLICK "Wordpress" under Applications</div>
			<div class="image-instructions">CLICK "Install this application"</div>
			<div class="image-instructions">
				<div>SCROLL down until you reach Settings</div>
				<div>INPUT a username under Administrator Username.</div>
				<div>INPUT a password under Administrator Password.</div>
			</div>
			<div class="image-instructions">SCROLL to the bottom and CLICK install</div>
			<div class="image-instructions">Wait for the install to reach 100%</div>
			<div class="image-instructions">
				<form method="post" action="<?php echo 'https://courtneypoulsen.com/blog'; ?>">
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
					<span>Enter as shown, then click check availability</span>
					<div class="image--example" style="background-image: url('<?php echo get_attachment_url_by_slug('step3-1'); ?>');"></div>
				</div>
				<div class="image-url">	
					<span>Scroll to the bottom and click on the Green Register Now button</span>
					<div class="image--example" style="background-image: url('<?php echo get_attachment_url_by_slug('step3-2'); ?>');"></div>
				</div>
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
	<div class="iframe-wrap"><div class="float-click"></div><iframe onload="dashboardInit()" id="dashboard" src="https://domains.byu.edu/dashboard/#domains-header" scrolling="no"></iframe></div>
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

let floatClick = $('.float-click');
let slide = ['125', '125', '230', '350', '350', '350', '450'];
let floatw = ['0px', '0px', '135px', '207px', '0px', '0px', '0px'];
let floath = ['0px', '0px', '47px', '43px', '0px', '0px', '0px'];
let floatl = ['0px', '0px', '80px', 'calc(100% - 250px)', '0px', '0px', '0px'];
let floatt = ['0px', '0px', '60px', '20px', '0px', '0px', '0px'];

var myConfObj = {
  iframeMouseOver : false
}
window.addEventListener('blur',function(){
  if(myConfObj.iframeMouseOver){
  	console.log("CLICK")
  	floatClick.hide();
  }
});

document.getElementById('dashboard').addEventListener('mouseover',function(){
   myConfObj.iframeMouseOver = true;
});
document.getElementById('dashboard').addEventListener('mouseout',function(){
    myConfObj.iframeMouseOver = false;
});

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

function updateIframe() {
	$('#dashboard').css('margin-top','-' + slide[imageIndex] + 'px');
	$('.float-click').css('margin-top', floatt[imageIndex]);
	$('.float-click').css('margin-left', floatl[imageIndex]);
	$('.float-click').css('width', floatw[imageIndex]);
	$('.float-click').css('height', floath[imageIndex]);
	floatClick.show();
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