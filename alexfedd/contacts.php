<?php get_header();
/* Template Name: contacts*/
$lang_id = '';
if(explode('/',$_SERVER['REQUEST_URI'])[1] == 'en')
{
    $lang_id = 'en-';
}
?>

<section class="header-info">
    <div class="header-descr">
        <h1 data-aos="zoom-in">
            <?php echo get_post_meta(get_the_ID(), 'page-title', true) ?>
        </h1>
        <p data-aos="fade-right"><?php echo get_post_meta(get_the_ID(), 'page-describtion', true) ?></p>
    </div>
    <div class="call-btn" data-aos="zoom-in">
        <a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#contacts"><?php echo __('Заказать', 'alexfedd') ?></a>
        <a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#contacts" class="blur-btn"><?php echo __('Заказать', 'alexfedd') ?></a>
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
    <section class="contacts" id="contacts" style="overflow: hidden;">
        <div class="container">
            <h2 data-aos="fade-right"><?php echo __('Контакты', 'alexfedd') ?></h2>
            <h3 class="afterform-mes" style="align-self: center; font-size: 30px; font-weight: 600; display: none;"><?php echo __('Спасибо за ваше сообщение!', 'alexfedd') ?></h3>
            <form action="POST" class="feedback-form">
                <div class="personal-data">
                    <div class="input-wrapper" data-aos="fade-up">
                        <input type="text" required name="name" placeholder="<?php echo __('Имя', 'alexfedd') ?>" id="name">
                        <div class="upper-line"></div>
                        <div class="lower-line"></div>
                    </div>
                    <div class="input-wrapper" data-aos="fade-up">
                        <input type="email" required name="email" placeholder="E-Mail" id="email">
                        <div class="upper-line"></div>
                        <div class="lower-line"></div>
                    </div>
                </div>
                <div class="input-wrapper" data-aos="fade-up">
                    <textarea name="message" required autocomplete="off" placeholder="<?php echo __('Ваше сообщение', 'alexfedd') ?>" id="message"></textarea>
                    <div class="upper-line"></div>
                    <div class="lower-line"></div>
                </div>
                <label for="pol_priv" class="checkbox-wrapper" data-aos="fade-up"><?php echo __('Я прочитал и согласен с ', 'alexfedd') ?><a href="policy-privacy.html"><?php echo __('Политикой конфиденциальности', 'alexfedd') ?></a>
                    <input type="checkbox" required name="pol-priv" id="pol_priv" class="pol-priv-checkbox">
                    <div class="new-checkbox"></div>
                </label>
                <div class="submit" data-aos="zoom-in">
                    <button type="submit" class="submit-btn"><?php echo __('Отправить', 'alexfedd') ?></button>
                    <button type="submit" class="submit-btn blur-btn"><?php echo __('Отправить', 'alexfedd') ?></button>
                </div>
            </form>
            <div class="social-media">
                <p data-aos="fade-up"><?php echo __('Социальные сети, где вы можете связаться со мной:', 'alexfedd') ?></p>
                <div class="soc-meds">
                    <?php
                    $socmed_arr = get_option('contacts_social-media');
                    if (is_array($socmed_arr)) {
                        $medias = $socmed_arr;
                    } else {
                        $medias = [];
                        array_push($medias, $socmed_arr);
                    }


                    for ($index = 0; $index < count($medias); $index++) {
                    ?>
                        <div class="soc-med" data-aos="zoom-in">
                            <img src="<?php echo wp_get_attachment_image_url(get_option('contacts_soc-med-logo')[$index], false) ?>" alt="Telegram">
                            <a href="#"><?php echo $medias[$index] ?></a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>