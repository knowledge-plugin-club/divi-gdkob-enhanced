<?php get_header(); ?>

<div id="main-content">
    <div class="container">
        <div id="content-area" class="clearfix">
            <div id="left-area">

                <header class="archive-header">
                    <h1 class="archive-title">
                        <?php _e("Knowledge Base Products Archives"); ?>
                    </h1>
                </header>

                <?php

                if (have_posts()) :

                    gdkob_load_template('gdkob-current-term.php');

                    gdkob_load_template('gdkob-list-groups.php');

                    while (have_posts()) : 
                        the_post();

                        gdkob_load_template('gdkob-product-archive.php');
                    endwhile;

                    gdkob_the_posts_pagination();

                else :

                    gdkob_load_template('gdkob-content-none.php');

                endif;

                ?>

            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer();