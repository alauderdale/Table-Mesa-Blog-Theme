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
<!--                         <?php $nav_menu = wp_get_nav_menu_object(6); echo $nav_menu->name; ?> -->
                      </p>
                      <?php wp_nav_menu( array( 
                      'theme_location' => 'menu-footer-tm', 
                      'container' => false, 
                      'menu_class' => 'list-unstyled footer-main-nav',
                      'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                      )); ?>
                    </div>
                    <div class='col-sm-3 col-xs-6'>
                      <p class='small bold-font-name' style='color:#0C92EE;'>
                        Popular professions
                      </p>
                      <?php wp_nav_menu( array( 
                      'theme_location' => 'menu-footer-professions', 
                      'container' => false, 
                      'menu_class' => 'list-unstyled footer-main-nav',
                      'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                      )); ?>
                    </div>
                    <div class='col-sm-3 col-xs-6'>
                      <p class='small bold-font-name' style='color:#FFB518;'>
                        Are you a CE Provider?
                      </p>
                      <?php wp_nav_menu( array( 
                      'theme_location' => 'menu-footer-provider', 
                      'container' => false, 
                      'menu_class' => 'list-unstyled footer-main-nav',
                      'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                      )); ?>
                    </div>
                    <div class='col-sm-3 col-xs-6'>
                      <p class='small bold-font-name'>
                        Made in
                      </p>
                      <div class='logo-container margin-bottom' style='position:relative; right:20px;'>
                        <a href='http://www.entrepreneurialbynature.com/'>
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
                            <a class='facebook' href='https://www.facebook.com/tablemesa/'>
                              <i class='fa fa-facebook'></i>
                            </a>
                          </li>
                          <li>
                            <a class='twitter' href='https://twitter.com/mytablemesa'>
                              <i class='fa fa-twitter'></i>
                            </a>
                          </li>
                          <li>
                            <a class='linkedin' href='https://www.linkedin.com/company/table-mesa'>
                              <i class='fa fa-linkedin'></i>
                            </a>
                          </li>
<!--                           <li>
                            <a class='google-plus' href='#'>
                              <i class='fa fa-google-plus'></i>
                            </a>
                          </li> -->
                        </ul>
                        <p class='small half-margin-top light-text-color'>
                          © <?php echo date('Y'); ?> Table Mesa Inc.
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
                      <?php 
                      $page = get_page_by_title( 'Subscribe' );
                      $the_query = new WP_Query( 'page_id=' . $page->ID ); ?>
                      <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
                        <?php the_content(); ?>
                      <?php endwhile;?>
<!--                       <form class='subscribe'>
                        <input class='form-control half-margin-bottom' placeholder='Email Address'>
                        <button class='btn btn-primary form-control' type='submit'>
                          Subscribe
                        </button>
                      </form> -->
<!--                       <p class='no-margin-bottom'>
                        <small class='light-text-color'>
                          We’ll only send you awesome posts. Never spam.
                        </small>
                      </p> -->
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
