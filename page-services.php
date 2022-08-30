<?php get_header(); ?>

<main>
    <h2>Our Full Service List</h2>
    <?php
    $services = get_field('services_list');

    foreach ($services as $service) { ?>
        <div class="services-section">
            <div class="services-section-header">
                <h3><?php echo ($service['services_type']); ?></h3>
                <div class="min-max">
                    <i class="fa-solid fa-minus"></i>
                </div>
            </div>
            <div class="service-lists">
                <div class="services-left-col">
                    <?php
                    foreach ($service['services_left'] as $left) { ?>
                        <div class="services-chunk">
                            <h4><?php echo ($left['services_left_header']); ?></h4>
                            <ul>
                                <?php
                                foreach ($left['services_left_list'] as $left_item) { ?>
                                    <li><?php echo ($left_item['services_left_item']); ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
                <div class="services-right-col">
                    <?php
                    foreach ($service['services_right'] as $right) { ?>
                        <div class="services-chunk">
                            <h4><?php echo ($right['services_right_header']); ?></h4>
                            <ul>
                                <?php

                                foreach ($right['services_right_list'] as $right_item) { ?>
                                    <li><?php echo ($right_item['services_right_item']); ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>

</main>

<?php get_footer(); ?>