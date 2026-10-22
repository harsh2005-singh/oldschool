<?php
// Template Name: Contact Us Page
get_header();
?>

<!-- page banner section starts here -->
<div class="page-banner d-flex align-items-center" style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(<?php echo get_the_post_thumbnail_url(); ?>); background-position: center; background-size: cover; height: 80vh;">
    <div class="container">
        <h1><?php echo the_title() ?></h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo the_title() ?></li>
            </ol>
          </nav>
    </div>
 </div>
 <!-- page banner section ends here -->
<!-- page banner ends here -->


<?php
               $contactInfos=get_posts(
                ['post_type' => 'contactInfo',
                'post_status' => 'publish',
                'posts_per_page' => '3'
            
               ]);
               foreach($contactInfos as $i)
               {
                $cid=$i->ID;
               }
              
                ?>
<!-- contact section starts here -->
<section class="contact-page-section">
	<div class="container">
		<div class="row">
					<div class="col-md-7 contact-section-form-wrapper">
				<div class="contact-section-form-details">
					<h3>
						<?php echo get_field('contact_page_right_title') ?>
					</h3>
<!-- 					<p>
						Porttitor tristique taciti letius suscipit duis elementum imperdiet aenean nisl nibh. Montes luctus scelerisque nascetur suspendisse lacus maximus ante neque blandit.
					</p> -->
				</div>
				

				<?php echo do_shortcode('[contact-form-7 id="356b7d1" title="Contact Form"]') ?>
				
				
				
			</div>
			<div class="col-md-5">
				<div class="contact-section-content" style="background: linear-gradient(rgba(8, 22, 43, 0.85),rgba(8, 22, 43, 0.85)),url(<?php echo get_field('contact_page_left_bg_img') ?>); background-position:center;background-size:cover; background-repeat:no-repeat;">
					<div class="contact-section-content-text pb-4">
						  <h5 class="sub-title text-white"><?php echo get_field('contact_page_left_sub_title') ?></h5>
                        <h2 class="section-title"><?php echo get_field('contact_page_left_title') ?></h2>
						<p class="contact-section-para">
						<?php echo get_field('contact_page_left_text') ?>
						</p>
					</div>
<!-- 					contact info -->
<!-- 					<div class="d-flex contact-section-info my-4">
						<div class="contact-section-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32">
	<rect width="32" height="32" fill="none" />
	<path fill="currentColor" d="m16 24l-6.09-8.6A8.14 8.14 0 0 1 16 2a8.08 8.08 0 0 1 8 8.13a8.2 8.2 0 0 1-1.8 5.13Zm0-20a6.07 6.07 0 0 0-6 6.13a6.2 6.2 0 0 0 1.49 4L16 20.52L20.63 14A6.24 6.24 0 0 0 22 10.13A6.07 6.07 0 0 0 16 4" />
	<circle cx="16" cy="9" r="2" fill="currentColor" />
	<path fill="currentColor" d="M28 12h-2v2h2v14H4V14h2v-2H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V14a2 2 0 0 0-2-2" />
</svg>
						</div>
						<div class="contact-section-details ms-3">
							<h3>
								Office Address
							</h3>
							<a href="<?php echo get_field('address_link', $cid) ?>" target="_blank"><?php echo get_field('address', $cid) ?></a>
						</div>
					</div> -->
					<!-- 					contact info -->
					<div class="d-flex contact-section-info my-4">
						<div class="contact-section-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 12c0-7 7-7 13-7s13 0 13 7c0 8-7-1-7-1H10s-7 9-7 1m8 2s-5 5-5 14h20c0-9-5-14-5-14z"/><circle cx="16" cy="21" r="4"/></g></svg>
						</div>
						<div class="contact-section-details ms-3">
							<h3>
								Phone
							</h3>
							<a href="tel:<?php echo get_field('phone', $cid) ?>"><?php echo get_field('phone', $cid) ?></a>
						</div>
					</div>
						<!-- 					contact info -->
					<div class="d-flex contact-section-info my-4">
						<div class="contact-section-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4"><path d="M44 24v16.818C44 42.023 43.105 43 42 43H6c-1.105 0-2-.977-2-2.182V24l20 13z"/><path stroke-linecap="round" d="m4 23.784l10-6.892m30 6.892l-10-6.892"/><path d="M34 5H14v24.415a2 2 0 0 0 .91 1.677l8 5.2a2 2 0 0 0 2.18 0l8-5.2a2 2 0 0 0 .91-1.677z"/><path stroke-linecap="round" d="M20 13h4m-4 6h8"/></g></svg>
						</div>
						<div class="contact-section-details ms-3">
							<h3>
								Email
							</h3>
							<a href="mailto:<?php echo get_field('email', $cid) ?>"><?php echo get_field('email', $cid) ?></a>
						</div>
					</div>
					
					
					
				</div>
				
			</div>
			
	
			
		</div>
		
	</div>
</section>
<!-- contact section ends here -->
<?php
get_footer();
?>	