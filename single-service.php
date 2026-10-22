<?php
// Template Name: Single Service Page
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
<!-- single service section starts here -->
<section class="single-service py-5">
	<div class="container">
		<div class="row">
			
		
		<div class="col-md-4 my-3 my-md-0 order-2 order-md-1">
			<div class="single-service-sidebar">
				<h3>
					Other Services
				</h3>
				<ul>
					<?php
                            $related_query = new WP_Query(array(
                               'post_type' => 'service',
                               'category__in' => wp_get_post_categories(get_the_ID()),
                               'post__not_in' => array(get_the_ID()),
                               'posts_per_page' => 13,
                               'orderby' => 'date',
                           ));

                              if ($related_query->have_posts()) {
                              while ($related_query->have_posts()){
                              $related_query->the_post();
                                $perma_cat = get_post_meta($post->ID , '_category_permalink', true);
                                 if ( $perma_cat != null ) {
                                   $cat_id = $perma_cat['category'];
                                   $category = get_category($cat_id);
                                 } else {
                                   $categories = get_the_category();
                                   $category = $categories[0];
                                 }
                                 $category_link = get_category_link($category);
                                 $category_name = $category->name;                     
                             ?>
					<li>
						<a href="<?php echo the_permalink($sid); ?>">
							<?php echo get_the_title($sid) ?>
						</a>
					</li>
					<?php } wp_reset_postdata(); } ?>
				</ul>
				
			</div>
			<?php
               $contactInfos=get_posts(
                ['post_type' => 'contactinfo',
                'post_status' => 'publish',
                'posts_per_page' => '3'
            
               ]);
               foreach($contactInfos as $i)
               {
                $cid=$i->ID;
               }
              
                ?>
<!-- 			single service sidebar contacts -->
			<div class="single-service-sidebar-contacts my-5 ">
				<h3>
					contact us
				</h3>
				
<!-- 				<div class="single-service-sidebar-info d-flex my-3">
					<div>
						<svg xmlns="http://www.w3.org/2000/svg" width="0.97em" height="1em" viewBox="0 0 1728 1792"><path fill="currentColor" d="M1713 297q10 10 10 23t-10 23l-141 141q-28 28-68 28H160q-26 0-45-19t-19-45V192q0-26 19-45t45-19h576V64q0-26 19-45t45-19h128q26 0 45 19t19 45v64h512q40 0 68 28zm-977 919h256v512q0 26-19 45t-45 19H800q-26 0-45-19t-19-45zm832-448q26 0 45 19t19 45v256q0 26-19 45t-45 19H224q-40 0-68-28L15 983Q5 973 5 960t10-23l141-141q28-28 68-28h512V576h256v192z"/></svg>
					</div>
					<div class="ms-3">
						<h4>
							Address:
						</h4>
						<a href="<?php echo get_field('address_link', $cid) ?>" target="_blank"><?php echo get_field('address', $cid) ?></a>
					</div>
				</div> -->
				
					
				
				
				
					<div class="single-service-sidebar-info d-flex my-3">
					<div>
						<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20"><path fill="currentColor" d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14z"/></svg>
					</div>
					<div class="ms-3">
						<h4>
							Email:
						</h4>
						<a href="mailto:<?php echo get_field('email', $cid) ?>"><?php echo get_field('email', $cid) ?></a>
					</div>
				</div>
				
					<div class="single-service-sidebar-info d-flex my-3">
					<div>
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="64" stroke-dashoffset="64" d="M8 3C8.5 3 10.5 7.5 10.5 8C10.5 9 9 10 8.5 11C8 12 9 13 10 14C10.3943 14.3943 12 16 13 15.5C14 15 15 13.5 16 13.5C16.5 13.5 21 15.5 21 16C21 18 19.5 19.5 18 20C16.5 20.5 15.5 20.5 13.5 20C11.5 19.5 10 19 7.5 16.5C5 14 4.5 12.5 4 10.5C3.5 8.5 3.5 7.5 4 6C4.5 4.5 6 3 8 3Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/><animateTransform attributeName="transform" begin="0.6s;lineMdPhoneCallLoop0.begin+2.6s" dur="0.5s" type="rotate" values="0 12 12;15 12 12;0 12 12;-12 12 12;0 12 12;12 12 12;0 12 12;-15 12 12;0 12 12"/></path><path stroke-dasharray="4" stroke-dashoffset="4" d="M14 7.04404C14.6608 7.34734 15.2571 7.76718 15.7624 8.27723M16.956 10C16.6606 9.35636 16.2546 8.77401 15.7624 8.27723" opacity="0"><set id="lineMdPhoneCallLoop0" attributeName="opacity" begin="0.7s;lineMdPhoneCallLoop0.begin+2.7s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s;lineMdPhoneCallLoop0.begin+2.7s" dur="0.2s" values="4;8"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.3s;lineMdPhoneCallLoop0.begin+3.3s" dur="0.3s" values="0;4"/><set attributeName="opacity" begin="1.6s;lineMdPhoneCallLoop0.begin+3.6s" to="0"/></path><path stroke-dasharray="10" stroke-dashoffset="10" d="M20.748 9C20.3874 7.59926 19.6571 6.347 18.6672 5.3535M15 3.25203C16.4105 3.61507 17.6704 4.3531 18.6672 5.3535" opacity="0"><set attributeName="opacity" begin="1s;lineMdPhoneCallLoop0.begin+3s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="1s;lineMdPhoneCallLoop0.begin+3s" dur="0.2s" values="10;20"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.5s;lineMdPhoneCallLoop0.begin+3.5s" dur="0.3s" values="0;10"/><set attributeName="opacity" begin="1.8s;lineMdPhoneCallLoop0.begin+3.8s" to="0"/></path></g></svg>
					</div>
					<div class="ms-3">
						<h4>
							Phone:
						</h4>
						<a href="tel:<?php echo get_field('phone', $cid) ?>"><?php echo get_field('phone', $cid) ?></a>
					</div>
				</div>
				
				
				
				
				
			</div>
			
			<div   class="services-contact-section mt-5">
				
			
			  <div class="contact-section-form p-3 p-md-5">
				  <h3 class="text-white">
					  Get A Quote
				  </h3>
						
<!--                         <div class="row">
                            <div class="col-md-12 my-2">
                                <input type="text" class="form-control" placeholder="Name*">
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="email" class="form-control" placeholder="Email*">
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="tel" class="form-control" placeholder="Phone*">
                            </div>
                            <div class="col-md-12 my-2">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Gib Fixing</option>
                                    <option value="2">Plastering</option>
                                    <option value="3">Painting</option>
                                </select>
                            </div>

                            <div class="col-md-12 my-2">
                                <input type="text" class="form-control" placeholder="Address*">
                            </div>
                            <div class="col-md-12 my-2">
                                <input type="submit" class="theme-btn" value="SUBMIT NOW">
                            </div>
                        </div> -->
						<?php echo do_shortcode('[contact-form-7 id="6d6b451" title="Service Form"]') ?>
						
						
						
                    </div>
			</div>
			
			
		</div>
		<div class="col-md-8 my-3 my-md-0 order-1 order-md-2">
			<div class="single-service-content-img">
					    <img src="<?php echo get_field('services_img',$sid) ?>" alt="" class="img-fluid">
					
				</div>
			<div class="single-service-content mt-4">
				
				 <?php echo the_content(); ?>
			</div>
			
		</div>
		</div>
	</div>
</section>

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
<!-- single service section starts here -->

<?php
            $service_faqs = get_field('service_faqs');

            if ($service_faqs):
                ?>

                <section class="faq-section service-faq-section">

                    <div class="container">

                        <div class="faq-heading text-center">

                            <div class="faq-label">
                                Frequently Asked Questions
                            </div>

                            <h2 class="faq-title">
                                <strong>Common Questions</strong> about
                                <?php echo esc_html(get_the_title()); ?>
                            </h2>

                        </div>

                        <div class="row faq-row" id="serviceFaqAll">

                            <?php
                            $faq_chunks = array_chunk($service_faqs, ceil(count($service_faqs) / 2));
                            $faq_index = 1;
                            ?>

                            <?php foreach ($faq_chunks as $column_index => $faq_column): ?>

                                <div class="col-lg-6 col-12">

                                    <div class="accordion faq-acc" id="serviceFaqColumn<?php echo esc_attr($column_index); ?>">

                                        <?php foreach ($faq_column as $faq): ?>

                                            <?php
                                            $question = isset($faq['question']) ? $faq['question'] : '';
                                            $answer = isset($faq['answer']) ? $faq['answer'] : '';

                                            if (!$question || !$answer) {
                                                continue;
                                            }

                                            $faq_id = 'service-faq-' . get_the_ID() . '-' . $faq_index;
                                            ?>

                                            <div class="accordion-item">

                                                <h3 class="accordion-header">

                                                    <button class="accordion-button <?php echo $faq_index === 1 ? '' : 'collapsed'; ?>"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#<?php echo esc_attr($faq_id); ?>"
                                                        aria-expanded="<?php echo $faq_index === 1 ? 'true' : 'false'; ?>"
                                                        aria-controls="<?php echo esc_attr($faq_id); ?>">
                                                        <?php echo esc_html($question); ?>
                                                    </button>

                                                </h3>

                                                <div id="<?php echo esc_attr($faq_id); ?>"
                                                    class="accordion-collapse collapse <?php echo $faq_index === 1 ? 'show' : ''; ?>"
                                                    data-bs-parent="#serviceFaqAll">

                                                    <div class="accordion-body">

                                                        <?php echo wp_kses_post(wpautop($answer)); ?>

                                                    </div>

                                                </div>

                                            </div>

                                            <?php $faq_index++; ?>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </section>
</section>

            <?php endif; ?>
<?php
get_footer();
?>	