<?php
/* Template Name: install */ 
get_header();
?>
<script>
function dashboardInit() {
	$('#dashboard').show();
	$('#loading').hide();
}

</script>
<h1 class="step-title">Installing Wordpress</h1>
<div class="tutorial-grid">
	<div class='instructions-wrap'>
		<span id="instructions">
		<!-- Options here -->
			<div class="image-instructions">
				<div>Click "Wordpress" under the Applications section</div>
			</div>
			<div class="image-instructions">
				<div>Click "install this appliction"</div>
			</div>
			<div class="image-instructions">
				<div>Scroll down to the bottom</div>
			</div>
			<div class="image-instructions">
				<div>Click install</div>
			</div>
			<div class="image-instructions">
				<div>Wait for the install to finish</div>
			</div>
			<div class="image-instructions">
				<form class="link-form" method="post" action="<?php echo get_permalink(); ?>" onsubmit="return newSite()" target="_blank">
					<div>Enter your domain name</div>
					<div style="margin-bottom: 10px;"><input name="domain" placeholder="example"></div>
					<button class="button" type="submit" value="click" name="submit">Continue to your site</button>
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
					<div class='help-box help--install-1'><div class="help-text">Click here</div></div>
				</div>
				<div class="image-url">	
					<div class='help-box help--install-2'><div class="help-text">Click here</div></div>
				</div>
				<div class="image-url">	
					<div class='help-box help--install-4'><div class="help-text">After you've scrolled down, Click Next</div></div>
					<div class='help-box help--install-3'><div class="help-text">Make sure to hover over this area before you scroll down</div></div>
				</div>
				<div class="image-url">	
					<div class='help-box help--install-5'><div class="help-text">Click here</div></div>
				</div>
				<div class="image-url">	
					<div class='help-box help--install-4'><div class="help-text">After the install is complete, Click Next</div></div>
					<div class='help-box help--install-6'><div class="help-text">Wait for this bar to reach 100%<img class="install-image" src="<?php echo get_attachment_url_by_slug('step4-5'); ?>"></div></div>
				</div>
		</div>
	</div>
	<div id="loading" style="background-image: url(<?php echo get_attachment_url_by_slug('loading'); ?>)"></div>
	<div class="iframe-wrap"><div class="float-click"></div><iframe onload="dashboardInit()" id="dashboard" src="https://domains.byu.edu/dashboard/#domains-header"></iframe></div>
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

var myConfObj = {
  iframeMouseOver : false
}
window.addEventListener('blur',function(){
  if(myConfObj.iframeMouseOver){
  	console.log("CLICK")
  	wrap.hide();
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
		if (imageIndex == 6 || imageIndex == 7) {
		}
		else {
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
$('.step-title').click( function () {
	wrap.hide();
});
$('.instructions-wrap').click( function () {
	wrap.hide();
});
$('#loading').click( function () {
	wrap.hide();
});
function newSite() {
	$('.link-form')[0].action = ('http://' + $('input')[0].value + '.com/blog/');
}
</script>
<?php get_footer();