<?php
// Template Name: Services Page
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
<!-- services section starts here	   -->
<section class="services py-5" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/images/services-bg.webp); background-position:center;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
					<div class="title-box">
                        <h5 class="">Our Services</h5>
                        <h2 class="">Elevate Your Project with Top notch Welding</h2>
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

</section>	  
<!-- services section ends here	   -->
<?php
get_footer();
?>	