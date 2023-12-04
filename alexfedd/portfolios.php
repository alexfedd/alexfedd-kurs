<?php get_header();
/* Template Name: portfolio*/
?>

<section class="header-info">
    <div class="header-descr">
        <h1 data-aos="zoom-in">
            <?php echo get_post_meta(get_the_ID(), 'page-title', true) ?>
        </h1>
        <p data-aos="fade-right"><?php echo get_post_meta(get_the_ID(), 'page-describtion', true) ?></p>
    </div>
    <div class="call-btn" data-aos="zoom-in">
        <a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#contacts""><?php echo __('Заказать', 'alexfedd') ?></a>
        <a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#contacts"" class="blur-btn"><?php echo __('Заказать', 'alexfedd') ?></a>
    </div>
</section>
</div>
<div class="laptops">
    <blur class="purple blur"></blur>
    <blur class="cyan blur"></blur>
    <blur class="blue blur"></blur>
	<div class="notebook-first" data-aos-duration="500" data-aos="fade-up">
		<img src="<?php echo get_template_directory_uri() . '/assets/img/notebook.png' ?>" class="laptop-wrapper" alt="Laptop">
		<div style="background-image: url(<?php echo wp_get_attachment_image_url(get_option('laptops_first-laptop')[0], 'medium') ?>);" class="laptop-content"><img src="<?php echo wp_get_attachment_image_url(get_option('laptops_first-laptop')[0], 'large') ?>" alt="Content 1"></div>
	</div>
	<div class="notebook-second" data-aos-delay="500" data-aos-duration="1000" data-aos="fade-left">
		<img src="<?php echo get_template_directory_uri() . '/assets/img/notebook.png' ?>" class="laptop-wrapper" alt="Laptop">
		<div style="background-image: url(<?php echo wp_get_attachment_image_url(get_option('laptops_second-laptop')[0], 'medium') ?>);" class="laptop-content img-loader">
			<img src="<?php echo wp_get_attachment_image_url(get_option('laptops_second-laptop')[0], 'large') ?>" alt="Content 1">
		</div>
	</div>
</div>
</header>

<main>
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="portfolios">
                <?php
                // параметры по умолчанию
                $my_posts = get_posts(array(
                    'post_per_page' => -1,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  => '',
                    'post_type'   => 'work',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));

                global $post;

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                ?>
                    <div class="portfolio-card" data-aos="fade-up">
                        <h3><?php the_title() ?></h3>
						<div style="background-image: url(<?php echo wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'work-photos', false)[0], 'medium') ?>);"  class="card-bg img-loader">
							<img src="<?php echo wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'work-photos', false)[0], 'large') ?>" alt="work background" class="card-bg">
						</div>
                        <div class="portfolio-card-info">
                            <?php the_content() ?>
                            <ul class="stack">
                                <?php
                                $stackItems = get_post_meta(get_the_ID(), 'stack', false);
                                foreach ($stackItems as $item) {
                                ?>
                                    <li><?php echo $item ?></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="read-more">
                            <a href="<?php the_permalink()?>" class="read-more-btn"><?php echo __('Подробнее', 'alexfedd') ?></a>
                            <a href="<?php the_permalink()?>" class="read-more-btn blur-btn"><?php echo __('Подробнее', 'alexfedd') ?></a>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata(); // сбро
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>