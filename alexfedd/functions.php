<?php 
function add_assets()
{
    wp_enqueue_style('resetcss', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('aoscss', 'https://unpkg.com/aos@next/dist/aos.css');
    wp_enqueue_style('fontscss', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('stylecss', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('headercss', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('footers', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('stylemediacss', get_template_directory_uri() . '/assets/css/media/style-media.css');
    wp_enqueue_style('headermediacss', get_template_directory_uri() . '/assets/css/media/header-media.css');
    wp_enqueue_style('footermediacss', get_template_directory_uri() . '/assets/css/media/footer-media.css');
    wp_enqueue_script('aosjs', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
    if(is_page_template( 'index.php' ) || is_page_template('contacts.php'))
    {
        wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/main.css');
        wp_enqueue_style('portfolio-cardcss', get_template_directory_uri() . '/assets/css/porfolio-card.css');
        wp_enqueue_style('main-mediacss', get_template_directory_uri() . '/assets/css/media/main-media.css');
        wp_enqueue_style('portfolio-card-mediacss', get_template_directory_uri() . '/assets/css/media/portfolio-card-media.css');
    }
    else if(is_page_template('portfolios.php'))
    {
        wp_enqueue_style('portfoliocss', get_template_directory_uri() . '/assets/css/portfolio.css');
        wp_enqueue_style('portfolio-cardcss', get_template_directory_uri() . '/assets/css/porfolio-card.css');
        wp_enqueue_style('protfolio-mediacss', get_template_directory_uri() . '/assets/css/media/portfolio-media.css');
        wp_enqueue_style('portfolio-card-mediacss', get_template_directory_uri() . '/assets/css/media/portfolio-card-media.css');
    }
    else if(is_page_template('portfolio-work.php'))
    {
        wp_enqueue_style('portfolioworkcss', get_template_directory_uri() . '/assets/css/portfolio-work.css');
        wp_enqueue_style('protfoliowork-mediacss', get_template_directory_uri() . '/assets/css/media/portfolio-work-media.css');
        wp_enqueue_script('sliderjs', get_template_directory_uri() . '/assets/js/portfolio-work.js', array(), null, true);
    }
    else if (is_page_template('privacy-policy.php'))
    {
        wp_enqueue_style('policy-privacycss', get_template_directory_uri() . '/assets/css/policy-privacy.css');
    }
}
load_theme_textdomain('alexfedd', get_template_directory() . '/languages');

add_action('wp_enqueue_scripts', 'add_assets');

show_admin_bar(false);