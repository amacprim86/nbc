<?php
/*
	Template Name: HOME
*/
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="At North Basin, we take care of our customers. We understand your time is valuable, so you can always expect us to be on time. We pride ourselves on our fast turnaround, so you can keep things flowing">
  <meta name="author" content="">

  <title>North Basin Coating Inc</title>

  <!-- Bootstrap core CSS -->
  <link href="/wp-content/themes/sage/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/wp-content/themes/sage/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/wp-content/themes/sage/assets/styles/agency.css" rel="stylesheet">

  <!-- WP OVERRIDE STYLES (AMAC) -->
  <link href="/wp-content/themes/sage/assets/styles/wpover.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet">
    <!--[if IE]>
    <style>
        .nac-certified .img-container .img-1 {
            left: 69%;
        }
    </style>
    <![endif]-->
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="wp-content/themes/sage/assets/images/NorthBasin.png" alt="North Basin Coating Inc" class="img-responsive"/> </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
              <a class="nav-link active" href="/">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/about">about north basin</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/advantage">The North Basin Advantage</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/contact">contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead" style="background-image: url(<?php the_field('hero_bg'); ?>);">
    <div class="container">
      <div class="intro-text">
        <!--<div class="intro-lead-in">Welcome To Our Studio!</div>-->
        <h1 class="intro-heading text-uppercase"><?php the_field('hero_title'); ?></h1>
        <h2 class="intro-lead-in"><?php the_field('hero_subtitle'); ?></h2>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="services">
    <div class="container-fluid">
      <div class="row margin-zero">
        <div class="col-md-6 padding-zero">
          <div class="img-heading">
            <span><?php the_field('services_title'); ?></span>
          </div>
          <img src="<?php the_field('services_image'); ?>" alt="Where You Are the Priority" class="img-fluid custom-width" />
        </div>
        <div class="col-md-6 flex">
          <div class="customer-service">
              <div class="block">
                <h4 class="service-heading"><?php the_field('services_title_r'); ?></h4>
                <p class="text-muted"><?php the_field('services_paragraph'); ?></p>
                <div class="btn padding-zero">
                  <a href="/about"><?php the_field('services_link_text'); ?><img src="wp-content/themes/sage/assets/images/right-arrow-1.png" alt="First Rate Customer Service" class="img-fluid"/> </a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--quicklinks-->
<section class="quicklinks">
  <div class="container">
    <div class="row">

      <?php
    // check if the repeater field has rows of data
    if( have_rows('quick_links', 6) ):

    // loop through the rows of data
    while ( have_rows('quick_links', 6) ) : the_row();

    // vars
    $image = get_sub_field('image', 6);
    $title = get_sub_field('title', 6);
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    ?>

      <div class="col-md-4 perfect-center">
        <div class="quick-link-contain text-center">
          <span><?php echo $title; ?></span>
          <img src="<?php echo $image; ?>" alt="oil & gas"/>
        </div>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</section>
  </section>
  <!-- Nace Certified -->
  <section class="nac-certified">
    <div class="container">
      <div class="row margin-zero">
        <div class="col-md-1"></div>
        <div class="col-md-5 flex">
          <div class="section-heading">
            <h4><?php the_field('nace_certified_-_title'); ?></h4>
            <p class="text-muted"><?php the_field('nace_certified_-_paragraph'); ?></p>
            <div class="btn padding-zero">
              <a href="advantage.html"><?php the_field('nace_certified_-_link_text'); ?><img src="wp-content/themes/sage/assets/images/right-arrow-1.png" alt="NACE Certified and Member of the Powder Coating Institute" class="img-fluid"/> </a>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-container text-center">
            <img src="<?php the_field('nace_certified_-_image1'); ?>" alt="NACE Certified and Member of the Powder Coating Institute" class="img-1"/>
            <img src="<?php the_field('nace_certified_-_image2'); ?>" alt="NACE Certified and Member of the Powder Coating Institute" class="img-2"/>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!-- Save Money  -->
  <section class="save-money" style="background-image: url(<?php the_field('save_money_-_background_image'); ?>);">
    <div class="container">
      <div class="row margin-zero">
          <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
          <h2 class="main-heading"><?php the_field('save_money_-_title'); ?></h2>
          <h3 class="sub-heading"><?php the_field('save_money_-_Subtitle'); ?></h3>
          <hr class="custom-hr">
          <p class="text-muted"><?php the_field('save_money_-_paragraph'); ?></p>
        </div>
          <div class="col-md-2"></div>
      </div>
    </div>
  </section>
  <!-- Services -->
  <section class="services">
    <div class="container-fluid">
      <div class="row margin-zero">
        <div class="col-md-6 padding-zero">
          <div class="img-heading">
            <span><?php the_field('services2_-_title'); ?></span>
          </div>
          <img src="<?php the_field('services2_-_image'); ?>" alt="Lunch, Learn and Plant Walk-Throughs" class="img-fluid custom-width" />
        </div>
        <div class="col-md-6 flex">
          <div class="customer-service">
              <div class="block">
                <h4 class="service-heading"><?php the_field('services2_-_subtitle1'); ?></h4>
                <p class="text-muted"><?php the_field('services2_-_paragraph1'); ?></p>
                <h4 class="service-heading"><?php the_field('services2_-_subtitle2'); ?></h4>
                <p class="text-muted"><?php the_field('services2_-_paragraph2'); ?></p>

                <div class="btn">
                  <a href="contact.html">register now<img src="/wp-content/themes/sage/assets/images/right-arrow-1.png" alt="An Opportunity for You and Your Team" class="img-fluid"/> </a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Nace institute center-->
  <section class="nace-institute">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <img src="<?php the_field('nace_institute_-_image'); ?>" class="homei1"alt="NACE International is the world’s leading authority" class="img-fluid"/>
        </div>
        <div class="col-md-8 perfect-center">
            <p class="text-muted"><?php the_field('nace_institute_-_paragraph'); ?></p>
        </div>
      </div>
    </div>
  </section>


<?php get_template_part('footer'); ?>


  <!-- Bootstrap core JavaScript -->
  <script src="/wp-content/themes/sage/assets/scripts/jquery/jquery.min.js"></script>
  <script src="/wp-content/themes/sage/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="/wp-content/themes/sage/assets/scripts/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="/wp-content/themes/sage/assets/scripts/js/jqBootstrapValidation.js"></script>
  <script src="/wp-content/themes/sage/assets/scripts/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="/wp-content/themes/sage/assets/scripts/js/agency.js"></script>

</body>

<style>


</style>
