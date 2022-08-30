<?php get_header(); ?>

<section class="section-text-left">
    <div class="section-img-right">
        <img src="<?php echo wp_get_attachment_url(get_field('services_img')); ?>">
    </div>
    <div class="section-text">
        <h1><?php the_field('services_header'); ?></h1>
        <ul>
            <?php
            $services  = get_field('services');

            foreach ($services as $service) { ?>
                <li><?php echo ($service['service']); ?></li>
            <?php } ?>
        </ul>
    </div>
</section>

<section class="section-text-right">
    <div class="section-img-left">
        <img src="<?php echo wp_get_attachment_url(get_field('about_us_img')); ?>">
    </div>
    <div class="section-text">
        <h1><?php the_field('about_us_header'); ?></h1>
        <p><?php the_field('about_us_founded'); ?></p>
        <?php the_field('about_us_text'); ?>
    </div>
</section>

<section class="section-text-left">
    <div class="section-img-right">
        <img src="<?php echo wp_get_attachment_url(get_field('service_area_img')); ?>">
    </div>
    <div class="section-text">
        <h1><?php the_field('service_area_header'); ?></h1>
        <p><?php the_field('service_area_text_1'); ?></p>
        <p><?php the_field('service_area_text_2'); ?></p>
    </div>
</section>


<?php get_footer(); ?>