<?php
if (!defined('ABSPATH')) exit;

function softech_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    add_theme_support('custom-logo', ['height'=>90, 'width'=>360, 'flex-height'=>true, 'flex-width'=>true]);
    register_nav_menus([
        'primary' => __('Primary Menu', 'softech'),
        'footer' => __('Footer Menu', 'softech')
    ]);
}
add_action('after_setup_theme', 'softech_theme_setup');

function softech_assets() {
    wp_enqueue_style('softech-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap', [], null);
    wp_enqueue_style('softech-main', get_template_directory_uri() . '/assets/css/main.css', [], '1.0.0');
    wp_enqueue_script('softech-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'softech_assets');

function softech_courses() {
    return [
        ['title'=>'Basic Computer', 'duration'=>'3 Months', 'icon'=>'💻', 'desc'=>'Computer fundamentals, typing, MS Office and internet basics.'],
        ['title'=>'CCC Certification', 'duration'=>'3 Months', 'icon'=>'🎓', 'desc'=>'Complete preparation for recognized CCC computer certification.'],
        ['title'=>'ADCA / DCA', 'duration'=>'12 Months', 'icon'=>'📜', 'desc'=>'Diploma program covering office, accounting, design and web basics.'],
        ['title'=>'Advanced Excel', 'duration'=>'2 Months', 'icon'=>'📊', 'desc'=>'Formulas, dashboards, reports, pivot tables and data handling.'],
        ['title'=>'Tally Prime with GST', 'duration'=>'2 Months', 'icon'=>'🧾', 'desc'=>'Accounting, GST billing, inventory and business reports.'],
        ['title'=>'Graphic Designing', 'duration'=>'2 Months', 'icon'=>'🎨', 'desc'=>'Photoshop, Illustrator, poster design and social media creatives.'],
        ['title'=>'Web Designing', 'duration'=>'3 Months', 'icon'=>'🌐', 'desc'=>'HTML, CSS, WordPress and responsive website development.'],
        ['title'=>'Python Programming', 'duration'=>'3 Months', 'icon'=>'🐍', 'desc'=>'Python basics, logic building, automation and practical projects.']
    ];
}

function softech_seed_pages_notice() {
    if (current_user_can('manage_options')) {
        echo '<div class="notice notice-info"><p><strong>Softech Theme:</strong> Create these pages in WordPress: Home, About Us, Certification Courses, Computer Courses, Results, Gallery, Student Testimonials, Admissions, Blog / News, Contact Us. Set Home as static front page.</p></div>';
    }
}
add_action('admin_notices', 'softech_seed_pages_notice');
