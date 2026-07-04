<?php if (!defined('ABSPATH')) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Softech Computer Centre Ganaur offers certification courses, computer courses, result-oriented training, admissions and practical learning.">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="topbar">
  <div class="container topbar-inner">
    <span>Welcome to Softech Computer Centre, Ganaur</span>
    <div><a href="tel:+919996212345">☎ +91 99962 12345</a><a href="mailto:info@softechganaur.com">✉ info@softechganaur.com</a></div>
  </div>
</header>
<nav class="site-header">
  <div class="container nav-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Softech Home">
      <?php if (has_custom_logo()) { the_custom_logo(); } else { ?>
        <span class="logo-mark">S</span><span><strong>SOFTECH</strong><small>COMPUTER CENTRE<br>GANAUR</small></span>
      <?php } ?>
    </a>
    <button class="menu-toggle" aria-label="Open menu">☰</button>
    <?php wp_nav_menu(['theme_location'=>'primary','container'=>false,'menu_class'=>'main-menu','fallback_cb'=>'softech_fallback_menu']); ?>
    <a class="btn btn-primary nav-cta" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Enquire Now</a>
  </div>
</nav>
<?php
function softech_fallback_menu(){
  echo '<ul class="main-menu"><li><a href="'.esc_url(home_url('/')).'">Home</a></li><li><a href="'.esc_url(home_url('/about-us/')).'">About Us</a></li><li><a href="'.esc_url(home_url('/certification-courses/')).'">Certification Courses</a></li><li><a href="'.esc_url(home_url('/computer-courses/')).'">Computer Courses</a></li><li><a href="'.esc_url(home_url('/results/')).'">Results</a></li><li><a href="'.esc_url(home_url('/gallery/')).'">Gallery</a></li><li><a href="'.esc_url(home_url('/admissions/')).'">Admissions</a></li><li><a href="'.esc_url(home_url('/blog/')).'">Blog</a></li><li><a href="'.esc_url(home_url('/contact-us/')).'">Contact Us</a></li></ul>';
}
?>
