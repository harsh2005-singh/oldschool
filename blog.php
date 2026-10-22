<?php
// Template Name: Blog Page
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

<!-- blog section starts here -->
    <section class="blog py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                  <div class="title-box">
                       <h5>
							blog
						</h5>
                        <h2>
							our latest blog
						</h2>
                    </div>
                </div>
            </div>
            <div class="row  mt-5">
						<?php
             $paged = (get_query_var('page')) ? get_query_var('page') : 1;
    
              $args = array(
             'posts_per_page' => -1,
             'paged'    =>      $paged,
             'order'            => 'DESC',
             'post_type'        => 'post',
             'post_status'      => 'publish',
             'suppress_filters' => true,
             );
             query_posts($args);
         if ( have_posts() ) : while (have_posts()) : the_post();

    ?>
                <!-- single col -->
                <div class="col-md-4 col-sm-6 col-lg-4 my-3">
                    <div class="blog-content">
                        <div class="blog-img">
                            <a href="<?php echo the_permalink($bid) ?>">
                                <img src="<?php echo get_the_post_thumbnail_url($bid) ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="blog-lower-content">
                            <div class="blog-category">admin</div>
                            <ul class="blog-post-meta">
                                <li><a href="<?php echo the_permalink($bid) ?>"> <?php echo get_the_date(); ?></a></li>
                            </ul>
                            <h4><a href="<?php echo the_permalink($bid) ?>"><?php echo get_the_title($bid) ?></a></h4>
                            <a href="<?php echo the_permalink($bid) ?>" class="read-more-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M1.25 8A.75.75 0 0 1 2 7.25h10.19L9.47 4.53a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06l2.72-2.72H2A.75.75 0 0 1 1.25 8"
                                        clip-rule="evenodd" />
                                </svg>
                                read more
                            </a>

                        </div>
                    </div>
                </div>
                <!-- end of single col -->
				
				 <?php endwhile;endif;wp_reset_query();?> 
              
            </div>
        </div>
    </section>
    <!-- blog section starts here -->
<?php
get_footer();
?>	