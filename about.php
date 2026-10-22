<?php
// Template Name: About Us Page
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
<!-- about section starts here	   -->
	  <section class="about py-5">
		  <div class="container">
			  <div class="row">
				  <div class="col-md-6 my-3 m-d-0">
					  <div class="about-img-wrapper h-100">
						  <img src=" <?php echo get_field('about_section_img') ?>" class="img-fluid about-img h-100"/>
						  			  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-shape.png" class="img-fluid about-shape"/>
						  
					  </div>
				  </div>
				   <div class="col-md-6 my-3 m-d-0">
					  <div class="title-box">
                        <h5 class="">  <?php echo get_field('about_section_sub_title') ?></h5>
                        <h2 class="">  <?php echo get_field('about_section_title') ?></h2>
                    </div>
					   
					   <div class="about-content mt-4">
						   <?php echo get_field('about_section_content_para') ?>
						   
					   </div>
					   
					   
					  
				  </div>
				  
			  </div>
			  
		  </div>
	  </section>
<!-- about section ends here	   -->

<!-- vision & mission section starts here	   -->
<section class="vision-mission">
	<div class="container">
		<div class="row">
			<div class="col-md-6 my-3 my-md-0 py-5 order-2 order-md-1">
				<div class="title-box">
                        <h5 class="">Vision &amp; Mission</h5>
                        <h2 class="">Reliable Metalwork from Start to Finish</h2>
                    </div>
				<div class="vision-mission-para mt-4">
					<p>
						At OldsCool Mettle, being highly experienced and skilled in welding and metalwork, we deliver reliable solutions that caters to your welding and metalwork needs throughout Christchurch. From repairs to fabrication and on-site welding and specialised aluminium work, we ensure every job is done properly.
					</p>
					
				</div>
				
				<div class="vision-mission-featured d-flex my-3 vision-mission-featured-1">
					<div class="vision-mission-featured-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m7 12.5l3 3l7-7"/><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10"/></g></svg>
					</div>
					<div class="ms-3 vision-mission-featured-text">
						<h3 class="text-white">
							Our Vision
						</h3>
						<p>
							We offer a wide variety of metalwork services, such as welding, fabrication, mobile welding, aluminium welding, sheet metal work and boat repair. From a damaged part that needs repair, to a custom metal part, to welding on site, we offer solutions tailored to the job.
						</p>
					</div>
					
				</div>
				
					<div class="vision-mission-featured d-flex my-3 highlights">
					<div class="vision-mission-featured-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m7 12.5l3 3l7-7"/><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10"/></g></svg>
					</div>
					<div class="ms-3 vision-mission-featured-text">
						<h3 class="text-white">
							Our Mission
						</h3>
						<p>
							We are committed to quality workmanship, reliability, and customer satisfaction. We adopt a simple approach to all projects, considering materials, measures, strength and finish. We aim to deliver metalwork that operates effectively, thereby making the whole service experience easy and hassle-free.
						</p>
					</div>
					
				</div>
				
				
			</div>
			<div class="col-md-6 my-3 my-md-0 order-1 order-md-2">
				<div class="vision-mission-img-wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission-vision-img.png" class="img-fluid"/>
					
				</div>
			</div>
			
		</div>
		
	</div>
</section>
<!-- vision & mission section ends here	   -->

<section class="filler-section py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="filler-section-wrapper">
<!-- 		single slide -->
					<div class="filler-section-img" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/images/faq-bg-1.webp); background-size:cover; background-position:center; background-repeat: no-repeat; height: 384px; object-fit:cover;">
						
					</div>
	<!-- 	end of single slide -->
					<!-- 		single slide -->
					<div class="filler-section-img" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/images/faq-bg-2.webp); background-size:cover; background-position:center; background-repeat: no-repeat; height: 384px; object-fit:cover;">
						
					</div>
	<!-- 	end of single slide -->
										<!-- 		single slide -->
					<div class="filler-section-img" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/images/faq-bg-3.webp); background-size:cover; background-position:center; background-repeat: no-repeat; height: 384px; object-fit:cover;">
						
					</div>
	<!-- 	end of single slide -->
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<!-- FAQ section starts here	   -->
<section class="faq py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="title-box">
                        <h5 class="">FAQS</h5>
                        <h2 class="">Answers to Your Welding &amp; Metalwork Questions</h2>
                    </div>
			</div>
			
		</div>
		
<div class="row mt-5">

    <!-- LEFT COLUMN -->
    <div class="col-md-6">

        <div class="container">
            <div class="question">
                What welding services does OldsCool Mettle offer in Christchurch?
            </div>

            <div class="answercont">
                <div class="answer">
                    OldsCool Mettle offers professional welding services in Christchurch for general welding, aluminium welding, metal repairs, custom welding, and other metalwork needs.
                </div>
            </div>
        </div>

        <div class="container">
            <div class="question">
                Do you provide mobile welding services in Christchurch?
            </div>

            <div class="answercont">
                <div class="answer">
                    Yes, OldsCool Mettle offers mobile welding services in Christchurch, so you can have welding or repair work done at your place when transporting the metalwork or equipment is impractical.
                </div>
            </div>
        </div>

        <div class="container">
            <div class="question">
                What types of metal fabrication work do you provide?
            </div>

            <div class="answercont">
                <div class="answer">
                    OldsCool Mettle offers tailored solutions for custom metal fabrication that requires accurately measured, shaped, joined, or repaired metal components for the intended use.
                </div>
            </div>
        </div>

    </div>


    <!-- RIGHT COLUMN -->
    <div class="col-md-6">

        <div class="container">
            <div class="question">
                Can you repair aluminium components and structures?
            </div>

            <div class="answercont">
                <div class="answer">
                    Yes, aluminium welding is suitable for repairing appropriate aluminium components and structures. OldsCool Mettle evaluates the material, damage, and project specifications to determine the welding method.
                </div>
            </div>
        </div>

        <div class="container">
            <div class="question">
                Do you offer boat repair services in Christchurch?
            </div>

            <div class="answercont">
                <div class="answer">
                    Yes, OldsCool Mettle provides boat repair services for appropriate metal boat parts and damage, and welding and metalwork solutions are chosen depending on the boat and repair needs.
                </div>
            </div>
        </div>

        <div class="container">
            <div class="question">
                How do I choose between welding, fabrication, and sheet metal services?
            </div>

            <div class="answercont">
                <div class="answer">
                    The right service is determined by your project. Welding joins or repairs metal parts, while fabrication is the process of making or altering metal parts, and sheet metal work involves forming, cutting, bending, and repairing sheet-metal parts.
                </div>
            </div>
        </div>

    </div>

</div>
			
		</div>
	
</section>
<!-- FAQ section ends here	   -->
	 
	 

 <!-- testimonials section starts here -->
     <section class="testimonials py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="title-box">
                        <h5>testimonials</h5>
                        <h2 class="mx-auto">What Our Clients Say</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="testimonials-wrapper">
												<?php
               $testimonials=get_posts(
                ['post_type' => 'testimonial',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
                'order' => 'ASC'
               ]);
               foreach($testimonials as $i)
               {
                $tid=$i->ID;
				 $content= get_post_field('post_content',$tid);
              
                ?>
                        <!-- single slide -->
                         <div class="testimonials-content mx-3">
                            <div class="testimonials-pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user.png" alt="" class="img-fluid">
                            </div>
                            <div class="testimonials-content-profile mt-3">
                                <h3><?php echo get_the_title($tid) ?></h3>
                                <p><?php echo get_field('testimonials_area', $tid) ?></p>
                            </div>
                            <div class="testimonials-content-text js-read-more" data-rm-words="15">
                               <?php echo get_post_field('post_content',$tid) ?>
                            </div>
                            <div class="testimonials-content-ratings">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials-rating.png" alt="" class="img-fluid">
                            </div>
                         </div>
                        <!-- end of single slide -->
						<?php } ?>
        <?php wp_reset_query(); ?>

                      
                      
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- testimonials section ends here -->
<?php
get_footer();
?>	