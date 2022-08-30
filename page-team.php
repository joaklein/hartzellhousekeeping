<?php get_header(); ?>

<main>
    <h2>Meet our team!</h2>
    <?php
    $team_members = get_field('team');

    foreach ($team_members as $team_member) { ?>
        <div class="team-member">
            <h3><?php echo ($team_member['team_member_name']); ?></h3>
            <img src="<?php echo wp_get_attachment_url($team_member['team_member_photo']); ?>" class="team-member-photo">
            <p><?php echo ($team_member['team_member_bio']); ?></p>
        </div>
    <?php } ?>
</main>

<?php get_footer(); ?>