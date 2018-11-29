<?php
/* Template Name: Step2 */ 
get_header();
?>
<h1 class="step-title">Step 2: Collect Information</h1>
<form class="collect-form" method="post" action="<?php echo get_site_url() . '/step3'; ?>">
	<h2>We'll need some info from you before we continue</h2>
	<p>Please fill out the following form</p>
	<div class="info-form">
		<span>Domain Name:</span><input type="text" name="domain" />
		<span>Admin Username:</span><input type="text" name="username" />
		<span>Admin Password:</span><input type="text" name="password" />
	</div>
	<h2>Proceed to Step 3</h2>
	<button class="button" type="submit" value="click" name="submit">Continue to Step 3</button>
</form>
<?php get_footer();