<?php

get_header();

$show_default_title = get_post_meta( get_the_ID(), '_et_pb_show_title', true );

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<div id="main-content">
    <div class="container">
        <div id="content-area" class="clearfix">
            <div id="left-area">

                <?php while (have_posts()) : the_post(); ?>
                    <?php if (et_get_option('divi_integration_single_top') <> '' && et_get_option('divi_integrate_singletop_enable') == 'on') echo(et_get_option('divi_integration_single_top')); ?>

                    <?php

                    while (have_posts()) : 
                        the_post();

                        if (gdkob_query()->sub_type != '') {
                            echo '<div class="gdkob-entry-wrapper gdkob-resource-archive">';

                            gdkob_load_template('gdkob-product-resources.php');

                            echo '</div>';
                        } else {
                            echo '<div class="gdkob-entry-wrapper">';

                            gdkob_load_template('gdkob-product-single.php');

                            echo '</div>';

                            if (comments_open() || get_comments_number()) :
                                comments_template('', true);
                            endif;
                        }

                    endwhile;

                    ?>

                <?php endwhile; ?>

            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer();