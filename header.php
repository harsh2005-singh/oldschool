<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php  wp_title(); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<!-- 	  Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<!-- 	Fancy CSS -->
		 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/fancybox.css" />
<!-- Slick CSS	   -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Main CSS	   -->
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>  

	  
  </head>
  <body>
	  
<!-- header starts here	   -->
	  <header>
		  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="<?php echo site_url(); ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logo.png" class="img-fluid" style="width: 200px;"/>
	  </a>
    <button class="navbar-toggler  d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-none d-md-block" id="navbarSupportedContent">
     			  	<?php wp_nav_menu( array( 
			'theme_location' => 'main-menu',
			'container'       => '',                
			'menu_id'         => '',
			'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0', 
			'echo'            => true,
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			) ); 
		?>
      <div class="d-flex">
       
          <a  href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="primary-btn-1 btn-hover animated" data-animation-in="fadeInUp">   get a quote   
                 
                            <span style="top: 44.1562px; left: -12.3281px"></span>
                        </a>
      </div>
    </div>
	  
	   	<!-- Mobile Main Menu Start -->
					<div class="d-block d-md-none">
                        <div class="nav-menu-wrapper">

			<?php wp_nav_menu( array( 
			'theme_location' => 'main-menu',
			'container'       => '',                
			'menu_id'         => 'menu',
			'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0', 
			'echo'            => true,
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			) ); 
		?>
                        </div>
                    
                   
					</div>
					<!--  Mobile Main Menu End -->
	  
	  
	  
  </div>
</nav>
		  
		   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
  <!--         <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body services-contact-section">
         <div class="contact-section-form p-5">
                    <h3 class="text-white">
                        Get A Quote
                    </h3>
                          

			 <?php echo do_shortcode('[contact-form-7 id="aee10a8" title="Get A Quote Form"]') ?>
                       
                          
                          
                          
                      </div>
        </div>
       
      </div>
    </div>
  </div>
  <!-- 		 end of modal -->
	  </header>
<!-- header ends here	   -->	  