<?php get_header(); ?>

<main>
    <h2>See some of our work!</h2>
    <div class="gallery">
        <?php
        $gallery  = get_field('photo_gallery');

        foreach ($gallery as $image) { ?>
            <div class="gallery-image-frame">
                <?php if (strtolower(end(explode(".", wp_get_attachment_url($image)))) == "mp4" || strtolower(end(explode(".", wp_get_attachment_url($image)))) == "mp4") { ?>
                    <video muted="true" src="<?php echo wp_get_attachment_url($image); ?>" class="gallery-image">
                    <?php } else { ?>
                        <img src="<?php echo wp_get_attachment_url($image); ?>" class="gallery-image">
                    <?php } ?>
            </div>
        <?php } ?>
    </div>
</main>

<div id="myModal" class="modal">
    <div class="modal-caption">
        <p>Click on the image to close.</p>
    </div>
    <img id="modal-img" class="modal-img">
    <video muted="true" controls id="modal-vid" class="modal-vid">
</div>

<?php get_footer(); ?>