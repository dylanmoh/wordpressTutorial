<?php
/* Template Name: Step1Old */ 
get_header();
?>
<h1>Step 1</h1>
<h2>Login to BYU CAS</h2>
<a href="https://cas.byu.edu/cas/login" target="_blank">Open Login page</a>
<h2>Once logged in, continue to step 2</h2>
<a href="<?php echo get_site_url() . '/step2'; ?>">Continue to Step 2</a>
<?php get_footer();