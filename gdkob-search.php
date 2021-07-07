<?php get_header(); ?>

<div id="main-content">
    <div class="container">
        <div id="content-area" class="clearfix">
            <div id="left-area">

                <?php gdkob_load_template('gdkob-search-results.php'); ?>

            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer();