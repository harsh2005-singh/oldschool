<?php
// Template Name: Projects Page
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
<!-- projects section starts here	   -->
<section class="projects py-5 projects-page gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-12 my-3 my-md-0 text-center">
				
				<div class="title-box">
                        <h5 class="">WELDING PROJECT</h5>
                        <h2 class="">Transformative Welding Projects Completed</h2>
                    </div>
			</div>
		
		</div>
			<div class="row mt-5">
				<div class="col-md-12">
					                    <ul
                    class="d-flex justify-content-center flex-wrap filter-button-group filter-buttons"
                  >
                    <li class="my-1 mx-2 active" data-filter="*">All</li>
                    <li class="my-1 mx-2" data-filter=".wielding">wielding</li>
                    <li class="my-1 mx-2" data-filter=".fabrication">fabrication</li>
					<li class="my-1 mx-2" data-filter=".mobile">mobile wielding</li>
					<li class="my-1 mx-2" data-filter=".aluminum">Aluminum Wielding</li>
					<li class="my-1 mx-2" data-filter=".sheet">Sheet Metal</li>
					<li class="my-1 mx-2" data-filter=".boat">Boat Repair</li>
					
                  
                  </ul>
					
				</div>
				
			</div>
		
		<div class="row grid">
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
			<div class="col-md-4 col-sm-6 my-3 <?php echo $pname; ?>">
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
<?php
get_footer();
?>	