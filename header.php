<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo wp_get_attachment_url(carbon_get_theme_option('logo_small')); ?>/assets/images/favicon.png">
    <!-- Primary Meta Tags -->
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta name="title" content="Hartzell Housekeeping">
    <meta name="description" content="">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="#">
    <meta property="og:title" content="Hartzell Housekeeping">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php echo wp_get_attachment_url(carbon_get_theme_option('logo_full')); ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="#">
    <meta property="twitter:title" content="Hartzell Housekeeping">
    <meta property="twitter:description" content="">
    <meta property="twitter:image" content="<?php echo wp_get_attachment_url(carbon_get_theme_option('logo_full')); ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-47C8MPD24K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-47C8MPD24K');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5NQ2QCR');
    </script>
    <!-- End Google Tag Manager -->

    <?php wp_head(); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NQ2QCR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <nav>
        <img src="<?php echo wp_get_attachment_url(carbon_get_theme_option('logo_small')); ?>" class="logo-small">

        <ul class="nav-items">
            <li><a href="/home">Home</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/testimonials">Testimonials</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/team">Our Team</a></li>
            <li><a href="javascript:void(0);" id='contact'>Contact Us</a></li>
        </ul>

        <a href="javascript:void(0);" class="mobile-menu-icon"><i class="fa-solid fa-bars"></i></a>

        <a href="<?php echo carbon_get_theme_option('booking_url'); ?>" target="_blank" class="quote-button">Get a Quote</a>
    </nav>

    <header>
        <div class="header-box">
            <img src="<?php echo wp_get_attachment_url(carbon_get_theme_option('logo_full')); ?>">
            <?php if (get_field('main_header')) { ?>
                <h3><?php the_field('main_header'); ?></h3>
            <?php } ?>
        </div>
    </header>

    <div class="contact">
        <div class="contact-box">
            <a href="javascript:void(0);" id="contact-close"><i class="fa-solid fa-xmark"></i></a>
            <form action="<?php echo carbon_get_theme_option('form_link'); ?>" method="POST">
                <input type="hidden" name="_next" value="https://www.hartzellhousekeeping.com/">
                <input type="text" name="name" placeholder="Name" maxlength="50" required>
                <input type="email" name="email" placeholder="Email" maxlength="50" required>
                <input type="text" name="subject" placeholder="Subject" maxlength="50" required>
                <textarea rows="5" name="message" placeholder="Type your message here!" maxlength="300" required></textarea>
                <button type="submit" name="submit" class="submit">Submit</button>
            </form>
        </div>
    </div>