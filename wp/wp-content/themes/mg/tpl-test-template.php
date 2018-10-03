<?php
/**
 * Template Name: Test tmpl
 *
 */
?>
<?php get_header(); ?>

<section class="layout__module layout__module-wide">
    <div class="layout__module-inner">
        <div class="layout__module-item">
            <div class="layout__module-item-media">
                <img src="<?php echo sprintf('%s/slide.jpg', untrailingslashit(IMG_URI)); ?>" alt="Slide image">
            </div>
            <div class="layout__module-item-header">
                <div class="layout__container">
                    <h1>Just a random heading...</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $sectionTitle = get_field('title');
    $sectionParagraph = get_field('section_paragraph');
?>

<?php if(!empty($sectionTitle) || !empty($sectionParagraph)): ?>
    <section class="layout__module layout__module-align--center layout-module--w-medium">
        <div class="layout__container">
            <div class="layout__module-item">
                <?php if(!empty($sectionTitle)): ?>
                    <h2><?= $sectionTitle ?></h2>
                <?php endif ?>
                <?= $sectionParagraph?>
            </div>
        </div>
    </section>
<?php endif ?>

<?php
    $services = new WP_Query(array(
        'post_type' => 'service',
        'post_status' => 'publish',
        'posts_per_page' => -1
    ));
?>

<?php if($services->have_posts()): ?>
    <section class="layout__module layout__colour--second">
        <div class="layout__container">
            <?php while($services->have_posts()): $services->the_post(); ?>
                <div class="layout__module-item">
                    <?= has_post_thumbnail()? get_the_post_thumbnail(get_the_ID(), 'service-size') : ''?>
                    <h3><?= get_the_title(); ?></h3>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </section>
<?php endif ?>

<?php get_footer(); ?>
