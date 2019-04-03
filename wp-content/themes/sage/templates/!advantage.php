<?php
/*
	Template Name: ADVANTAGE
*/
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="We value our customers and their time. Our communication is top notch, and our pickups and deliveries are on time">
    <meta name="author" content="">

    <title>The North Basin Advantage - North Basin Coating Inc</title>

    <!-- Bootstrap core CSS -->
    <link href="/wp-content/themes/sage/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/wp-content/themes/sage/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/sage/assets/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/sage/assets/slick/slick-theme.css"/>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/wp-content/themes/sage/assets/styles/agency.css" rel="stylesheet">
    <!-- WP OVERRIDE STYLES (AMAC) -->
    <link href="/wp-content/themes/sage/assets/styles/wpover.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet">
</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="/wp-content/themes/sage/assets/images/NorthBasin.png" alt="North Basin Coating Inc" class="img-responsive"/> </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/about">about north basin</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="/advantage">The North Basin Advantage</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/contact">contact</a>
              </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="product sub-masthead" style="background-image: url(<?php the_field('hero_-_background'); ?>);">

</header>

<!-- Services -->
<section class="coater-section">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="section-heading"><?php the_field('services_-_title'); ?></h2>

                <?php
              // check if the repeater field has rows of data
              if( have_rows('services', 15) ):

              // loop through the rows of data
              while ( have_rows('services', 15) ) : the_row();

              // vars
              $image = get_sub_field('image', 15);
              $title = get_sub_field('title', 15);
              $snip = get_sub_field('snippet', 15);
              $size = 'full'; // (thumbnail, medium, large, full or custom size)
              ?>


                <div class="row custom-padding">
                    <div class="col-md-2 perfect-center">
                        <img src="<?php echo $image; ?>" alt="We value our customers and their time." class="img-fluid" />
                    </div>
                    <div class="col-md-10">
                        <h4 class="row-heading"><?php echo $title; ?></h4>
                        <p class="row-details"><?php echo $snip; ?></p>
                    </div>
                </div>

              <?php endwhile; ?>
              <?php endif; ?>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<section class="what-is">
    <div class="container-fluid padding-zero">
        <div class="row margin-zero">
            <div class="col-md-6 padding-zero flex green-block">
                <div class="row margin-zero">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-10">
                        <h4 class="section-heading"><?php the_field('pc_-_title'); ?></h4>
                        <p class="section-details"><?php the_field('pc_-_para'); ?></p>
                        <a href="#" class="download-link">download resources <img src="/wp-content/themes/sage/assets/images/google-drive-pdf-file.png" alt="Dependable and cost effective, powder coating consists is mixture of finely ground"/></a>
                    </div>
                    <div class="col-md-1">

                    </div>
                </div>
                <div class="row margin-zero">
                    <div class="col-md-12 padding-zero">
                        <div class="powder-coating">
                            <div><img src="/wp-content/themes/sage/assets/images/slider1.png" alt="Surfaces are blast cleaned or chemically pre-treated"/>
                                <div class="caption">
                                    <p>Surfaces are blast cleaned or chemically pre-treated.</p>
                                </div>
                            </div>
                            <div><img src="/wp-content/themes/sage/assets/images/slider2.png" alt="XTRA SHIELD™ coating is electrostatically applied."/>
                                <div class="caption">
                                    <p>XTRA SHIELD™ coating is electrostatically applied.</p>
                                </div>
                            </div>
                            <div><img src="/wp-content/themes/sage/assets/images/slider3.png" alt="XTRA SHIELD™ is cured at 400 degrees Fahrenheit."/>
                                <div class="caption">
                                    <p>XTRA SHIELD™ is cured at 400 degrees Fahrenheit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 padding-zero flex blue-block">
                <div class="">
                    <div class="row margin-zero">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-10">
                            <h4 class="section-heading"><?php the_field('fbs_-_title'); ?></h4>
                            <p class="section-details"><?php the_field('fbs_-_para'); ?></p>
                            <a href="#" class="download-link">download resources <img src="/wp-content/themes/sage/assets/images/google-drive-pdf-file.png" alt="Fusion Bonded Epoxy (FBE) is an epoxy-based powder coating that is applied"/></a>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                    <div class="row margin-zero">
                        <div class="col-md-12 padding-zero custom-height-mobile">
                            <div class="bonded-epoxy">
                                <div><img src="/wp-content/themes/sage/assets/images/slider1.png" alt="Pipes are prepared with internal grinding and blast cleaning."/>
                                    <div class="caption">
                                        <p>Pipes are prepared with internal grinding and blast cleaning.</p>
                                    </div>
                                </div>
                                <div><img src="/wp-content/themes/sage/assets/images/slider2.png" alt="Phenolic primer is applied, and the substrate is heated and coated."/>
                                    <div class="caption">
                                        <p>Phenolic primer is applied, and the substrate is heated and coated.</p>
                                    </div>
                                </div>
                                <div><img src="/wp-content/themes/sage/assets/images/slider3.png" alt="Pipes are inspected, including holiday detection and thickness checks."/>
                                    <div class="caption">
                                        <p>Pipes are inspected, including holiday detection and thickness checks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="make-it-happen grey-bg" style="background-image: url(<?php the_field('make_it_happen_-_bg'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3 class="section-heading"><?php the_field('make_it_happen_-_title'); ?></h3>
                <p class="section-details"><?php the_field('make_it_happen_-_para'); ?></p>
            </div>
            <div class="col-md-7">
              <form>
                  <div class="row">
                    <?php the_field('form'); ?>
                  </div>
              </form>

<!--              <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="phone" class="form-control phone" placeholder="Phone" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="company_name" class="form-control company" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="message" rows="3" class="form-control message" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group submit">
                                <button type="submit" name="submit" class="btn btn-warning">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
-->
            </div>

        </div>
    </div>
</section>
<section class="carbon-steel">
    <div class="container">
        <div class="row">
            <div class="col-md-12 perfect-center">
                <h2 class="section-heading"><?php the_field('save_money_-_title'); ?></h2>
                <h4 class="section-subheading"><?php the_field('save_money_-_st'); ?></h4>
                <div class="graph-representation">
                    <h5><img src="/wp-content/themes/sage/assets/images/rectangle-11.png"  alt="Carbon steel coated"/> carbon steel coated</h5>
                    <h5><img src="/wp-content/themes/sage/assets/images/rectangle-11-copy.png"  alt="Stainless steel"/> stainless steel</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-8">
                        <div class="perfect-center">
                            <img src="<?php the_field('save_money_-_image'); ?>" alt="Save Money with Carbon Steel Coating" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-4 padding-zero-sm">
                        <h4 class="section-subheading custom-padding"><?php the_field('save_money_-_h'); ?></h4>
                        <p class="section-details"><?php the_field('save_money_-_d'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-7">
                        <div class="perfect-center">
                            <img src="<?php the_field('welding_process_-_image'); ?>" alt="Save Money with Carbon Steel Coating" class="img-fluid graph-2" />
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h4 class="section-subheading custom-padding padding-zero-sm"><?php the_field('welding_process_-_title'); ?></h4>
                        <p class="section-details"><?php the_field('welding_process_-_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services -->
<section class="services">
    <div class="container-fluid">
        <div class="row margin-zero">
            <div class="col-md-6 padding-zero">
                <div class="img-heading">
                    <span><?php the_field('walk-throughs_-_title'); ?></span>
                </div>
                <img src="<?php the_field('walk-throughs_-_image'); ?>" alt="Lunch, Learn and Plant Walk-Throughs" class="img-fluid custom-width" />
            </div>
            <div class="col-md-6 flex">
                <div class="customer-service">
                    <div class="block">
                        <h4 class="service-heading"><?php the_field('walk-throughs_-_sub_title_1'); ?></h4>
                        <p class="text-muted"><?php the_field('walk-throughs_-_p1'); ?></p>
                        <h4 class="service-heading"><?php the_field('walk-throughs_-_sub_title_2'); ?></h4>
                        <p class="text-muted"><?php the_field('walk-throughs_-_p2'); ?></p>
                        <div class="btn">
                            <a href="/contact">register now<img src="/wp-content/themes/sage/assets/images/right-arrow-1.png" alt="An Opportunity for You and Your Team" class="img-fluid"/> </a>
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
                <img src="<?php the_field('nace_-_image'); ?>" class="img-fluid" alt="Established in 1943, NACE International is the world’s leading authority on corrosion prevention."/>
            </div>
            <div class="col-md-8 perfect-center">
                <p class="text-muted"><?php the_field('nace_-_paragraph'); ?></p>
            </div>
        </div>
    </div>
</section>
<div class="autoplay">
    <div><img src="/wp-content/themes/sage/assets/images/slider1.png" alt="Serving the nation"/> </div>
    <div><img src="/wp-content/themes/sage/assets/images/slider2.png" alt="Serving the nation"/> </div>
    <div><img src="/wp-content/themes/sage/assets/images/slider3.png" alt="Serving the nation"/> </div>
    <div><img src="/wp-content/themes/sage/assets/images/slider4.png" alt="Serving the nation"/> </div>
    <div><img src="/wp-content/themes/sage/assets/images/slider5.png" alt="Serving the nation"/> </div>
    <div><img src="/wp-content/themes/sage/assets/images/slider4.png" alt="Serving the nation"/> </div>
    <div><img src="/wp-content/themes/sage/assets/images/slider1.png" alt="Serving the nation"/> </div>
    <div><img src="/wp-content/themes/sage/assets/images/slider2.png" alt="Serving the nation"/> </div>
    <div><img src="/wp-content/themes/sage/assets/images/slider3.png" alt="Serving the nation"/> </div>
    <div><img src="/wp-content/themes/sage/assets/images/slider5.png" alt="Serving the nation"/> </div>
</div>
<!-- Footer -->
<?php get_template_part('footer'); ?>
<!-- Bootstrap core JavaScript -->
<script src="/wp-content/themes/sage/assets/scripts/jquery/jquery.min.js"></script>
<script src="/wp-content/themes/sage/assets/scripts/bootstrap/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/wp-content/themes/sage/assets/scripts/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="/wp-content/themes/sage/assets/scripts/js/jqBootstrapValidation.js"></script>
<script src="/wp-content/themes/sage/assets/scripts/js/contact_me.js"></script>
<script type="/wp-content/themes/sage/assets/slick/slick.min.js"></script>
<!-- Custom scripts for this template -->
<script src="/wp-content/themes/sage/assets/scripts/js/agency.js"></script>
<script>
    $(document).ready(function(){
        $('.autoplay').slick({
            slidesToShow: 5,
            slidesToScroll: 5,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false
                    }
                }
            ]
        });
    });

</script>
<script>
    $(document).ready(function(){
        $('.powder-coating').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false
                    }
                }
            ]
        });
    });

</script>
<script>
    $(document).ready(function(){
        $('.bonded-epoxy').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false
                    }
                }
            ]
        });
    });

</script>
</body>

</html>
