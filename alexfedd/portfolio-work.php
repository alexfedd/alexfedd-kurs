<?php get_header();
/* Template Name: portfolio-work
   Template Post Type: work

*/
$curId = get_the_ID();
$curPost = get_post(intval($curId));
?>

<section class="header-info">
    <h2><?php echo $curPost->post_title ?></h2>
    <div class="header-descr">
        <div class="stack-info">
            <h3>
                <?php echo __('Стек', 'alexfedd') ?>:
            </h3>
            <ul>
                <?php
                $stack = get_post_meta($curId, 'stack', false);
                foreach ($stack as $key) {
                ?>
                    <li><?php echo $key ?></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="project-main-info">
            <h3><?php echo __('Информация', 'alexfedd') ?>:</h3>
            <ul>
                <li class="inf"><?php echo __('Начато', 'alexfedd') ?>:</li>
                <li class="val"><?php echo get_post_meta($curId, 'begin-date', true) ?></li>
                <li class="inf"><?php echo __('Окончено', 'alexfedd') ?>:</li>
                <li class="val"><?php echo get_post_meta($curId, 'complete-date', true) ?></li>
                <li class="inf"><?php echo __('Стоимость', 'alexfedd') ?>:</li>
                <li class="val">$<?php echo get_post_meta($curId, 'price', true) ?></li>
            </ul>
        </div>
    </div>
</section>
<img src="<?php echo wp_get_attachment_thumb_url(get_post_meta($curId, 'work-photos', false)[0], 'medium') ?>" class="bg-image" alt="">
</div>
</header>
<main>
    <section class="main-descr">
        <div class="container">
            <h3><?php echo __('Описание', 'alexfedd') ?></h3>
            <?php echo $curPost->post_content ?>
        </div>
    </section>
    <section class="slider-block">
        <div class="container">
            <div class="slider">
                <div class="slider-items">
                    <?php
                    $photos = get_post_meta($curId, 'work-photos', false);
                    foreach ($photos as $photo) {
                    ?>
                        <img src="<?php echo wp_get_attachment_image_url($photo, 'large')?>" alt="Картинка" loading="lazy" class="slider-item">
                    <?php
                    }
                    ?>
                </div>
                <button class="slider-button slider-button-left">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/slide-left.svg' ?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/slide-left.svg' ?>" class="blur-btn" alt="">
                </button>
                <button class="slider-button slider-button-right">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/slide-right.svg' ?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/slide-right.svg' ?>" class="blur-btn" alt="">
                </button>
            </div>
            <div class="slider-dots-container">
            </div>

        </div>
    </section>
</main>

<?php get_footer(); ?>