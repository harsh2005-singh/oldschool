<?php
get_header();
?>

<!-- error page starts here -->
<section class="error-page py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/error.gif" class="img-fluid" style="height: 350px; width:100%; object-fit:contain;">
				
				<div class="mt-3">
					     <a href="<?php echo site_url(); ?>" class="primary-btn-1 btn-hover animated" data-animation-in="fadeInUp">   Back To Home  
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"/></svg>
                            <span style="top: 44.1562px; left: -12.3281px"></span>
                        </a>
				</div>
				
			</div>
			
		</div>
		
	</div>
</section>
<!-- error page ends here -->
<?php
get_footer();
?>