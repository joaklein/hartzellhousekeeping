<?php get_header(); ?>

<main>
    <h2>Here's what some people have to say!</h2>
    <div class="testimonial-container">
        <?php
        $testimonials = get_field('testimonials');

        foreach ($testimonials as $quote) { ?>
            <div class="testimonial">
                <i class="fa-solid fa-quote-left"></i>
                <p><?php echo ($quote['testimonial_name']); ?>:</p>
                <p><?php echo ($quote['testimonial_quote']); ?></p>
            </div>
        <?php } ?>
    </div>
</main>

<?php get_footer(); ?>