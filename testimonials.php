<?php
// Template Name: Testimonials Page
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
 <!-- testimonials section starts here -->
     <section class="testimonials py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="title-box">
                        <h5>testimonials</h5>
                        <h2 class="mx-auto">Our Client’s Reviews</h2>
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