<?php /* Template Name: portfolio */ ?>
<!DOCTYPE html>
<html lang="en">
<head>  
<title>JUST IDEAS</title>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css"/>

  	<!--[if lt IE 9]>
  	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]--> 

    <!-- FAVICON  -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/fav.png">    

	   <!-- Font icons --> 
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/icon-fonts/fontawesome-5.0.6/css/fontawesome-all.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" rel="stylesheet">
	   <!--Font -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/icon-fonts/flaticon/flaticon.css" />
<style>
.fit-image{
width: 100%;
object-fit: cover;
height: 450px; /* only if you want fixed height */
}

</style>
</head> 
<body class="darkness"> 

<!-- PRELOADER -->

<main>


	<!-- HEADER 
	================================================== --> 	
  <header class="whitev">
		<!-- Logo -->
		<a href="https://justideas.sa/" class="logo" data-type="ajax-load">
			<img src="<?php bloginfo('template_url'); ?>/img/logo-m.png" alt="">
		</a>
    <!-- Menu -->
    <div class="nav-icon">
      <span></span>
      <span></span>
      <span></span>
      </div>
  </header>
  
  <!-- Black Version -->
  <header class="black">
		<!-- Logo -->
		<a href="https://justideas.sa/" class="logo" data-type="ajax-load">
			<img src="<?php bloginfo('template_url'); ?>/img/logo-m.png" alt="">
		</a>
		<!-- Menu -->
    <div class="hamburger">
    <div class="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>

  <!-- Right Bar -->
   <!-- Social Links -->
   <div class="social fix">
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i>  </a></li> 
        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a></li>
        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a></li>
        <li><a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a></li>
       <li><a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a></li>
      </ul>
   </div>
   <!-- arrow -->
   <div class="uptotop">
      <svg class="down-arrow" xmlns="http://www.w3.org/2000/svg" width="14.486" height="18.412" viewBox="0 0 14.486 18.412" fill="#000">
        <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z" transform="translate(0 -8)"/>
      </svg>
   </div>

   <!-- Full Menu -->
   <div class="full-menu">
     <div class="row">
       <div class="col-lg-8 col-md-7 left-content">
         <div class="logo">
           <img src="<?php bloginfo('template_url'); ?>/img/logo-m.png" width="25%" alt="">
         </div> 
         <div class="close-icon d-none">
           <img src="<?php bloginfo('template_url'); ?>/img/cancel.png" alt="">
         </div>
         <div class="outter">
           <div class="inner">
              <div class="container">
              <ul class="site-menu">
                    <li><a href="https://justideas.sa/" data-type="ajax-load">Home.</a></li>
                  <li><a href="https://justideas.sa/about/" data-type="ajax-load">About Us.</a></li>
                  <li><a href="https://justideas.sa/services" data-type="ajax-load">Services.</a></li>
                  <li><a href="https://justideas.sa/contact" data-type="ajax-load">Contact.</a></li>
                 </ul>
                </div> <!-- container end -->
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-5 right-content sidepatern">
         <div class="close-icon">
           <img src="<?php bloginfo('template_url'); ?>/img/cancel.png" alt="">
         </div>
          <div class="outter">
            <div class="inner">
              <!-- Brief -->
              <ul>
                <li>Brief Us</li>
                <li><a href="mailto:info@justideas.sa">info@justideas.sa</a></li>
                <li>Tel. +966 11 810 8107</li>
              </ul>
              <!-- Office -->
              <ul>
                <li>Our Office</li>
                <li>3649, Alshiekh Abdullah bin Gabreen street,<br>
                Alriyadh, Saudi Arabia</li>
              </ul>
              <!-- Follow -->
              <ul class="social-links">
                <li>Follow Us</li>
             
                <li><a href="#">Linkedin.</a></li>
              </ul>
            </div>
          </div>
       </div>
     </div> <!-- row end -->
   </div>


   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


       
<?php the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>



   <?php get_footer();?>