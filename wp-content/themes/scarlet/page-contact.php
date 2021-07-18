<?php
/*
 * Template Name: Contact
 */



get_header();
?>

<div id="content-blocks" class="contact">

    <!-- Contact Block -->
<?php if (have_rows('contact_block')) : ?>
    <?php
    while (have_rows('contact_block')) : the_row();
        // Vars
        $cta = get_sub_field('cta');
        $hours = get_sub_field('hours');
        $img = get_sub_field('map_image');
        $admission = get_sub_field('admission');
        $directions = get_sub_field('directions');
        $description = get_sub_field('description');
        $get_in_touch = get_sub_field('get_in_touch');
        ?>
            <div class="contact-block-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 contact-content">

                            <h2 class="h1"><?php echo the_title(); ?></h2>

        <?php if ($description <> '') : ?>
                                <p class="description">
                                <?php echo $description; ?>
                                </p>
                                <?php endif; ?>

                            <?php if ($hours <> '') : ?>
                                <div class="contact-block">
                                    <h6><?php echo _e('hours', 'wa'); ?>:</h6>
                                    <span><?php echo $hours; ?></span>
                                </div>
        <?php endif; ?>

                            <?php if ($admission <> '') : ?>
                                <div class="contact-block">
                                    <h6><?php echo _e('admission', 'wa'); ?>:</h6>
                                    <span><?php echo $admission; ?></span>
                                </div>
        <?php endif; ?>

                        </div>
                        <div class="col-md-4 col-md-push-1 contact-sidebar">

        <?php if ($img <> '') : ?>
                                <div class="img" style="background: url(<?php echo $img['url']; ?>);"></div>
                            <?php endif; ?>

                            <?php if ($directions <> '') : ?>
                                <div class="contact-block">
                                    <h6><?php echo _e('directions', 'wa'); ?>:</h6>
                                    <address><?php echo $directions; ?></address>
                                </div>
        <?php endif; ?>

                            <?php if ($get_in_touch <> '' || $cta <> '') : ?>
                                <div class="contact-block">
                                    <h6><?php echo _e('get in touch', 'wa'); ?>:</h6>

                                    <div class="contact-contant">
            <?php if ($get_in_touch <> '') : ?>
                                            <?php echo $get_in_touch; ?>
                                        <?php endif; ?>
                                    </div>

            <?php if ($cta <> '') : ?>
                                        <a class="button-alt" href="<?php echo $cta['url']; ?>"><?php echo $cta['title']; ?></a>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>

                            <div class="contact-block">
                                <h6><?php echo _e('FOLLOW US', 'wa'); ?>:</h6>
        <?php front::print_social_icons(); ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

    <?php endwhile; ?>
    <?php endif; ?>

</div>

<?php if (function_exists('have_rows')) : ?>

    <?php while (have_rows('content')) : the_row(); ?>

        <?php get_template_part('/template-parts/blocks/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>