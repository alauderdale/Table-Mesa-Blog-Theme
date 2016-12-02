<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>

        <footer class='global-footer text-center-sm'>
          <section>
            <div class='container'>
              <div class='row'>
                <div class='col-sm-1'></div>
                <div class='col-sm-10'>
                  <div class='row'>
                    <div class='col-sm-3 col-xs-6'>
                      <p class='small bold-font-name' style='color:#2EC4A5;'>
                        Table Mesa
                      </p>
                      <ul class='list-unstyled footer-main-nav'>
                        <li>
                          <a href='/company'>
                            About
                          </a>
                        </li>
                        <li>
                          <a href='#'>
                            Support
                          </a>
                        </li>
                        <li>
                          <a href='/jobs'>
                            Blog
                          </a>
                        </li>
                        <li>
                          <a href='/pricing#faqs'>
                            Terms & Privacy
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class='col-sm-3 col-xs-6'>
                      <p class='small bold-font-name' style='color:#0C92EE;'>
                        Popular professions
                      </p>
                      <ul class='list-unstyled footer-main-nav'>
                        <li>
                          <a href='/solution'>
                            Registered Nurses
                          </a>
                        </li>
                        <li>
                          <a href='/solution/monitor'>
                            Licensed Practical Nurses
                          </a>
                        </li>
                        <li>
                          <a href='/solution/collaborate'>
                            Doctors
                          </a>
                        </li>
                        <li>
                          <a href='/solution/integrate'>
                            Massage Therapists
                          </a>
                        </li>
                        <li>
                          <a href='/solution/manage'>
                            Dentists
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class='col-sm-3 col-xs-6'>
                      <p class='small bold-font-name' style='color:#FFB518;'>
                        Are you a CE Provider?
                      </p>
                      <ul class='list-unstyled footer-main-nav'>
                        <li>
                          <a href='/pricing'>
                            Join Table Mesa today!
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class='col-sm-3 col-xs-6'>
                      <p class='small bold-font-name'>
                        Made in
                      </p>
                      <div class='logo-container margin-bottom' style='position:relative; right:20px;'>
                        <a href='/'>
                          <img class='half-margin-bottom' src='<?php bloginfo('template_url'); ?>/images/logo_footer@2x.png' width='137px'>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <div class='centered-menu social-menu'>
                        <ul class='list-inline'>
                          <li>
                            <a class='facebook' href='#'>
                              <i class='fa fa-facebook'></i>
                            </a>
                          </li>
                          <li>
                            <a class='twitter' href='#'>
                              <i class='fa fa-twitter'></i>
                            </a>
                          </li>
                          <li>
                            <a class='linkedin' href='#'>
                              <i class='fa fa-linkedin'></i>
                            </a>
                          </li>
                          <li>
                            <a class='google-plus' href='#'>
                              <i class='fa fa-google-plus'></i>
                            </a>
                          </li>
                        </ul>
                        <p class='small half-margin-top light-text-color'>
                          © 2016 Table Mesa Inc.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='col-sm-1'></div>
              </div>
            </div>
          </section>
        </footer>
        <div class='container'>
          <div class='subscribe-modal' id='modal'>
            <div class='modal-dialog'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <button aria-label='Close' class='close' onClick='Custombox.close()' type='button'>
                    <span aria-hidden='true'>×</span>
                  </button>
                </div>
                <div class='modal-body'>
                  <div class='padded no-padding-top'>
                    <div class='text-center'>
                      <h3 class='no-margin-top'>
                        Stay up to date!
                      </h3>
                      <p>
                        Sign up for our newsletter. we'll send you the latest from Table Mesa!
                      </p>
                      <form class='subscribe'>
                        <input class='form-control half-margin-bottom' placeholder='Email Address'>
                        <button class='btn btn-primary form-control' type='submit'>
                          Subscribe
                        </button>
                      </form>
                      <p class='no-margin-bottom'>
                        <small class='light-text-color'>
                          We’ll only send you awesome posts. Never spam.
                        </small>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        transformicons.add('.tcon')
      </script>
    </body>
  </head>
</html>






<?php wp_footer(); ?>

</body>
</html>
