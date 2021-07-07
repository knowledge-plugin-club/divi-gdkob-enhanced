<?php get_header(); ?>

<div id="main-content">
    <div class="container">
        <div id="content-area" class="clearfix">
            <div id="left-area">

                <header class="archive-header">
                    <h1 class="archive-title">
                        <?php _e("Knowledge Base Category Archives"); ?>
                    </h1>
                </header>

                <?php

                if (have_posts()) :

                    gdkob_load_template('gdkob-current-term.php');

                    gdkob_load_template('gdkob-list-categories.php');

                    while (have_posts()) : 
                        the_post();

                        $post_type = get_post_type();

                        if ($post_type == gdkob()->posttype_article()) {
                            gdkob_load_template('gdkob-article-archive.php');
                        } else if ($post_type == gdkob()->posttype_faq()) {
                            gdkob_load_template('gdkob-faq-archive.php');
                        } else if ($post_type == gdkob()->posttype_reference()) {
                            gdkob_load_template('gdkob-reference-archive.php');
                        } else if ($post_type == gdkob()->posttype_user_guide()) {
                            gdkob_load_template('gdkob-user_guide-archive.php');
                        }
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