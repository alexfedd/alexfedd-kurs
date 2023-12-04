<?php get_header();
/* Template Name: privacy-policy*/
$lang_id = '';
if(explode('/',$_SERVER['REQUEST_URI'])[1] == 'en')
{
    $lang_id = 'en-';
}
?>

</header>
<main>
    <div class="container">
        <h2><?php echo get_post_meta(get_the_ID(), 'page-title', true)?></h2>
        <p><?php echo get_option('policy-privacy_'. $lang_id .'text')?></p>
    </div>
</main>

<?php get_footer(); ?>