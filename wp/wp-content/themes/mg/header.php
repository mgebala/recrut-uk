<?php
/**
 * The template for displaying the header.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="layout__wrapper">
    <div class="layout__inner">
        <header class="layout__header">
            <div class="layout__container">
                <div class="layout__header-row">
                    <div class="layout__header-logo">
                        <a href="<?= esc_url(home_url('/')); ?>" rel="home">
                            <img src="<?php echo sprintf('%s/logo.svg', untrailingslashit(IMG_URI)); ?>" alt="<?= esc_attr(get_bloginfo('name', 'display')); ?>"/>
                        </a>
                    </div>
                    <nav class="layout__header-nav">
                        <?php wp_nav_menu(array(
                            'menu' => 'main-menu',
                            'container_class' => 'nav-main-menu',
                            'depth' => 1
                        ));?>
                    </nav>
                    <div class="layout__header-actions">
                        <div class="layout__toggle-nav">
                            <span>&nbsp;</span>
                            <span>&nbsp;</span>
                            <span>&nbsp;</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="layout__main">