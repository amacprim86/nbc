<?php
/*
	Template Name: About
*/
?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="North Basin Coating, Inc. began in 1982 as a three person operation and has since experienced several periods of growth.">
    <meta name="author" content="">

    <title>About - North Basin Coating Inc</title>



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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <!-- FLICKITY -->
    <link rel="stylesheet" href="/wp-content/themes/sage/assets/flickity/flickity.css" media="screen">

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
                    <a class="nav-link active" href="/about">about north basin</a>
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
<header class="about sub-masthead" style="background-image: url(<?php the_field('about_-_bg_image'); ?>);">

</header>

<!-- Services -->
<section class="superior-coating">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="section-heading"><?php the_field('services_-_title'); ?></h1>
                <p class="section-details"><?php the_field('services_-_paragraph'); ?></p>
            </div>
            <div class="col-md-5">
                <img src="<?php the_field('services_-_image_main'); ?>" class="img-fluid width-100" />
                <div class="multiple-logos">
                    <img src="<?php the_field('services_-_image_sub1'); ?>" alt="Superior Powder Coating"/>
                    <img src="<?php the_field('services_-_image_sub2'); ?>" alt="Superior Powder Coating"/>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Nace institute center-->
<section class="make-it-happen" style="background-image: url(<?php the_field('form_section_-_bg'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3 class="section-heading"><?php the_field('form_section_-_title'); ?></h3>
                <p class="section-details"><?php the_field('form_section_-_paragraph'); ?></p>
            </div>
            <div class="col-md-7">
                <form>
                    <div class="row">
                      <?php the_field('form'); ?>
                    </div>
                </form>

<!--                <form>
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
                                <input type="text" name="company_name" class="form-control company" placeholder="Company Name" required>
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="message" rows="3" class="form-control message" placeholder="Message" required></textarea>
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
<section class="tabs-section">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="tabs">
                    <div class="tab-button-outer">
                        <ul id="tab-button">
                            <li><a href="#tab01">executive managment</a></li>
                            <li><a href="#tab02">sales</a></li>
                            <li><a href="#tab03">plant managers & shop foremen</a></li>
                            <li><a href="#tab04">Accounting / Admin</a></li>
                        </ul>
                    </div>
                    <div class="tab-select-outer">
                        <select id="tab-select">
                            <option value="#tab01">Executive managment</option>
                            <option value="#tab02">Sales</option>
                            <option value="#tab03">Plant managers & shop foremen</option>
                            <option value="#tab04">Accounting / Admin</option>
                        </select>
                    </div>

                    <div id="tab01" class="tab-contents scroll">
                        <h2>Executive Management Team</h2>

                        <?php
                      // check if the repeater field has rows of data
                      if( have_rows('tabs_-_emt', 10) ):

                      // loop through the rows of data
                      while ( have_rows('tabs_-_emt', 10) ) : the_row();

                      // vars
                      $image = get_sub_field('image', 10);
                      $name = get_sub_field('name', 10);
                      $pos = get_sub_field('pos', 10);
                      $para = get_sub_field('para', 10);
                      $size = 'full'; // (thumbnail, medium, large, full or custom size)
                      ?>


                        <div class="row executive">
                                <div class="col-md-4">
                                    <div class="img-container" style="background-image: url(<?php echo $image; ?>);">

                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $name; ?></h5>
                                    <h6><?php echo $pos; ?></h6>
                                    <p><?php echo $para; ?></p>
                                </div>
                        </div>

                      <?php endwhile; ?>
                      <?php endif; ?>

                    </div>
                    <div id="tab02" class="tab-contents scroll">
                        <h2>Sales</h2>
                        <?php
                      // check if the repeater field has rows of data
                      if( have_rows('tabs_-_s', 10) ):

                      // loop through the rows of data
                      while ( have_rows('tabs_-_s', 10) ) : the_row();

                      // vars
                      $image = get_sub_field('image', 10);
                      $name = get_sub_field('name', 10);
                      $pos = get_sub_field('pos', 10);
                      $para = get_sub_field('para', 10);
                      $size = 'full'; // (thumbnail, medium, large, full or custom size)
                      ?>


                        <div class="row executive">
                                <div class="col-md-4">
                                    <div class="img-container" style="background-image: url(<?php echo $image; ?>);">

                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $name; ?></h5>
                                    <h6><?php echo $pos; ?></h6>
                                    <p><?php echo $para; ?></p>
                                </div>
                        </div>

                      <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                    <div id="tab03" class="tab-contents scroll">
                        <h2>Plant managers & shop foremen</h2>
                        <?php
                      // check if the repeater field has rows of data
                      if( have_rows('tabs_-_pm', 10) ):

                      // loop through the rows of data
                      while ( have_rows('tabs_-_pm', 10) ) : the_row();

                      // vars
                      $image = get_sub_field('image', 10);
                      $name = get_sub_field('name', 10);
                      $pos = get_sub_field('pos', 10);
                      $para = get_sub_field('para', 10);
                      $size = 'full'; // (thumbnail, medium, large, full or custom size)
                      ?>


                        <div class="row executive">
                                <div class="col-md-4">
                                    <div class="img-container" style="background-image: url(<?php echo $image; ?>);">

                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $name; ?></h5>
                                    <h6><?php echo $pos; ?></h6>
                                    <p><?php echo $para; ?></p>
                                </div>
                        </div>

                      <?php endwhile; ?>
                      <?php endif; ?>

                    </div>
                    <div id="tab04" class="tab-contents scroll">
                        <h2>Accounting / Admin</h2>
                        <?php
                      // check if the repeater field has rows of data
                      if( have_rows('tabs_-_aa', 10) ):

                      // loop through the rows of data
                      while ( have_rows('tabs_-_aa', 10) ) : the_row();

                      // vars
                      $image = get_sub_field('image', 10);
                      $name = get_sub_field('name', 10);
                      $pos = get_sub_field('pos', 10);
                      $para = get_sub_field('para', 10);
                      $size = 'full'; // (thumbnail, medium, large, full or custom size)
                      ?>


                        <div class="row executive">
                                <div class="col-md-4">
                                    <div class="img-container" style="background-image: url(<?php echo $image; ?>);">

                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $name; ?></h5>
                                    <h6><?php echo $pos; ?></h6>
                                    <p><?php echo $para; ?></p>
                                </div>
                        </div>

                      <?php endwhile; ?>
                      <?php endif; ?>
                    </div>

                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section class="serving-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1"><img src="<?php the_field('sn_-_map_image'); ?>" alt="Serving the nation" class="img-fluid" /></a>
            </div>
            <div class="col-md-5 flex-end">
                <div class="section-details">
                    <h2 class="section-heading"><?php the_field('serving_nation_-_title'); ?></h2>
                    <h5 class="section-subheading"><?php the_field('serving_nation_-_st'); ?></h5>
                    <div class="graph-representation">
                        <h5><span class="blue"></span><?php the_field('sn_-_map_serving'); ?></h5>
                        <h5><span class="yellow"></span><?php the_field('sn_-_map_d'); ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <div class="autoplay flick" style="">

      <?php
      // check if the repeater field has rows of data
      if( have_rows('slider', 10) ):

      // loop through the rows of data
      while ( have_rows('slider', 10) ) : the_row();

      // vars
      $image = get_sub_field('images', 10);
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      ?>


        <div class="az"><img src="<?php echo $image; ?>" alt="Serving the nation"/></div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>



<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="modal-header pull-right">
                            <a data-dismiss="modal">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="modal-body perfect-center">
                            <!-- Project Details Go Here -->
                            <!--<h2 class="text-uppercase">SERVING THE NATION</h2>-->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13298.160597543709!2d-102.4042467!3d33.5653222!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x125969bbe84f1dee!2sNorth+Basin+Coating+Inc!5e0!3m2!1sen!2s!4v1548158844688" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <!--<button class="btn btn-primary" data-dismiss="modal" type="button">-->
                            <!--<i class="fas fa-times"></i>-->
                            <!--Close Project</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('footer'); ?>
<!-- Bootstrap core JavaScript -->

<script src="/wp-content/themes/sage/assets/scripts/jquery/jquery.min.js"></script>

<script type="text/javascript" src="/wp-content/themes/sage/assets/scripts/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="/wp-content/themes/sage/assets/flickity/flickity.pkgd.js"></script>
<script src="/wp-content/themes/sage/assets/scripts/bootstrap/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/wp-content/themes/sage/assets/scripts/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="/wp-content/themes/sage/assets/scripts/js/jqBootstrapValidation.js"></script>
<script src="/wp-content/themes/sage/assets/scripts/js/contact_me.js"></script>
<!-- Custom scripts for this template -->
<script src="/wp-content/themes/sage/assets/scripts/js/agency.js"></script>


<script>
console.log("temp");
var flky = new Flickity( '.flick', {
  // options, defaults listed

  accessibility: true,
  // enable keyboard navigation, pressing left & right keys

  autoPlay: 3000,
  // advances to the next cell
  // if true, default is 3 seconds
  // or set time between advances in milliseconds
  // i.e. `autoPlay: 1000` will advance every 1 second

  cellAlign: 'center',
  // alignment of cells, 'center', 'left', or 'right'
  // or a decimal 0-1, 0 is beginning (left) of container, 1 is end (right)

  cellSelector: undefined,
  // specify selector for cell elements

  contain: false,
  // will contain cells to container
  // so no excess scroll at beginning or end
  // has no effect if wrapAround is enabled

  draggable: true,
  // enables dragging & flicking

  freeScroll: false,
  // enables content to be freely scrolled and flicked
  // without aligning cells

  friction: 0.2,
  // smaller number = easier to flick farther

  initialIndex: 0,
  // zero-based index of the initial selected cell

  percentPosition: true,
  // sets positioning in percent values, rather than pixels
  // Enable if items have percent widths
  // Disable if items have pixel widths, like images

  prevNextButtons: true,
  // creates and enables buttons to click to previous & next cells

  pageDots: false,
  // create and enable page dots

  resize: true,
  // listens to window resize events to adjust size & positions

  rightToLeft: false,
  // enables right-to-left layout

  setGallerySize: true,
  // sets the height of gallery
  // disable if gallery already has height set with CSS

  watchCSS: false,
  // watches the content of :after of the element
  // activates if #element:after { content: 'flickity' }
  // IE8 and Android 2.3 do not support watching :after
  // set watch: 'fallbackOn' to enable for these browsers

  wrapAround: true
  // at end of cells, wraps-around to first for infinite scrolling

});
</script>




<script>

//js for tabs
    $(document).ready(function () {
        $(function() {
            var $tabButtonItem = $('#tab-button li'),
                $tabSelect = $('#tab-select'),
                $tabContents = $('.tab-contents'),
                activeClass = 'is-active';

            $tabButtonItem.first().addClass(activeClass);
            $tabContents.not(':first').hide();

            $tabButtonItem.find('a').on('click', function(e) {
                var target = $(this).attr('href');

                $tabButtonItem.removeClass(activeClass);
                $(this).parent().addClass(activeClass);
                $tabSelect.val(target);
                $tabContents.hide();
                $(target).show();
                e.preventDefault();
            });

            $tabSelect.on('change', function() {
                var target = $(this).val(),
                    targetSelectNum = $(this).prop('selectedIndex');

                $tabButtonItem.removeClass(activeClass);
                $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
                $tabContents.hide();
                $(target).show();
            });
        });
    })
</script>






<style>
.flick {
  width: 100%; /* full width */
  height: 500px;
  background: #FF4B53;

  .az {
    height: 100%;
    width: auto;
    img {
      height: 100%;
    }
  }
}
/* position dots in gallery */
.flickity-page-dots {
  bottom: 12px;
}
/* white circles */
.flickity-page-dots .dot {
  width: 12px;
  height: 12px;
  opacity: 1;
  background: transparent;
  border: 2px solid white;
}
/* fill-in selected dot */
.flickity-page-dots .dot.is-selected {
  background: white;
}

</style>








</body>

</html>
