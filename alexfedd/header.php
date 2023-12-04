<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="vhXibthrqNIlrkeJq7COkslliV2brVEnMrNWB6dqpaI" />
    <?php wp_head()?>
    <title><?php the_title()?></title>
    <meta name="description" content="<?php the_content()?>">
</head>
<body>
    <header>
        <div class="container">
            <nav class="nav-bar">
                <div class="lang">
                    <?php $link =  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"?> 
                    <a href="<?php echo str_replace(['en/', '/web-development'], ['ru/','/%d1%81%d0%b0%d0%b9%d1%82-%d0%bd%d0%b0-%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7'], $link)?>" class="ru-btn">RU</a>
                    <a href="<?php echo str_replace(['ru/', '/%d1%81%d0%b0%d0%b9%d1%82-%d0%bd%d0%b0-%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7'], ['en/','/web-development'], $link) ?>" class="en-btn">EN</a>
                </div>
                <ul class="navigation" >
                    <li><a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>"><?php echo __('Главная', 'alexfedd') ?></a></li>
                    <li><a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#about-me"><?php echo __('Обо мне', 'alexfedd') ?></a></li>
                    <li><a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#skills"><?php echo __('Мои навыки', 'alexfedd') ?></a></li>
                    <li><a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#portfolio"><?php echo __('Портфолио', 'alexfedd') ?></a></li>
                    <li><a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#price-list"><?php echo __('Прайс-лист', 'alexfedd') ?></a></li>
                    <li><a href="<?php echo 'http://'. $_SERVER['HTTP_HOST'];?>#contacts"><?php echo __('Контакты', 'alexfedd') ?></a></li>
                    <div class="close-btn">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/close.svg'?>" alt="Close">
                    </div>
                </ul>
                <div class="nav-btn">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/ham.svg'?>" alt="Navigation hamburger">
                </div>
            </nav>