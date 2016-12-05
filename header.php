<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/screenshot.png">
<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.js" type="text/javascript"></script>
<?php wp_head(); ?>


<body class='index' style="height:100%!important;">
  <nav class='navbar navbar-default navbar-fixed-top global-nav'>
    <div class='container relative'>
      <div class='visible-xs main-nav-back'>
        <a href='<?php bloginfo('url')?>'>
          <i class='material-icons'>
            arrow_back
          </i>
        </a>
      </div>
      <div class='navbar-header'>
        <div class='logo-and-breadcrumbs'>
          <div class='header-promo'>
            <form class='navbar-form'>
              <a class='btn btn-primary' href='https://www.mytablemesa.com/'>
                Learn more about Table Mesa
              </a>
            </form>
          </div>
          <div class='header-root'>
            <a class='navbar-brand' href='<?php bloginfo('url')?>'>
              <img src='<?php bloginfo('template_url'); ?>/images/logo@2x.png' width='148px'>
            </a>
            <?php if ( is_category() || is_single() ): ?>
              <div class='nav nav-breadcrumb hidden-xs'>
                <i class='material-icons'>
                  chevron_right
                </i>
                <?php the_category( ' '); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class='visible-xs'>
          <div class='pull-right'>
            <div class='mobile-menu' id='collapse-menu'>
              <div class='mobile-menu-body quarter-padding-bottom'>
                <form class='mobile-menu-search'>
                  <div class='form-group'>
                    <div class='input-group add-on'>
                      <div class='input-group-addon'>
                        <i class='material-icons'>
                          search
                        </i>
                      </div>
                     <?php get_template_part( 'mobile', 'searchform' ); ?>
                    </div>
                  </div>
                </form>
                <ul class='mobile-menu-links'>
                  <li>
                    <a href='<?php bloginfo('url')?>'>
                      <i class='material-icons'>
                        home
                      </i>
                      Home
                    </a>
                  </li>
                  <li>
                    <a class='modal-btn' href='#' onclick='return false;'>
                      <i class='material-icons'>
                        mail_outline
                      </i>
                      Subscribe
                    </a>
                  </li>
                </ul>
              </div>
              <div class='mobile-menu-body quarter-padding-top quarter-padding-bottom'>
                <h5>
                  Topics
                </h5>
                <ul class='list-unstyled topics-list'>
                  <?php wp_list_categories( array(
                      'orderby' => 'name',
                      'title_li'=> '',
                      'exclude' => '1'
                  ) ); ?> 
                </ul>
              </div>
              <div class='mobile-menu-footer'>
                <a class='btn btn-primary btn-block' href='https://www.mytablemesa.com/'>
                  Learn more about Table Mesa
                </a>
              </div>
            </div>
            <button aria-label='toggle menu' class='tcon tcon-menu--xcross menu-button' type='button'>
              <span aria-hidden='true' class='tcon-menu__lines'></span>
              <span class='tcon-visuallyhidden'>
                toggle menu
              </span>
            </button>
          </div>
        </div>
      </div>
      <div class='hidden-xs'>
        <div class='desktop-nav'>
          <div class='navbar-right'>
            <ul class='nav navbar-nav'>
              <li class='dropdown'>
                <a class='dropdown-toggle' href='#' onclick='return false;'>
                  Topics
                </a>

                <ul class='dropdown-menu'>
                    <?php wp_list_categories( array(
                        'orderby' => 'name',
                        'title_li'=> '',
                        'exclude' => '1'
                    ) ); ?> 
                </ul>
              </li>
              <li>
                <a class='modal-btn' href='#' onclick='return false;'>
                  Subscribe
                </a>
              </li>
              <li class="desktop-searchbar">
                <a class='pull-left search-toggle' href='#' onclick='return false;'>
                  <i class='material-icons'>
                    search
                  </i>
                </a>
                <?php get_search_form( ); ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div id='skrollr-body'>