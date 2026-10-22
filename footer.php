<!-- footer starts here -->
<footer class="footer">
	<div class="footer-top py-5">
		<div class="container">
			<div class="row">
<!-- 				single col -->
				<div class="col-md-3 col-sm-6 my-3 my-md-0">
					<div class="footer-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" class="img-fluid" style="width:220px;"/>
						
					</div>
					<div class="footer-para mt-4">
						<p class="text-white">
							Based in Christchurch, OldsCool Mettle Company Limited is a combination of traditional craftsmanship and modern innovation to provide trusted welding, custom fabrication, and reliable metal works.
						</p>
						
					</div>
					
				</div>
				<!-- end of single col -->
				
<!-- single col -->
				<div class="col-md-2 col-sm-6 my-3 my-md-0 ps-md-5">
					<h3 class="pb-0 mb-0">
						useful links
					</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fooer-heading-line.png" class="img-fluid"/>
			<?php wp_nav_menu( array( 
			'theme_location' => 'footer-menu-one',
			'container'       => '',                
			'menu_id'         => '',
			'menu_class'      => 'footer-links', 
			'echo'            => true,
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			) ); 
		?>
					
				</div>
				
<!-- end of single col -->	
				
				
				<!-- single col -->
				<div class="col-md-3 col-sm-6 my-3 my-md-0 ps-md-5">
					<h3 class="pb-0 mb-0">
						services
					</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fooer-heading-line.png" class="img-fluid"/>
			<?php wp_nav_menu( array( 
			'theme_location' => 'footer-menu-two',
			'container'       => '',                
			'menu_id'         => '',
			'menu_class'      => 'footer-links', 
			'echo'            => true,
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			) ); 
		?>
					
				</div>
				
<!-- end of single col -->
				
								<!-- single col -->
				<div class="col-md-4 col-sm-6 my-3 my-md-0 ps-md-5">
					<h3 class="pb-0 mb-0">
						contact info
					</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fooer-heading-line.png" class="img-fluid"/>

<!-- 					<div class="footer-contacts d-flex">
						<div class="footer-contacts-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m12 20.9l4.95-4.95a7 7 0 1 0-9.9 0zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4a2 2 0 0 0 0 4m0 2a4 4 0 1 1 0-8a4 4 0 0 1 0 8"/></svg>
						</div>
						<div class="ms-2">
							<a href="">49 Grenville Street, Waltham, Christchurch, Canterbury, 8011</a>
						</div>
					</div> -->
					
						<div class="footer-contacts d-flex">
						<div class="footer-contacts-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="64" stroke-dashoffset="64" d="M8 3c0.5 0 2.5 4.5 2.5 5c0 1 -1.5 2 -2 3c-0.5 1 0.5 2 1.5 3c0.39 0.39 2 2 3 1.5c1 -0.5 2 -2 3 -2c0.5 0 5 2 5 2.5c0 2 -1.5 3.5 -3 4c-1.5 0.5 -2.5 0.5 -4.5 0c-2 -0.5 -3.5 -1 -6 -3.5c-2.5 -2.5 -3 -4 -3.5 -6c-0.5 -2 -0.5 -3 0 -4.5c0.5 -1.5 2 -3 4 -3Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></path><path stroke-dasharray="4" stroke-dashoffset="4" d="M15.76 8.28c-0.5 -0.51 -1.1 -0.93 -1.76 -1.24M15.76 8.28c0.49 0.49 0.9 1.08 1.2 1.72"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.3s" values="4;0"/></path><path stroke-dasharray="6" stroke-dashoffset="6" d="M18.67 5.35c-1 -1 -2.26 -1.73 -3.67 -2.1M18.67 5.35c0.99 1 1.72 2.25 2.08 3.65"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.9s" dur="0.3s" values="6;0"/></path></g></svg>
						</div>
						<div class="ms-2">
							<a href="tel:204523655">204523655</a>
						</div>
					</div>
					
					
							<div class="footer-contacts d-flex">
						<div class="footer-contacts-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><path fill="currentColor" d="M400 163.2V68a20.023 20.023 0 0 0-20-20H132a20.023 20.023 0 0 0-20 20v95.2l-96 68.566V496h480V231.766Zm53.679 77.667L400 275.96v-73.44ZM144 80h224v216.883l-57.166 37.378l-46.578-24.152l-50.764 24.507L144 292.425Zm119.744 265.89L464 449.727V464H48v-13.957ZM48 271.575L179.144 351.2L48 414.509Zm295.446 79.6L464 272.347v141.334ZM112 202.52V273l-53.334-32.385Z"/></svg>
						</div>
						<div class="ms-2">
							<a href="mailto:pourakinomark@hotmail.com">pourakinomark@hotmail.com</a>
						</div>
					</div>
					
					<ul class="footer-socials mt-4 d-flex">
						<li>
							<a href="" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><rect width="118.35" height="118.35" x="4.83" y="4.83" fill="#3d5a98" rx="6.53" ry="6.53"/><path fill="#fff" d="M86.48 123.17V77.34h15.38l2.3-17.86H86.48v-11.4c0-5.17 1.44-8.7 8.85-8.7h9.46v-16A127 127 0 0 0 91 22.7c-13.62 0-23 8.3-23 23.61v13.17H52.62v17.86H68v45.83z"/></svg>
							</a>
						</li>
							<li class="ms-3"> 
							<a href="" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
								</a>
						</li>
					</ul>
					
					
					
				</div>
				
<!-- end of single col -->
				
			</div>
			
		</div>
		
	</div>
	
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center py-3">
					<p class="pb-0 mb-0">
						OldsCool Mettle <span class="mx-1">|</span>  powered by <a href="https://webmaniacs.co.nz/" target="_blank">Web Maniacs</a>
					</p>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
</footer>
<!-- footer ends here --> 
<!-- 	  JQUERY -->
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>	  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<!-- JQUERY Migrate	   -->
<!-- 	  Fancy Box JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/fancybox.umd.js"></script>	 
<!-- Slick Slider JS	   -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>	
<!-- isoptes Js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.min.js"></script>
<!-- ImagesLoaded JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.js"></script>
<!-- Custom JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.js"></script>	
<?php wp_footer(); ?>
  </body>
</html>