<footer>
        <div class="container">
            <div class="footer-info">
                <ul class="footer-nav" data-aos="fade-right">
                <li><a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>"><?php echo __('Главная', 'alexfedd') ?></a></li>
                <li><a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#about-me"><?php echo __('Обо мне', 'alexfedd') ?></a></li>
                <li><a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#skills"><?php echo __('Мои навыки', 'alexfedd') ?></a></li>
                <li><a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#portfolio"><?php echo __('Портфолио', 'alexfedd') ?></a></li>
                <li><a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#price-list"><?php echo __('Прайс-лист', 'alexfedd') ?></a></li>
                <li><a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#contacts"><?php echo __('Контакты', 'alexfedd') ?></a></li>
                </ul>
                <div class="footer-text" data-aos="fade-up">
                    <p>©<?php echo date("Y")?> <?php echo __('Все права защищены', 'alexfedd') ?></p>
                    <a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>policy-privacy/"><?php echo __('Политика конфиденциальности', 'alexfedd') ?></a>
                </div>
            </div>
            <div class="footer-soc-med"  data-aos="fade-up">
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

    </footer>
    <?php wp_footer();?>
</body>
</html>