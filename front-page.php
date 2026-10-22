<?php
get_header();
?>
    
	  
<!-- banner section starts here	   -->
<section class="banner-section">
	<div class="banner-wrapper">
		<?php
            if(have_rows('banner-wrapper') ):
                    // loop through the rows of data
             while (have_rows('banner-wrapper') ) : the_row();?>
<!-- 		single slide -->
		<div class="banner-content d-flex align-items-center" style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-1.webp); background-size:cover; background-position: center;height:100vh;">
			<div class="banner-content px-md-5">
				<div class="container">
					<h5 class="highlights"><?php the_sub_field('banner_sub_title'); ?></h5>
					<h1 class="pb-0 mb-0">
						<?php the_sub_field('banner_title'); ?>
					</h1>
					
						<?php the_sub_field('banner_para'); ?>
					
					 <div class="banner-btn mt-4">
						      <a href="<?php echo site_url(); ?>/contact-us" class="primary-btn-1 btn-hover animated" data-animation-in="fadeInUp">   spark your project   
                   
                            <span style="top: 44.1562px; left: -12.3281px"></span>
                        </a>
						   
					   </div>
					
				</div>
				
			</div>
		</div>
		<!-- 	end of single slide -->
		<?php endwhile;endif;wp_reset_query();?> 
	</div>
</section>	  
<!-- banner section ends here	   -->	  
<!-- about section starts here	   -->
	  <section class="about py-5">
		  <div class="container">
			  <div class="row">
				  <div class="col-md-6 my-3 m-d-0">
					  <div class="about-img-wrapper">
						  <img src=" <?php echo get_field('about_section_img') ?>" class="img-fluid about-img"/>
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
					   
					   <div class="about-content-quote mt-4">
						   <p>
							   <?php echo get_field('about_section_quote') ?>
						   </p>
						   
					   </div>
					   <div class="about-btn mt-4">
						      <a href="<?php echo site_url(); ?>/about-us" class="primary-btn-1 btn-hover animated" data-animation-in="fadeInUp">   More about us    
                   
                            <span style="top: 44.1562px; left: -12.3281px"></span>
                        </a>
						   
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

<!-- services section starts here	   -->
<section class="services py-5" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/images/services-bg.webp); background-position:center;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
					<div class="title-box">
                        <h5 class="">Our Services</h5>
                        <h2 class="">Reliable Welding &amp; Metalwork for Projects of Every Siz</h2>
                    </div>
			</div>
			
		</div>
		<div class="row mt-5">
							<?php
               $services=get_posts(
                ['post_type' => 'service',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
                'order' => 'ASC'
               ]);
               foreach($services as $i)
               {
                $sid=$i->ID;
				 $content= get_post_field('post_content',$sid);
              
                ?>
<!-- 			single col -->
			<div class="col-md-4 col-sm-6 my-3 text-center">
				<div class="services-content">
					<div class="services-content-icon">
						<img src="<?php echo get_field('services_icon', $sid)?>" class="img-fluid"/>
						
					</div>
					<div class="services-content-title">
						<h3>
							<a href="<?php echo the_permalink($sid); ?>"><?php echo get_the_title($sid) ?></a>
						</h3>
						
					</div>
					<div class="services-content-text">
					<?php echo get_field('services_short_desc', $sid)?>
						
					</div>
					<div class="services-btn">
						<a href="<?php echo the_permalink($sid); ?>">learn more</a>
						
					</div>
				</div>
				
			</div>
<!-- 			end of single col -->
				<?php } ?>
        <?php wp_reset_query(); ?>
		</div>
		
	</div>
	<!-- projects section starts here	   -->
<section class="projects py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 my-3 my-md-0">
				
				<div class="title-box">
                        <h5 class="">WELDING PROJECT</h5>
                        <h2 class="">A Closer Look at Our Welding Work</h2>
                    </div>
			</div>
			<div class="col-md-6 my-3 my-md-0 d-flex justify-content-center justify-content-md-end">
				 <div class="about-btn mt-4">
						      <a href="<?php echo site_url(); ?>/projects" class="primary-btn-1 btn-hover animated" data-animation-in="fadeInUp">   view all projects   
                   
                            <span style="top: 44.1562px; left: -12.3281px"></span>
                        </a>
			</div>
			
		</div>
		</div>
		
		<div class="row">
				<?php
			$gallery = get_field('work_listing'); 
			foreach($gallery as $gallery_img){
				$caption = $gallery_img['caption'];
				$title=$gallery_img['title'];
				$name = strtolower($caption);				   
				$pname = str_replace(' ', '-', $name);
				$attachment = get_post($gallery_img['ID']);
				$description = $attachment->post_content;
			?>
			<div class="col-md-6 my-3">
				<a href="<?php echo $gallery_img['url']; ?>" data-fancybox="gallery">
				<div class="projects-img-wrapper">
					
					<img src="<?php echo $gallery_img['url']; ?>" class="img-fluid"/>
					
					<div class="projects-content">
						<h5>
								<?php echo $title; ?>
						</h5>
						
						 <?php if (!empty($description)) : ?>
                    <h3 class=""><?php echo esc_html($description); ?></h3>
                <?php endif; ?>
						
					</div>
					
				</div>
						</a>
			</div>
			
				 <?php } ?>
			
		</div>
	</div>
</section>	  
<!-- projects section ends here	   -->	
</section>	  
<!-- services section ends here	   -->	  
	  
<!--   process section starts here -->
<section class="process-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-7 my-3 my-md-0">
				<div class="process-img-wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/process-img.webp" class="img-fluid process-img"/>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/process-icon.png" class="img-fluid process-icon"/>
							<div class="process-featured-wrapper">
					<div class="row">
<!-- 						single col -->
						<div class="col-md-4 my-3 my-md-0 text-center text-md-start">
							<div class="process-featured-content">
								<h2>
									01
								</h2>
								<h3>
									Understand the Project
								</h3>
								<p>
									We discuss your requirements and assess the work needed to determine the right solution.
								</p>
								
							</div>
						</div>
						<!-- end of single col -->
						<!-- 						single col -->
						<div class="col-md-4 my-3 my-md-0 text-center text-md-start">
							<div class="process-featured-content">
								<h2>
									02
								</h2>
								<h3>
									Prepare and Complete the Work
								</h3>
								<p>
									We select suitable materials and techniques before carrying out the required metalwork with care.
								</p>
								
							</div>
						</div>
						<!-- end of single col -->
							<!-- 						single col -->
						<div class="col-md-4 my-3 my-md-0 text-center text-md-start">
							<div class="process-featured-content">
								<h2>
									03
								</h2>
								<h3>
									Check and Finish
								</h3>
								<p>
									We review the completed work to ensure it meets the project requirements and expected finish.
								</p>
								
							</div>
						</div>
						<!-- end of single col -->
					</div>
					
				</div>
				</div>
			</div>
			<div class="col-md-5 my-3 my-md-0 ps-md-5">
					<div class="title-box">
                        <h5 class="">Our Process</h5>
                        <h2 class="">A Straightforward Process for Quality Metalwork</h2>
                    </div>
				<div class="process-section-content mt-4">
					<p>
						From the outset, we make sure that every welding and metalwork project is clear, practical and focused. Before we start work, we understand the requirements of the project, whether it's welding, fabrication, mobile, aluminium welding, sheet metal work, or boat repair. This enables us to deliver the appropriate solution and implement each phase carefully and accurately.
					</p>
					<p>
						We ensure accuracy, durability and reliable workmanship, from material preparation through to the final product. We want to make it as easy as possible for our Christchurch clients and provide metalwork that suits the project. 
					</p>
					
				</div>
				
		
				
				<div class="process-btn mt-4">
					   <a href="<?php echo site_url(); ?>/contact-us" class="primary-btn-1 btn-hover animated" data-animation-in="fadeInUp">   contact us 
                   
                            <span style="top: 44.1562px; left: -12.3281px"></span>
                        </a>
					
				</div>
			</div>
			
		</div>
		
	</div>
</section>
<!--   process section ends here -->	 
	  
	  
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
</section>
<!-- FAQ section ends here	   -->

	  

	  
<?php
get_footer();
?>