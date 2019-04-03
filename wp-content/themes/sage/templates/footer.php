<?php
/*
	Template Name: FOOTER
*/
?>

<footer class="">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2 perfect-center">
              <div class="img-container">
                  <a href="index.html"><img src="<?php the_field('footer_-_logo', 381); ?>" alt="North Basin Coating Inc" /></a>
              </div>
          </div>
          <div class="col-md-3">
              <h4 class="footer-heading"><?php the_field('footer_-_title', 381); ?></h4>
<?php the_field('footer_-_locations', 381); ?>
          </div>
          <div class="col-md-5">
              <h4 class="footer-heading"><?php the_field('form_-_title', 381); ?></h4>
                <form>
                    <div class="row">
                      <?php the_field('form', 381); ?>
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
          <div class="col-md-1"></div>
      </div>
  </div>
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-1 col-sm-1"></div>
          <div class="col-md-5 col-sm-12">
              <div class="copyright">
                  <span class="copyright">Copyright &copy; 2019 North Basin Coating</span>
              </div>
          </div>
          <div class="col-md-5 col-sm-12 perfect-end">
              <ul class="list-inline quicklinks">
                  <li class="list-inline-item">
                      <a href="/privacy-policy">Privacy Policy</a>
                  </li>
                  <li class="list-inline-item">
                      <a href="#">|</a>
                  </li>
                  <li class="list-inline-item">
                      Crafted with Care by  <a href="https://www.primitivesocial.com/">Primitive Social</a>
                  </li>
              </ul>
          </div>
          <div class="col-md-1 col-sm-1"></div>
      </div>
  </div>
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

</footer>
