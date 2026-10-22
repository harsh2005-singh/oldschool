<?php
// Template Name: Single Blog Page
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

<!-- single blogs section starts here -->
<section class="single-blog py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8 my-3 my-md-0">
				<div class="single-blog-img">
					 <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="img-fluid">
					
				</div>
				<div class="single-blog-img-content">
					<span class="pb-3">By: <a href="#">Admin</a></span>
					<p>
						<?php echo get_the_date(); ?>
					</p>
					
				</div>
				<div class="my-3 single-blog-title">
					<h2>
						<?php echo the_title(); ?>
					</h2>
				</div>
				<div class="single-blog-content">
					
					 <?php echo the_content(); ?>
				</div>
				
				
			</div>
			<div class="col-md-4 my-3 my-md-0">
				<div class="single-blog-sidebar-wrapper">
					<h2>
						recent post
					</h2>
					<div class="single-blog-post-inner mt-4">
								<?php
                            $related_query = new WP_Query(array(
                               'post_type' => 'post',
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
						<ul>
						
							<li>
								 <img src="<?php the_post_thumbnail_url('servicefirst_thumb');?>" alt="" class="img-fluid">
							</li>
							<li>
								<h3>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<span><?php echo get_the_date(); ?></span>
							</li>
								
						</ul>
						<?php } wp_reset_postdata(); } ?>
						
					</div>
					
				</div>
				
				
			</div>
			
		</div>
		
	</div>
</section>
<!-- single blogs section ends here -->
<?php
get_footer();
?>	